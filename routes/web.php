<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/mahasiswa/{nrp}', [PageController::class, 'mahasiswa'])->where('nrp', '[0-9]{10}')->name('mahasiswa');
Route::get('/hitung-ipk/{ipk1}/{ipk2}', [PageController::class, 'hitungIpk'])->name('hitung-ipk');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/agent/{tema?}', [PageController::class, 'agent'])->name('agent');
