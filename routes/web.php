<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::post('/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
