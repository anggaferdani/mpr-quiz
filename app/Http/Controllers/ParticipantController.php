<?php

namespace App\Http\Controllers;

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
        $participants = Participant::select('id_team')
        ->selectRaw('SUM(CASE WHEN sesi = 1 THEN poin ELSE 0 END) AS poin_sesi_1')
        ->selectRaw('SUM(CASE WHEN sesi = 2 THEN poin ELSE 0 END) AS poin_sesi_2')
        ->where('tanggal', $now)
        ->groupBy('id_team')
        ->orderBy('id_team')
        ->get();

        return view('operator.jenispertanyaan.nilai', compact('participants', 'now'));
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
        // dd($request);
        
            $newParticipant = new Participant();
            $newParticipant->id_team = $request->id_team;
            $newParticipant->poin = $request->poin;
            $newParticipant->id_pertanyaan = $request->id_pertanyaan;
            $newParticipant->tanggal = Carbon::now();
            $newParticipant->sesi = $request->sesi;
            $newParticipant->save();
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
