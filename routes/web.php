<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Ini adalah file routes utama aplikasi Laravel.
|
*/

// Route default untuk halaman welcome
Route::get('/', function () {
    return view('welcome');
});

// Route untuk halaman profile dengan parameter nama, npm, kelas
Route::get('/profile/{nama}/{npm}/{kelas}', [ProfileController::class, 'profile'])->name('profile');
