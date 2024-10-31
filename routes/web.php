<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AdminController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

//Route Admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/data', [AdminController::class, 'index'])->name('data.index');
    Route::get('/data/create', [AdminController::class, 'create'])->name('data.create');
    Route::post('/data', [AdminController::class, 'store'])->name('data.store');
    Route::get('/data/{guru_id}/edit', [AdminController::class, 'edit'])->name('data.edit');
    Route::put('/data/{id}', [AdminController::class, 'update'])->name('data.update');
    Route::delete('/data/{guru_id}', [AdminController::class, 'destroy'])->name('data.destroy');
    Route::post('/siswa/store', [SiswaController::class, 'store'])->name('admin.data.store');
});

