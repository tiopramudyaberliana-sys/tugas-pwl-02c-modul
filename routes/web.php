<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController; // <-- PENTING: Panggil Controller

Route::get('/', function () {
    return view('welcome');
});

// Ini Rute utamanya
Route::resource('mahasiswa', MahasiswaController::class);