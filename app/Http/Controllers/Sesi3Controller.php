<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Sesi3;
use Illuminate\Http\Request;

class Sesi3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $team = Team::all();
        $sesi3 = Sesi3::all();

        return view('operator.jenispertanyaan.sesi3', compact('team', 'sesi3'));
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
