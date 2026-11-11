<?php

use Illuminate\Support\Facades\Route;

// Import semua Controller di bagian atas agar rapi
use App\Http\Controllers\Web;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Kalkulator_SegitigaController; // <-- Ini yang tadi kurang diimport

// 1. Route Dasar
Route::get('/', function () {
    return "Hallo namaku adalah Laravel, Salam Kenal";
});

// Route About
Route::get('/about', function () {
    return "<h2>Ini adalah laman About</h2>";
});

// 2. Route Controller Web
Route::get('/web', [Web::class, 'home']);
Route::get('/profil/{nama}', [Web::class, 'profil']);
Route::get('/biodata', [Web::class, 'biodata']);

// 3. Route Controller DashboardController
Route::get('/home', [DashboardController::class, 'home']);
Route::get('/product', [DashboardController::class, 'product']);
Route::get('/produk/detail/{harga}', [DashboardController::class, 'detail']);

// 4. Route Controller Kalkulator (Sederhana)
Route::get('/kalkulator', [KalkulatorController::class, 'home']);
Route::post('/kalkulator/proses', [KalkulatorController::class, 'proses']);

// 5. Route Mahasiswa
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

// 6. Route Kalkulator Segitiga
Route::get('/kalkulator/segitiga', [Kalkulator_SegitigaController::class, 'segitiga']);
Route::post('/kalkulator/segitiga/proses', [Kalkulator_SegitigaController::class, 'prosesSegitiga']);