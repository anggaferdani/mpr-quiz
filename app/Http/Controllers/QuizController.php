<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function quiz(){
        $quizzes = Quiz::paginate(1);
        return view('pages.quiz', compact(
            'quizzes',
        ));
    }

    public function index(){
        $quizzes = Quiz::latest()->paginate();
        return view('pages.index', compact(
            'quizzes',
        ));
    }

    public function create(){
    }

    public function store(Request $request){
        $request->validate([
            'pertanyaan' => 'required',
            'pilihan_a' => 'required',
            'pilihan_b' => 'required',
            'pilihan_c' => 'required',
            'pilihan_d' => 'required',
            'jawaban' => 'required',
            'keterangan' => 'required',
        ]);

        $array = [
            'pertanyaan' => $request['pertanyaan'],
            'pilihan_a' => $request['pilihan_a'],
            'pilihan_b' => $request['pilihan_b'],
            'pilihan_c' => $request['pilihan_c'],
            'pilihan_d' => $request['pilihan_d'],
            'jawaban' => $request['jawaban'],
            'keterangan' => $request['keterangan'],
        ];

        Quiz::create($array);

        return back()->with('success', 'Success');
    }

    public function show($id){
    }

    public function edit($id){
    }

    public function update(Request $request, $id){
        $quiz = Quiz::find($id);

        $request->validate([
            'pertanyaan' => 'required',
            'pilihan_a' => 'required',
            'pilihan_b' => 'required',
            'pilihan_c' => 'required',
            'pilihan_d' => 'required',
            'jawaban' => 'required',
            'keterangan' => 'required',
        ]);

        $array = [
            'pertanyaan' => $request['pertanyaan'],
            'pilihan_a' => $request['pilihan_a'],
            'pilihan_b' => $request['pilihan_b'],
            'pilihan_c' => $request['pilihan_c'],
            'pilihan_d' => $request['pilihan_d'],
            'jawaban' => $request['jawaban'],
            'keterangan' => $request['keterangan'],
        ];

        $quiz->update($array);

        return back()->with('success', 'Success');
    }

    public function destroy($id){
        $quiz = Quiz::find($id);

        $quiz->delete();

        return back()->with('error', 'Error');
    }
}
