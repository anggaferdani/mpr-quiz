<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use App\Models\TemaPertanyaan;

class JawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jawaban = Jawaban::where('id_pertanyaan', $id)->get();
        return view('operator.jenispertanyaan.listjawaban', compact('jawaban'));
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
    public function show($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        $jawaban = Jawaban::where('id_pertanyaan', $id)->get();
        $tema = TemaPertanyaan::where('id', $pertanyaan->id_tema)->first();

        if($tema->sesi == 1){
            return view('operator.jenispertanyaan.listjawaban', compact('jawaban', 'pertanyaan'));
        }else{
            return view('operator.jenispertanyaan.listpoinsesi2', compact('jawaban', 'pertanyaan'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jawaban $jawaban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jawaban $jawaban)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jawaban $jawaban)
    {
        //
    }
}
