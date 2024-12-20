<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; // Menambahkan AuthController
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MakulController;
use App\Http\Controllers\DosenController;

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

// Rute untuk mendapatkan informasi pengguna yang terautentikasi
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route tambahan untuk registrasi dan login
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Rute untuk Mahasiswa yang memerlukan autentikasi
Route::middleware('auth:sanctum')->group(function () {   
    Route::apiResource('dosens', DosenController::class);
    Route::apiResource('mahasiswas', MahasiswaController::class);
    Route::apiResource('makuls', MakulController::class);

    Route::get('makul/{kode_makul}/dosens', [MakulController::class, 'getDosensByMakul']);
    
    // Route untuk logout
    Route::post('/logout', [AuthController::class, 'logout']);
});
