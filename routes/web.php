<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PresensiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/gaji', [GajiController::class, 'index'])->name('gaji');
Route::get('/jabatan', [JabatanController::class, 'index'])->name('jabatan');
Route::get('/presensi', [PresensiController::class, 'index'])->name('presensi');