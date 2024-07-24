<?php

namespace App\Http\Controllers;

use App\Events\SetpoinSesi2;
use App\Models\Team;
use App\Models\Participant;
use Illuminate\Http\Request;

class Sesi2Controller extends Controller
{
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
                'poin' => $request->poin,
                'tanggal' => now(),
                'sesi' => 2,
            ];

            Participant::create($array);

            $team = Team::where('id', $request->id_team)->first();

            if ($team) {
                event(new SetpoinSesi2([
                    'poin' => $team->participant()->sum('poin'),
                    'id_team' => $request['id_team'],
                ]));
            }
        } else {
            $sesi3->update([
                'id_pertanyaan' => null,
                'id_team' => $request['id_team'],
                'poin' => $sesi3->poin + $request->poin,
                'tanggal' => now(),
                'sesi' => 2,
            ]);

            $team = Team::where('id', $sesi3->id_team)->first();
    
            if ($team) {
                event(new SetpoinSesi2([
                    'poin' => $team->participant()->sum('poin'),
                    'id_team' => $sesi3->id_team,
                ]));
            }
        }


        return back()->with('success', 'Success');
    }
}
