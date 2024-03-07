<?php

use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

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
Route::get('/jenis-pertanyaan', function () {return view('operator.jenispertanyaan.index');});
Route::get('/start', function () {return view('operator.start.sesi1');});
Route::get('/sesi-2', function () {return view('operator.start.sesi2');});
Route::get('/pilih-pertanyaan', function () {return view('operator.start.pilihpertanyaan');});
Route::get('/soal', function () {return view('operator.start.soal');});

Route::get('/sesi1', function () {return view('FE.s1');});
Route::get('/sesi1-spin', function () {return view('FE.s1-spin');});
Route::get('/sesi1-quiz', function () {return view('FE.s1-quiz');});
Route::get('/sesi2', function () {return view('FE.s2');});
Route::get('/sesi2-soal', function () {return view('FE.s2-soal');});