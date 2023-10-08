<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\DosenPembimbingController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Matakuliah_MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Models\Matakuliah;
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


Route::get('/dosen', [DosenController::class, 'index']);
Route::post('/dosen', [DosenController::class, 'store']);
Route::get('/dosen/{id}', [DosenController::class, 'show']);
Route::put('/dosen/{id}', [DosenController::class, 'update']);
Route::patch('/dosen/{id}', [DosenController::class, 'update']);
Route::delete('/dosen/{id}', [DosenController::class, 'destroy']);

Route::apiResource('/dosen-pembimbing', DosenPembimbingController::class);
Route::apiResource('/matakuliah', MatakuliahController::class);
Route::apiResource('/matakuliah-mahasiswa', Matakuliah_MahasiswaController::class);