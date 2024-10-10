<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

// Home route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route untuk login siswa
Route::get('/siswa/login', [SiswaController::class, 'showLoginForm'])->name('login.siswa');
Route::post('/siswa/login', [SiswaController::class, 'login']);

Route::middleware('auth:siswa')->group(function () {
    Route::get('/siswa/dashboard', [SiswaController::class, 'dashboard'])->name('siswa.dashboard');
    Route::get('/siswa/guru', [SiswaController::class, 'listGuru'])->name('siswa.list-guru');
    Route::post('/siswa/guru/{guru_id}/kirim', [SiswaController::class, 'kirimPesan'])->name('siswa.kirim-pesan');
    Route::get('/siswa/balasan', [SiswaController::class, 'lihatBalasan'])->name('siswa.lihat-balasan');
});

// Route untuk login guru
Route::get('/guru/login', [GuruController::class, 'showLoginForm'])->name('login.guru');
Route::post('/guru/login', [GuruController::class, 'login']);
Route::middleware('auth:guru')->group(function () {
    Route::get('/guru/dashboard', [GuruController::class, 'dashboard'])->name('guru.dashboard');
    Route::post('/guru/pesan/{pesan_id}/balas', [GuruController::class, 'balasPesan'])->name('guru.balas-pesan');
});

// Route untuk login admin
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('login.admin');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/guru/create', [AdminController::class, 'createGuruForm'])->name('admin.create-guru');
    Route::post('/admin/guru/store', [AdminController::class, 'storeGuru'])->name('admin.store-guru');
    Route::get('/admin/siswa/create', [AdminController::class, 'createSiswaForm'])->name('admin.create-siswa');
    Route::post('/admin/siswa/store', [AdminController::class, 'storeSiswa'])->name('admin.store-siswa');
    Route::delete('/admin/guru/{id}', [AdminController::class, 'deleteGuru'])->name('admin.delete-guru');
    Route::delete('/admin/siswa/{id}', [AdminController::class, 'deleteSiswa'])->name('admin.delete-siswa');
});
