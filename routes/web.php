<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PesanController;

// Home route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route untuk halaman pemilihan role login (siswa, guru, atau admin)
Route::get('/login', function () {
    return view('auth.choose-login');
})->name('login')->middleware('guest');

// Route untuk login siswa
Route::get('/siswa/login', [SiswaController::class, 'showLoginForm'])->name('siswa.login');
Route::post('/siswa/login', [SiswaController::class, 'loginSiswa'])->name('siswa.login.submit');

//Route dahboard
Route::get('/dashboard', [SiswaController::class, 'showDashboard'])->name('siswa.dashboard');

// Route dashboard siswa dengan middleware auth
Route::get('/siswa/dashboard', [SiswaController::class, 'showDashboard'])->name('siswa.dashboard');

//Route untuk konsul
Route::get('/konsul/{guru_id}/{nama_guru}', [SiswaController::class, 'konsul'])->name('siswa.konsul');
Route::post('/pesan/kirim', [PesanController::class, 'kirim'])->name('pesan.kirim');

Route::get('/siswa/guru', [SiswaController::class, 'listGuru'])->name('siswa.list-guru')->middleware('auth:siswa');
Route::post('/siswa/guru/{guru_id}/kirim', [SiswaController::class, 'kirimPesan'])->name('siswa.kirim-pesan')->middleware('auth:siswa');
Route::get('/siswa/balasan', [SiswaController::class, 'lihatBalasan'])->name('siswa.lihat-balasan')->middleware('auth:siswa');

// Route untuk login guru
Route::get('/guru/login', [GuruController::class, 'showLoginForm'])->name('guru.login');
Route::post('/guru/login', [GuruController::class, 'login'])->name('guru.login.submit');


// Route dashboard guru dengan middleware auth
Route::get('/guru/dashboard', [GuruController::class, 'dashboard'])->name('guru.dashboard');
Route::post('/guru/pesan/{pesan_id}/balas', [GuruController::class, 'balasPesan'])->name('guru.balas-pesan')->middleware('auth:guru');

// Route untuk login admin
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login')->middleware('guest');
Route::post('/admin/login', [AdminController::class, 'loginAdmin'])->name('admin.login.submit');

// Route dashboard admin dengan middleware auth
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth:admin');
Route::get('/admin/guru/create', [AdminController::class, 'createGuruForm'])->name('admin.create-guru')->middleware('auth:admin');
Route::post('/admin/guru/store', [AdminController::class, 'storeGuru'])->name('admin.store-guru')->middleware('auth:admin');
Route::get('/admin/siswa/create', [AdminController::class, 'createSiswaForm'])->name('admin.create-siswa')->middleware('auth:admin');
Route::post('/admin/siswa/store', [AdminController::class, 'storeSiswa'])->name('admin.store-siswa')->middleware('auth:admin');
Route::delete('/admin/guru/{id}', [AdminController::class, 'deleteGuru'])->name('admin.delete-guru')->middleware('auth:admin');
Route::delete('/admin/siswa/{id}', [AdminController::class, 'deleteSiswa'])->name('admin.delete-siswa')->middleware('auth:admin');

// Route default login (untuk fallback)
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
