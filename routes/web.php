<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/routes', function () {
    $routeCollection = Route::getRoutes()->getRoutes();

    return view('routes', ['routeCollection' => $routeCollection]);
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show']);
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update']);
Route::patch('/mahasiswa/{id}', [MahasiswaController::class, 'update']);
Route::delete('/mahasiswa/{id}', [DosenController::class, 'destroy']);

Route::get('/dosen', [DosenController::class, 'index']);
Route::post('/dosen', [DosenController::class, 'store']);
Route::get('/dosen/{id}', [DosenController::class, 'show']);
Route::put('/dosen/{id}', [DosenController::class, 'update']);
Route::patch('/dosen/{id}', [DosenController::class, 'update']);
Route::delete('/dosen/{id}', [DosenController::class, 'destroy']);

Route::get('/dosen-pembimbing', [DosenPembimbingController::class, 'index']);
Route::post('/dosen-pembimbing', [DosenPembimbingController::class, 'store']);
Route::put('/dosen-pembimbing/{id}', [DosenPembimbingController::class, 'update']);
Route::delete('/dosen-pembimbing/{id}', [DosenPembimbingController::class, 'destroy']);

Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::post('/matakuliah', [MatakuliahController::class, 'store']);
Route::put('/matakuliah/{id}', [MatakuliahController::class, 'update']);
Route::delete('/matakuliah/{id}', [MatakuliahController::class, 'destroy']);
Route::get('/matakuliah/{id}', [MatakuliahController::class, 'show']);

Route::get('/matakuliah-mahasiswa', [Matakuliah_MahasiswaController::class, 'index']);
Route::post('/matakuliah-mahasiswa', [Matakuliah_MahasiswaController::class, 'store']);
Route::put('/matakuliah-mahasiswa/{id}', [Matakuliah_MahasiswaController::class, 'update']);
Route::delete('/matakuliah-mahasiswa/{id}', [Matakuliah_MahasiswaController::class, 'destroy']);
