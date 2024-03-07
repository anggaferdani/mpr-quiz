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

Route::resource('/op/sesi-1', TemaPertanyaanController::class);
Route::get('/op/sesi-2', [TemaPertanyaanController::class, 'sesi2']);
Route::resource('/op/pilih-pertanyaan/{id}', PertanyaanController::class);
// Route::get('/op/jawaban/{id}', [JawabanController::class, 'listjawaban']);
Route::get('/sesi1', function () {return view('FE.s1');});
Route::get('/sesi1-spin', function () {return view('FE.s1-spin');});
Route::get('/sesi1-quiz', function () {return view('FE.s1-quiz');});
Route::get('/sesi2', function () {return view('FE.s2');});
Route::get('/sesi2-soal', function () {return view('FE.s2-soal');});