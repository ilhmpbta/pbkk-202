<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/agent/{tema?}', [PageController::class, 'agent'])->name('agent');

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [PageController::class, 'dashboard'])->name('home');
    Route::get('/mahasiswa/{nrp}', [PageController::class, 'mahasiswa'])
        ->where('nrp', '[0-9]{10}')
        ->name('mahasiswa');
    Route::get('/hitung-ipk/{ip1}/{ip2}', [PageController::class, 'hitungIpk'])
        ->name('hitung-ipk');
});

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
