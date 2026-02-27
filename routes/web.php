<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
<<<<<<< HEAD
use App\Http\Controllers\BukuController;
=======
use App\Http\Controllers\PerpustakaanController;
>>>>>>> aba93074b2d33b7c3a471fda556377e768089159

Route::get('/', function () {
    return view('welcome');
});

Route::resource('siswa', SiswaController::class);
<<<<<<< HEAD
Route::resource('buku', BukuController::class);
=======
Route::resource('perpustakaan', PerpustakaanController::class);
>>>>>>> aba93074b2d33b7c3a471fda556377e768089159
