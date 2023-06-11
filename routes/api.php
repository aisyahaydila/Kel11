<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('/konsultasi', [KonsultasiController::class, 'index']);
Route::get('/konsultasi/{id}', [KonsultasiController::class, 'show']);

Route::get('/obat', [DispensasiObatController::class, 'index']);
Route::get('/obat/{id}', [DispensasiObatController::class, 'show']);

Route::get('/pelaporan', [PelaporanController::class, 'index']);
Route::get('/pelaporan/{id}', [PelaporanController::class, 'show']);
Route::post('/pelaporan', [PelaporanController::class, 'store']);



