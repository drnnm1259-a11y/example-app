<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return redirect('/login');
});

/* AUTH */
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout']);

/* SISWA (HARUS LOGIN) */
Route::resource('siswa', SiswaController::class)->middleware('auth');
Route::resource('siswa', SiswaController::class);
Route::resource('buku', BukuController::class);
