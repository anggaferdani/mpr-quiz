<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\PertanyaanController;
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

Route::resource('/quiz', QuizController::class);
Route::get('/', [QuizController::class, 'quiz'])->name('quiz');
// Route::get('/op/sesi-1', function () {return view('operator.jenispertanyaan.index');});
// Route::get('/op/sesi-2', function () {return view('operator.jenispertanyaan.sesi2');});
Route::get('/start', function () {return view('operator.start.sesi1');});
Route::get('/sesi-2', function () {return view('operator.start.sesi2');});
Route::get('/pilih-pertanyaan-ekonomi', function () {return view('operator.start.ekonomi');});
Route::get('/pilih-pertanyaan-nkri', function () {return view('operator.start.nkri');});
Route::get('/pilih-pertanyaan-pendidikan', function () {return view('operator.start.pendidikan');});
Route::get('/pilih-pertanyaan-pengetahuan-umum', function () {return view('operator.start.pu');});
Route::get('/soal-pengetahuan-umum', function () {return view('operator.start.soalpu');});
Route::get('/soal-nkri', function () {return view('operator.start.soalnkri');});
Route::get('/soal-pendidikan', function () {return view('operator.start.soalpendidikan');});
Route::get('/soal-ekonomi', function () {return view('operator.start.ekonomi');});


Route::get('/pilih-pertanyaan-sesi-2-bti', function () {return view('operator.start.bti');});
Route::get('/pilih-pertanyaan-sesi-2-nkri', function () {return view('operator.start.nkri2');});
Route::get('/pilih-pertanyaan-sesi-2-pancasila', function () {return view('operator.start.pancasila');});
Route::get('/pilih-pertanyaan-sesi-2-uud', function () {return view('operator.start.uud');});
Route::get('/soal-sesi-2-bti', function () {return view('operator.start.sesi2bti');});
Route::get('/soal-sesi-2-nkri', function () {return view('operator.start.sesi2nkri');});
Route::get('/soal-sesi-2-pancasila', function () {return view('operator.start.sesi2pancasila');});
Route::get('/soal-sesi-2-uud', function () {return view('operator.start.sesi2uud');});

Route::resource('/op/sesi-1', TemaPertanyaanController::class);
Route::get('/op/sesi-2', [TemaPertanyaanController::class, 'sesi2']);
Route::resource('/op/pilih-pertanyaan/{id}', PertanyaanController::class);
// Route::get('/op/jawaban/{id}', [JawabanController::class, 'listjawaban']);