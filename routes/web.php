<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
<<<<<<< HEAD
=======
use App\Http\Controllers\PerpustakaanController;
use App\Http\Controllers\BukuController;
>>>>>>> caeca6c932c545dea5c325d4ec663ae61f5814c4

Route::get('/', function () {
    return redirect('/login');
});

<<<<<<< HEAD
/* AUTH */
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout']);

/* SISWA (HARUS LOGIN) */
Route::resource('siswa', SiswaController::class)->middleware('auth');
=======
Route::resource('siswa', SiswaController::class);
Route::resource('buku', BukuController::class);
Route::resource('perpustakaan', PerpustakaanController::class);
>>>>>>> caeca6c932c545dea5c325d4ec663ae61f5814c4
