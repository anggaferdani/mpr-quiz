<?php

namespace App\Http\Controllers;
use App\Models\Jawaban;
use App\Models\Pertanyaan;
use App\Models\Participant;

use App\Events\MessageSent;

use Illuminate\Http\Request;
use App\Models\TemaPertanyaan;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function openingSesi1()
    {
        return view('FE.s1');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function spinSesi1()
    {
        $tema = TemaPertanyaan::get();
        return view('FE.s1-spin', compact('tema'));
    }

    public function quizSesi1($id)
    {
        $quiz = Pertanyaan::where('id_tema', $id)->first();
        // $jawaban = Jawaban::where('id_pertanyaan', $quiz->id)->get();
        return view('FE.s1-quiz', compact('quiz'));
    }

    public function showquizsesi1(Request $request)
    {
        $pertanyaan = $request->input('pertanyaan');
        // Lakukan apa pun yang diperlukan dengan pertanyaan yang diterima
        // Misalnya, kirim kembali respons ke sisi klien
        // return response()->json(['message' => 'Pertanyaan berhasil diterima di server.', 'pertanyaan' => $pertanyaan]);
        return view('FE.s1-quiz', compact('pertanyaan'));
    }

    public function nilaiquizSesi1()
    {
        $nilai = Participant::get()->last();
        return view('FE.s1-nilai', compact('nilai'));
    }

    // public function testpusher()
    // {
    //     event(new MessageSent('hello world'));
    // }


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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
