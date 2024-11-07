<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Route Admin untuk CRUD guru dan siswa
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/data', [AdminController::class, 'index'])->name('data.index');
    Route::get('/data/create', [AdminController::class, 'create'])->name('data.create');
    Route::post('/data', [AdminController::class, 'store'])->name('data.store');
    Route::get('/data/edit/{id}/{type}', [AdminController::class, 'edit'])->name('edit');
    Route::post('/data/update/{id}', [AdminController::class, 'update'])->name('update');

    // Route destroy untuk admin data guru dan siswa
    Route::delete('/data/{id}', [AdminController::class, 'destroy'])->name('data.destroy');
});

// Route untuk menyimpan data siswa
Route::post('/admin/data/store', [SiswaController::class, 'store'])->name('admin.data.store');
