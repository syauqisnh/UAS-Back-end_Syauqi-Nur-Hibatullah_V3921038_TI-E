<?php

use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Contoh menggunakan Route
// Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
// Route::put('/mahasiswa/{id}',[MahasiswaController::class, 'update']);
// Route::get('/mahasiswa/{id}',[MahasiswaController::class, 'show']);
// Route::get('/mahasiswa',[MahasiswaController::class, 'index']);
// Route::delete('/mahasiswa/{id}',[MahasiswaController::class, 'destroy']);
Route::apiResource('mahasiswa',MahasiswaController::class);



