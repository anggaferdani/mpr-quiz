<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Sesi3;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class Sesi3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $now = Carbon::now()->format('Y-m-d');
        $team = Team::with(['sesi3' => function ($query) use ($now) {
            $query->whereDate('date', $now);
        }])->get();
        // dd($team);
        
        $sesi3 = Sesi3::all();

        return view('operator.jenispertanyaan.sesi3', compact('team', 'sesi3'));
    }

    public function setpoin(Request $request)
    {
        $team = Team::findOrFail($request->team_id);
        $now = Carbon::now()->format('Y-m-d');
        $sesi = Sesi3::where('date', $now)->where('id_team', $request->team_id)->first();

        if($sesi){
            $sesi->poin += 10;
            $sesi->save();
        }else{
            $sesi = new sesi3();
            $sesi->poin += 10; // Increment points by 10
            $sesi->date = Carbon::now(); // Set points to 10
            $sesi->id_team = $team->id;
            $sesi->save();
        }

        return response()->json(['points' => $sesi->poin]);
    }

    public function minpoin(Request $request)
    {
        $now = Carbon::now()->format('Y-m-d');
        $team = Team::findOrFail($request->team_id);
        $sesi = Sesi3::where('date', $now)->where('id_team', $request->team_id)->first();

        if ($sesi && $sesi->poin >= 10) {
            $sesi->poin -= 10; // Decrement points by 10
            $sesi->save();
        }
        
        return response()->json(['points' => $sesi->poin]);
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
