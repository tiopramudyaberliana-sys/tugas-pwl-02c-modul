<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\BukuController;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use Illuminate\Support\Facades\Route;

// Rute Halaman Depan
Route::get('/', function () {
    return view('welcome');
});

// ROUTE DASHBOARD (Kirim data jumlah mahasiswa & matakuliah)
Route::get('/dashboard', function () {
    $total_mahasiswa = Mahasiswa::count();
    $total_matakuliah = Matakuliah::count();
    return view('dashboard', compact('total_mahasiswa', 'total_matakuliah'));
})->middleware(['auth', 'verified'])->name('dashboard');

// MENGAMANKAN ROUTE (Hanya bisa diakses kalau sudah login)
Route::middleware(['auth', 'verified'])->group(function () {
    
    // Rute Khusus Delete Mahasiswa dengan Middleware CekEmailIkmi
    Route::delete('mahasiswa/{mahasiswa}', [MahasiswaController::class, 'destroy'])
         ->middleware(\App\Http\Middleware\CekEmailIkmi::class)
         ->name('mahasiswa.destroy');

    // Resource Routes
    Route::resource('mahasiswa', MahasiswaController::class)->except(['destroy']); // except destroy karena sudah didefinisikan manual di atas
    Route::resource('matakuliah', MatakuliahController::class);
    Route::resource('koleksi', BukuController::class); // Jawaban Soal 1 [cite: 7, 8]
});

// Route bawaan Breeze untuk Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';