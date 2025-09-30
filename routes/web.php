<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
    return view('create_user');
});

// Route untuk halaman profile dengan parameter nama, npm, kelas


Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
