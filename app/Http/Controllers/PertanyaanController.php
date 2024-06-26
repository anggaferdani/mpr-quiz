<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use App\Models\TemaPertanyaan;

use App\Events\MessageSent;

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
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request,[
            'pertanyaan' => 'required'
        ],[
            'pertanyaan' => 'Input Pertanyaan'
        ]);

        $pertanyaan = new Pertanyaan();
        $pertanyaan->id_tema = $request->id_tema;
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
    public function show($id)
    {
        $tema = TemaPertanyaan::find($id);
        $pertanyaan = Pertanyaan::where('id_tema', $id)->latest()->get();
        // Kirim event ke Pusher dengan data pertanyaan yang telah dipilih
        return view('operator.jenispertanyaan.pertanyaan', compact('pertanyaan', 'tema'));
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
    public function destroy($id)
    {
        $delete = Pertanyaan::find($id);
        $delete->delete();
        return back();
    }
}
