<?php

namespace App\Http\Controllers;

use App\Events\AddPoints;
use App\Events\DeviceSatu;
use App\Events\JawabanSesiSatu;
use App\Events\KirimPertanyaanS2;
use App\Events\MessageSent;
use App\Events\moveSesi;
use App\Events\PindahSesi;
use App\Events\StartCountdown;
use App\Models\Jawaban;
use App\Models\Participant;
use App\Models\Pernyataan;
use App\Models\Pertanyaan;
use App\Models\Setting;
use App\Models\Team;
use App\Models\TemaPertanyaan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Pusher\Pusher;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function openingSesi1(Request $request)
    {
        $capecape = $request->input('capecape');

        event(new moveSesi(['capecape' => $capecape]));

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

    public function getspinSesi1()
    {
        $tema = TemaPertanyaan::where('sesi', 1)->get();
        echo json_encode($tema);
    }


    public function quizSesi1($id)
    {
        $quiz = Pertanyaan::where('id_tema', $id)->whereNotIn('id', function($query) {
            $query->select('id_pertanyaan')
                ->from('participants')
                ->whereDate('tanggal', today()); // Mengganti today() sesuai dengan cara mendapatkan tanggal sekarang di Laravel Anda
        })
            ->get()
            ->random();
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


    public function openingSesi1Juri(Request $request)
    {

        $setting = Setting::first();
//        dd($setting);
        $jawaban = $request->input('jawaban');
        $idJawaban = $request->input('id_jawaban');
        $pesan = $request->input('pesan');
        $capecape = $request->input('capecape');
        $team = Team::where("run", $setting->run)->get();

        // Sinkronkan jawaban
        $dataJawaban = [
            'id_jawaban' => $idJawaban
        ];

        event(new JawabanSesiSatu($dataJawaban));

        // Aksi terhadap device lain
        event(new AddPoints(['jawaban' => $jawaban]));
        event(new StartCountdown(['pesan' => $pesan]));
        event(new moveSesi(['capecape' => $capecape]));
        return view('FE.Juri.sesi-1', compact('team'));
    }
    public function nilaiSesi1Juri(Request $request)
    {
        // Ambil nilai dari permintaan (request)
        $nilai = Participant::get()->last();
        // dd($nilai);
        return view('FE.Juri.sesi-1-nilai', compact('nilai'));
    }


    public function slotSesi2()
    {
        $pernyataan = Pernyataan::all();
        return view("FE.s2-slot", compact('pernyataan'));
    }

    public function openingSesi2(Request $request)
    {
        // Mengambil data yang dikirimkan melalui AJAX
        $berita = $request->input('berita');
        $id = $request->input('id');
        $pertanyaan = $request->input('pertanyaan');
        $pesan = $request->input('pesan');

        event(new KirimPertanyaanS2(['berita' => $berita, 'id' => $id, 'pertanyaan' => $pertanyaan]));
        event(new StartCountdown(['pesan' => $pesan]));

        return view('FE.s2');
    }

    public function openingSesi2Juri(Request $request)
    {
        $berita = $request->input('berita');
        $id = $request->input('id');
        $pertanyaan = $request->input('pertanyaan');
        $jawabanArray = $request->input('jawabanArray');
        $pesan = $request->input('pesan');
        $team = Team::all();


        // Semua variabel memiliki nilai yang valid, kirimkan event
        event(new KirimPertanyaanS2(['berita' => $berita, 'id' => $id, 'pertanyaan' => $pertanyaan, 'jawabanArray' => $jawabanArray]));
        event(new StartCountdown(['pesan' => $pesan]));

        return view('FE.Juri.sesi-2', compact('team'));
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

        $pernyataan = Pernyataan::all();

        // Tampilkan tampilan /sesi2-soal
       return view('FE.s2-soal', ['data' => $data,'pernyataan'=>$pernyataan]); // Mengirimkan data ke tampilan
    }

    public function openingSesi3(Request $request)
    {
        return view('FE.s3');
    }

    public function nilaiquizSesi1()
    {
        $nilai = Participant::get()->last();

        // Inisialisasi Pusher dengan kredensial dari file .env
        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            [
                'cluster' => env('PUSHER_APP_CLUSTER'),
                'encrypted' => true
            ]
        );

        // Kirim data ke kanal Pusher
        $pusher->trigger('channel-kirim-nilai-s1', 'event-kirim-nilai-s1', [
            'command' => 'pindah',
            'nilai' => $nilai->poin,
        ]);

        // return response()->json(['message' => 'Nilai berhasil dikirim ke Pusher']);

        return view('FE.s1-nilai', compact('nilai'));
    }
    public function nilaiquizSesi2()
    {
        $nilai = Participant::get()->last();

        // Inisialisasi Pusher dengan kredensial dari file .env
        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            [
                'cluster' => env('PUSHER_APP_CLUSTER'),
                'encrypted' => true
            ]
        );

        // Kirim data ke kanal Pusher
        $pusher->trigger('channel-kirim-nilai-s2', 'event-kirim-nilai-s2', [
            'command' => 'pindah',
            'nilai' => $nilai->poin,
        ]);

        // return response()->json(['message' => 'Nilai berhasil dikirim ke Pusher']);

        return view('FE.s2-nilai', compact('nilai'));
    }

    public function device1(Request $request){
        return view('FE.Juri.device1');
    }
    public function device2(Request $request){
        return view('FE.Juri.device2');
    }
    public function device3(Request $request){
        return view('FE.Juri.device3');
    }

    /**
     * Pindahkan sesi dari operator.
     */
    public function pindahSesi(Request $request)
    {
        event(new PindahSesi(['sesi' => $request->sesi]));
        return response()->json($request->sesi, 200);
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
