<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use App\Models\TemaPertanyaan;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $tema = TemaPertanyaan::find($id);
        $pertanyaan = Pertanyaan::where('id_tema', $id)->latest()->get();
        return view('operator.jenispertanyaan.pertanyaan', compact('pertanyaan', 'tema'));
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
    public function store(Request $request, $id)
    {
        // dd($request);
        $this->validate($request,[
            'pertanyaan' => 'required'
        ],[
            'pertanyaan' => 'Input Pertanyaan'
        ]);

        $pertanyaan = new Pertanyaan();
        $pertanyaan->id_tema = $id;
        $pertanyaan->pertanyaan = $request->pertanyaan;
        $pertanyaan->save();

        if($request->jawaban){
            foreach($request['jawaban'] as $jawaban){
                $saveJawaban = array(
                    'id_pertanyaan' => $pertanyaan->id,
                    'jawaban' => $jawaban
                );

                Jawaban::create($saveJawaban);
            }
        }

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pertanyaan $pertanyaan)
    {
        //
    }
}
