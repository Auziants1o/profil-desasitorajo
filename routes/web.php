<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

// ============ PUBLIC ROUTES ============
Route::get('/', [PublicController::class, 'beranda'])->name('beranda');
Route::get('/profil', [PublicController::class, 'profil'])->name('profil');
Route::get('/sejarah', [PublicController::class, 'sejarah'])->name('sejarah');
Route::get('/kebudayaan', [PublicController::class, 'kebudayaan'])->name('kebudayaan');
Route::get('/struktur', [PublicController::class, 'struktur'])->name('struktur');
Route::get('/perangkat', [PublicController::class, 'perangkat'])->name('perangkat');
Route::get('/data-penduduk', [PublicController::class, 'dataPenduduk'])->name('data-penduduk');
Route::get('/galeri-foto', [PublicController::class, 'galeriFoto'])->name('galeri-foto');

Route::get('/kontak', [PublicController::class, 'kontak'])->name('kontak');
Route::post('/kontak', [PublicController::class, 'kirimKontak'])->name('kontak.kirim');
Route::get('/peta', [PublicController::class, 'peta'])->name('peta');
