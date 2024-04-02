<?php

namespace App\Http\Controllers;
use App\Models\Jawaban;
use App\Models\Pertanyaan;
use App\Models\Participant;

use Pusher\Pusher;
use App\Events\MessageSent;
use App\Events\KirimPertanyaanS2;

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
        $tema = TemaPertanyaan::where('sesi', 1)->get();
        return view('FE.s1-spin', compact('tema'));
    }

    public function quizSesi1($id)
{
    $quiz = Pertanyaan::where('id_tema', $id)->first();
    $jawaban = Jawaban::where('id_pertanyaan', $quiz->id)->get();
    
    $pusher = new Pusher(
        env('PUSHER_APP_KEY'),
        env('PUSHER_APP_SECRET'),
        env('PUSHER_APP_ID'),
        [
            'cluster' => env('PUSHER_APP_CLUSTER'),
            'useTLS' => true
            ]
        );
        
        $pusher->trigger('channel-kirim-pertanyaan', 'event-kirim-pertanyaan', ['quiz' => $quiz, 'jawaban' => $jawaban]);
        
        return view('FE.s1-quiz', compact('quiz'));
    }
    
    public function openingSesi2(Request $request)
    {
        // Mengambil data yang dikirimkan melalui AJAX
        $id = $request->input('id');
        $pertanyaan = $request->input('pertanyaan');
        event(new KirimPertanyaanS2(['id' => $id, 'pertanyaan' => $pertanyaan]));

        return view('FE.s2');
    }

    public function openingSesi2Juri(Request $request) 
    {
        $id = $request->input('id');
        // $pertanyaan = Pertanyaan::find($id);
        // Mengambil jawaban berdasarkan id pertanyaan
        $jawaban = Jawaban::where('id_pertanyaan', $id)->get();
        $pertanyaan = $request->input('pertanyaan');
        
        // Semua variabel memiliki nilai yang valid, kirimkan event
        event(new KirimPertanyaanS2(['id' => $id, 'pertanyaan' => $pertanyaan, 'jawaban' => $jawaban]));

        return view('FE.Juri.sesi-2');
    }


    // public function showquizsesi1(Request $request)
    // {
    //     $pertanyaan = $request->input('pertanyaan');
    //     // Lakukan apa pun yang diperlukan dengan pertanyaan yang diterima
    //     // Misalnya, kirim kembali respons ke sisi klien
    //     // return response()->json(['message' => 'Pertanyaan berhasil diterima di server.', 'pertanyaan' => $pertanyaan]);
    //     return view('FE.s1-quiz', compact('pertanyaan'));
    // }

    public function soalSesi2(Request $request)
    {
       // Jika Anda ingin mengakses data yang dilewatkan dari query string, Anda dapat melakukannya di sini
       $dataString = $request->query('data'); // Mendapatkan data dari query string
       $data = json_decode(urldecode($dataString), true); // Mendekode data dari string JSON

       // Tampilkan tampilan /sesi2-soal
       return view('FE.s2-soal', ['data' => $data]); // Mengirimkan data ke tampilan
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
