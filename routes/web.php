<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PerpustakaanController;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('siswa', SiswaController::class);
Route::resource('buku', BukuController::class);
Route::resource('perpustakaan', PerpustakaanController::class);
