<?php

namespace App\Http\Controllers;

use Pusher\Pusher;
use App\Models\Team;
use App\Models\Sesi3;
use App\Events\Minpoin;
use App\Events\Setpoin;
use App\Models\Wilayah;
use App\Events\AddPoints;
use App\Events\PindahSesi;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\PertanyaanSesi3;

class Sesi3Controller extends Controller
{
    public function index(Request $request)
    {
        $wilayah = Wilayah::where('id', $request->wilayah_id)->first();
        $pertanyaanSesi3s = PertanyaanSesi3::where('wilayah_id', $request->wilayah_id)->where('status', 1)->get();
        $teams = Team::all();

        return view('operator.jenispertanyaan.sesi3', compact(
            'wilayah',
            'pertanyaanSesi3s',
            'teams',
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'wilayah_id' => 'required',
            'pertanyaan' => 'required',
            'jawaban' => 'required',
        ]);

        $array = [
            'wilayah_id' => $request['wilayah_id'],
            'pertanyaan' => $request['pertanyaan'],
            'jawaban' => $request['jawaban'],
        ];

        PertanyaanSesi3::create($array);

        return back()->with('success', 'Success');
    }

    public function setpoin(Request $request)
    {
        $request->validate([
            'id_team' => 'required',
        ]);

        $sesi3 = Participant::where('id_team', $request->id_team)->where('sesi', 3)->first();
        if (!$sesi3) {
            $array = [
                'id_pertanyaan' => null,
                'id_team' => $request['id_team'],
                'poin' => 10,
                'tanggal' => now(),
                'sesi' => 3,
            ];

            Participant::create($array);

            $team = Team::where('id', $request->id_team)->first();

            if ($team) {
                event(new Setpoin([
                    'poin' => $team->participant()->sum('poin'),
                    'id_team' => $request['id_team'],
                ]));
            }
        } else {
            $sesi3->update([
                'id_pertanyaan' => null,
                'id_team' => $request['id_team'],
                'poin' => $sesi3->poin + 10,
                'tanggal' => now(),
                'sesi' => 3,
            ]);

            $team = Team::where('id', $sesi3->id_team)->first();
    
            if ($team) {
                event(new Setpoin([
                    'poin' => $team->participant()->sum('poin'),
                    'id_team' => $sesi3->id_team,
                ]));
            }
        }


        return back()->with('success', 'Success');

        // $team = Team::findOrFail($request->team_id);
        // $now = Carbon::now()->format('Y-m-d');
        // $sesi = Sesi3::where('date', $now)->where('id_team', $request->team_id)->first();

        // if($sesi){
        //     $sesi->poin += 10;
        //     $sesi->save();
        // }else{
        //     $sesi = new sesi3();
        //     $sesi->poin += 10; // Increment points by 10
        //     $sesi->date = Carbon::now(); // Set points to 10
        //     $sesi->id_team = $team->id;
        //     $sesi->save();
        // }

        // return response()->json(['points' => $sesi->poin]);
    }

    public function minpoin(Request $request)
    {
        $request->validate([
            'id_team' => 'required'
        ]);

        $sesi3 = Participant::where('id_team', $request->id_team)->where('sesi', 3)->latest();

        $sesi3 = Participant::firstOrCreate([
            'id_team' => $request->id_team,
            'sesi' => 3,
        ], [
            'id_pertanyaan' => null,
            'poin' => 0,
            'tanggal' => now()
        ]);

        $sesi3->update([
            'poin' => $sesi3->poin - 5
        ]);

        if ($sesi3) {
            $team = Team::where('id', $sesi3->id_team)->first();

            event(new Minpoin([
                'poin' => $team->participant()->sum('poin'),
                'id_team' => $request['id_team'],
            ]));
        }

        // if (!$sesi3) {
        //     $sesi3->create([
        //         'id_pertanyaan' => null,
        //         'id_team' => $request['id_team'],
        //         'poin' => -5,
        //         'tanggal' => now(),
        //         'sesi' => 3
        //     ]);
        // } else {
        //     $sesi3->update([
        //         'id_pertanyaan' => null,
        //         'id_team' => $request['id_team'],
        //         'poin' => $sesi3->poin - 5,
        //         'tanggal' => now(),
        //         'sesi' => 3
        //     ]);
        // }


        return back()->with('success', 'Success');

        // $now = Carbon::now()->format('Y-m-d');
        // $team = Team::findOrFail($request->team_id);
        // $sesi = Sesi3::where('date', $now)->where('id_team', $request->team_id)->first();

        // if ($sesi && $sesi->poin >= 10) {
        //     $sesi->poin -= 10; // Decrement points by 10
        //     $sesi->save();
        // }

        // return response()->json(['points' => $sesi->poin]);
    }

    public function kirimPertanyaanSesi3(Request $request)
    {
        event(new PindahSesi([
            'pertanyaan' => $request->pertanyaan,
            'jawaban' => $request->jawaban,
        ]));

        return response()->json($request, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sesi3 $sesi3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sesi3 $sesi3)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sesi3 $sesi3)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sesi3 $sesi3)
    {
        //
    }
}
