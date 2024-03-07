<?php

namespace App\Http\Controllers;

use App\Models\TemaPertanyaan;
use Illuminate\Http\Request;

class TemaPertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tema = TemaPertanyaan::where('sesi', 1)->latest()->get();
        return view('operator.jenispertanyaan.index', compact('tema'));
    }

    public function sesi2()
    {
        $tema = TemaPertanyaan::where('sesi', 2)->latest()->get();
        return view('operator.jenispertanyaan.sesi2', compact('tema'));
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
        $this->validate($request,[
            'tema' => 'required'
        ],[
            'tema' => 'Input Tema'
        ]);

        $Newtema = new TemaPertanyaan();
        $Newtema->tema = $request->tema;
        $Newtema->sesi = $request->sesi;

        $Newtema->save();

        if ($request->sesi == "1") {
            return redirect('/op/sesi-1');
        }else{
            return redirect('op/sesi-2');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(TemaPertanyaan $temaPertanyaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TemaPertanyaan $temaPertanyaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TemaPertanyaan $temaPertanyaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TemaPertanyaan $temaPertanyaan)
    {
        //
    }
}
