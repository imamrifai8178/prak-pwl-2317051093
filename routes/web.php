<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MataKuliahController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Ini adalah file routes utama aplikasi Laravel.
|
*/

// Arahkan halaman utama ke form tambah user
Route::get('/', [UserController::class, 'create'])->name('user.create');

// Route CRUD untuk User
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

// Route CRUD untuk Mata Kuliah (modul selanjutnya)
Route::get('/matakuliah', [MataKuliahController::class, 'index'])->name('matakuliah.index');
Route::get('/matakuliah/create', [MataKuliahController::class, 'create'])->name('matakuliah.create');
Route::post('/matakuliah/store', [MataKuliahController::class, 'store'])->name('matakuliah.store');
