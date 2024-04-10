<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\DosenPembimbingController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Matakuliah_MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use Illuminate\Support\Facades\Request;
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


Route::post('/test', function (Request $request) {
    $nama = $request->input('nama');
    $umur = $request->input('umur');
    $response = [
        'nama' => $nama,
        'umur' => $umur
    ];

    return response()->json($response, 200);
});
