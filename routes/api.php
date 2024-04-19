<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PusherController;
use App\Http\Controllers\api\MprController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/team', [MprController::class, 'team']);
Route::get('/tema-pertanyaan', [MprController::class, 'tema-pertanyaan']);
Route::get('/pertanyaan/{id}', [MprController::class, 'pertanyaan']);
Route::get('/jawaban/{id}', [MprController::class, 'jawaban']);
Route::post('/sesi-2/{id}', [MprController::class, 'sesi2']);

Route::post('/pusher', [PusherController::class, 'kirimPertanyaan']);
