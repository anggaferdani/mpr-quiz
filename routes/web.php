<?php

use App\Events\Device2;
use App\Events\Device3;
use App\Events\DeviceSatu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Sesi2Controller;
use App\Http\Controllers\Sesi3Controller;
use App\Http\Controllers\PusherController;
use App\Http\Controllers\JawabanController;
use App\Http\Controllers\ShotcutController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\TemaPertanyaanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::resource('/quiz', QuizController::class);
// Route::get('/', [QuizController::class, 'quiz'])->name('quiz');
// Route::get('/op/sesi-1', function () {return view('operator.jenispertanyaan.index');});
// Route::get('/op/sesi-2', function () {return view('operator.jenispertanyaan.sesi2');});


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin']);

Route::post('/sesi-2/pusher/kirim-pernyataan-sesi2', [TemaPertanyaanController::class, 'kirimPernyataanSesi2'])->name('operator.sesi2.pusher.kirim-pernyataan-sesi2');
Route::post('/sesi-3/pusher/kirim-pertanyaan-sesi3', [Sesi3Controller::class, 'kirimPertanyaanSesi3'])->name('operator.sesi3.pusher.kirim-pertanyaan-sesi3');

Route::middleware(['op', 'auth:web'])->prefix('/op')->group(function(){
// Route::middleware(['op', 'auth:web'])->group(function(){
    Route::resource('/sesi-1', TemaPertanyaanController::class);
    Route::resource('/pilih-pertanyaan', PertanyaanController::class);
    Route::resource('/list-jawaban', JawabanController::class);
    Route::post('/savepoin', [ParticipantController::class, 'store']);
    Route::get('/sesi-2', [TemaPertanyaanController::class, 'sesi2']);
    Route::post('/sesi-2', [TemaPertanyaanController::class, 'storePernyataan']);
    Route::get('/sesi-3', [Sesi3Controller::class, 'index'])->name('operator.sesi3');
    Route::post('/post/sesi-3', [Sesi3Controller::class, 'store'])->name('operator.post.sesi3');
    Route::get('/sesi-3', [Sesi3Controller::class, 'index'])->name('operator.sesi3');
    Route::post('/sesi-2/setpoin', [Sesi2Controller::class, 'setpoin'])->name('operator.sesi2.setpoin');
    Route::post('/sesi-3/setpoin', [Sesi3Controller::class, 'setpoin'])->name('operator.sesi3.setpoin');
    Route::post('/sesi-3/minpoin', [Sesi3Controller::class, 'minpoin'])->name('operator.sesi3.minpoin');
    Route::get('/logout', [LoginController::class, 'logout'])->name('operator.logout');
    Route::resource('/perolehan-nilai', ParticipantController::class);
    Route::resource('/shortcut', ShotcutController::class);
    Route::post('/pindah-sesi', [FrontendController::class, 'pindahSesi'])->name('pindah.sesi');
});
Route::post('/setpoin', [Sesi3Controller::class, 'setpoin'])->name('setpoin');
Route::post('/minpoin', [Sesi3Controller::class, 'minpoin'])->name('minpoin');

Route::get('/', function () { return redirect()->route('openingSesi1'); });
Route::get('/sesi1', [FrontendController::class, 'openingSesi1'])->name('openingSesi1');
Route::get('/sesi1-spin', [FrontendController::class, 'spinSesi1'])->name('spinSesi1');
Route::get('/sesi1-spin-data', [FrontendController::class, 'getspinSesi1'])->name('spinSesi1Data');
Route::get('/sesi1-quiz/{id}', [FrontendController::class, 'quizSesi1'])->name('quizSesi1');
// Route::get('/sesi1-quiz', [FrontendController::class, 'showquizsesi1'])->name('quizSesi1');
// Route::get('/sesi1-quiz', function () {return view('FE.s1-quiz');})->name('quizsesi1');
Route::get('/sesi1-nilai', [FrontendController::class, 'nilaiquizSesi1'])->name('nilaiquizSesi1');

Route::get('/sesi2', [FrontendController::class, 'openingSesi2'])->name('openingSesi2');
Route::get('/sesi2-slot', [FrontendController::class, 'slotSesi2'])->name('slotSesi2');

Route::get('/sesi2-soal/{id}', [FrontendController::class, 'soalSesi2'])->name('soalSesi2');
Route::get('/sesi2-nilai', [FrontendController::class, 'nilaiquizSesi2'])->name('nilaiquizSesi2');

Route::get('/sesi3', [FrontendController::class, 'openingSesi3'])->name('openingSesi3');

Route::get('/sesi1-juri', [FrontendController::class, 'openingSesi1Juri'])->name('openingSesi1Juri');
Route::get('/sesi4-juri', [FrontendController::class, 'pengumumanJuri'])->name('pengumumanJuri');
// Route::get('/sesi1-juri-nilai', [FrontendController::class, 'nilaiSesi1Juri'])->name('nilaiSesi1Juri');
Route::get('/sesi2-juri', [FrontendController::class, 'openingSesi2Juri'])->name('openingSesi2Juri');
Route::get('/sesi3-juri', [FrontendController::class, 'openingSesi3Juri'])->name('openingSesi3Juri');



Route::post('/post-device-1', function(Request $request){
    event(new DeviceSatu($request->data));
    return ['success'=>true, 'data'=>$request->data];
});

Route::post('/post-device-2', function(Request $request){
    event(new Device2($request->data));
    return ['success'=>true, 'data'=>$request->data];
});

Route::post('/post-device-3', function(Request $request){
    event(new Device3($request->data));
    return ['success'=>true, 'data'=>$request->data];
});

Route::get('/device-1', [FrontendController::class, 'device1'])->name('device1');
Route::get('/device-2', [FrontendController::class, 'device2'])->name('device2');
Route::get('/device-3', [FrontendController::class, 'device3'])->name('device3');
Route::post('/kirim-pertanyaan', [PusherController::class, 'kirimPertanyaan']);




Route::post('/set-run', [\App\Http\Controllers\TeamController::class, 'setRun'])->name("set-run");
Route::get('/refresh-point', [\App\Http\Controllers\TeamController::class, 'refreshPoint'])->name("refresh-point");






Route::get('/spin-button', [FrontendController::class, 'spinButton'])->name('device1');
Route::post('/spin-trigger', [PusherController::class, 'startSpin'])->name('device1');
Route::get('/spin-button-sesi-2', [FrontendController::class, 'spinButtonSesi2'])->name('spin-button-sesi-2');
Route::post('/spin-trigger-sesi-2', [PusherController::class, 'startSpinSesi2'])->name('spin-trigger-sesi-2');






// Route::get('/testing', function () {
//     event(new MessageSent('hello world'));
//     echo "test";
// });
// Route::get('/sesi1-spin', function () {return view('FE.s1-spin');});
// Route::get('/sesi1-quiz', function () {return view('FE.s1-quiz');});
