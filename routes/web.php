<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Rute Tunggal untuk Pure Index Home (welcome.blade.php)
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Otomatis memuat rute auth bawaan jika file auth.php tersedia
if (file_exists(__DIR__.'/auth.php')) {
    require __DIR__.'/auth.php';
}