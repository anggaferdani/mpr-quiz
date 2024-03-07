<?php

namespace App\Http\Controllers;
use App\Models\TemaPertanyaan;
use App\Models\Pertanyaan;


use Illuminate\Http\Request;

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
        return view('FE.s1-quiz', compact('quiz'));
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
