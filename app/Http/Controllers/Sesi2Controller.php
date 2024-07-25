<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Pusher\Pusher;
use App\Models\Team;
use App\Models\Participant;
use App\Events\SetpoinSesi2;
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

            $pusher = new Pusher(
                env('PUSHER_APP_KEY'),
                env('PUSHER_APP_SECRET'),
                env('PUSHER_APP_ID'),
                [
                    'cluster' => env('PUSHER_APP_CLUSTER'),
                    'useTLS' => true,
                ]
            );
            $data = [
                'id' => $request->id,
                'id_team' => $request->id_team,
                'poin' => $request->poin,
                'id_pertanyaan' => $request->id_pertanyaan,
                'tanggal' => Carbon::now(),
                'sesi' => $request->sesi,
            ];
            $pusher->trigger('my-KirimPointStoreS1', 'my-KirimPointStoreS1', $data);
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

            $pusher = new Pusher(
                env('PUSHER_APP_KEY'),
                env('PUSHER_APP_SECRET'),
                env('PUSHER_APP_ID'),
                [
                    'cluster' => env('PUSHER_APP_CLUSTER'),
                    'useTLS' => true,
                ]
            );

            $data = [
                'id' => $sesi3->id,
                'id_team' => $sesi3->id_team,
                'poin' => $sesi3->poin,
                'id_pertanyaan' => $sesi3->id_pertanyaan,
                'tanggal' => $sesi3->tanggal,
                'sesi' => $sesi3->sesi,
            ];

            $pusher->trigger('my-KirimPointStoreS1', 'my-KirimPointStoreS1', $data);
        }

        return back()->with('success', 'Success');
    }
}
