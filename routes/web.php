<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('users.index');

// CRUD User
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
Route::get('/users/edit/{uuid}', [UserController::class, 'edit'])->name('users.edit');
Route::post('/users/update/{uuid}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/delete/{uuid}', [UserController::class, 'destroy'])->name('users.destroy');
