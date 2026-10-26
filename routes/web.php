<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// 1. Route Halaman Utama (Biar kalau buka localhost:8000 nggak Not Found)
Route::get('/', function () {
    return redirect()->route('laporan.create'); 
});

// 2. Route Publik (Bisa diakses tanpa login)
Route::get('/lapor', [LaporanController::class, 'create'])->name('laporan.create');
Route::post('/lapor', [LaporanController::class, 'store'])->name('laporan.store');

// 3. Route Auth Manual (Hanya bisa diakses kalau BELUM login)
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

// 4. Route Terproteksi (Hanya bisa diakses kalau SUDAH login)
Route::middleware('auth')->group(function () {
    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
    
    Route::get('/petugas/profil', function () {
        return view('petugas.profile');
    })->name('petugas.profile');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});