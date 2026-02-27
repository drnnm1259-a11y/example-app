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

/* DASHBOARD */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

/* SISWA & BUKU (WAJIB LOGIN) */
Route::resource('siswa', SiswaController::class)->middleware('auth');
Route::resource('buku', BukuController::class)->middleware('auth');