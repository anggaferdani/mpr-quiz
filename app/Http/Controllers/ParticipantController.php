<?php

namespace App\Http\Controllers;

use Pusher\Pusher;

use App\Models\Team;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $now = Carbon::now()->format('Y-m-d');
        $team = Team::all();
        $participants = Participant::select('id_team')
        ->selectRaw('SUM(CASE WHEN sesi = 1 THEN poin ELSE 0 END) AS poin_sesi_1')
        ->selectRaw('SUM(CASE WHEN sesi = 2 THEN poin ELSE 0 END) AS poin_sesi_2')
        ->where('tanggal', $now)
        ->groupBy('id_team')
        ->orderBy('id_team')
        ->get();

        return view('operator.jenispertanyaan.nilai', compact('participants', 'now', 'team'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_team' => 'required|integer',
            'poin' => 'required|integer',
            'sesi' => 'required|integer'
        ]);

        $hasilSesiDua = Participant::firstOrCreate([
            'id_team' => $request->id_team,
            'sesi' => $request->sesi
        ], [
            'id_pertanyaan' => $request->id_pertanyaan,
            'poin' => $request->poin,
            'tanggal' => now()
        ]);

        // ! WIP

        // $newParticipant = new Participant();

        // $newParticipant->id_team = $request->id_team;
        // $newParticipant->poin = $request->poin;
        // $newParticipant->id_pertanyaan = $request->id_pertanyaan;
        // $newParticipant->tanggal = Carbon::now();
        // $newParticipant->sesi = $request->sesi;
        // $newParticipant->save();

        // ! Mengirim data ke Pusher
        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            [
                'cluster' => env('PUSHER_APP_CLUSTER'),
                'useTLS' => true,
            ]
        );

        // ! Data yang akan dikirimkan ke Pusher
        $data = [
            'id' => $hasilSesiDua->id,
            'id_team' => $hasilSesiDua->id_team,
            'poin' => $hasilSesiDua->poin,
            'id_pertanyaan' => $hasilSesiDua->id_pertanyaan,
            'tanggal' => $hasilSesiDua->tanggal,
            'sesi' => $hasilSesiDua->sesi,
        ];

        // ! Mengirim pesan ke Pusher
        $pusher->trigger('my-KirimPointStoreS1', 'my-KirimPointStoreS1', $data);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Participant $participant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Participant $participant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Participant $participant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Participant $participant)
    {
        //
    }
}
