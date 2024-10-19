<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Pesan;
use App\Models\Guru;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    /**
     * Menampilkan form login siswa.
     */
    public function showLoginForm()
    {
        // Tampilkan view login siswa
        return view('siswa.login'); // Pastikan file ini ada di resources/views/siswa/login.blade.php
    }

    /**
     * Proses login siswa dengan guard siswa.
     */
    public function loginSiswa(Request $request)
{
    // Validasi input NIS dan password
    $credentials = $request->validate([
        'nis' => 'required|string',
        'password' => 'required|string',
    ]);

    // Cek kredensial siswa
    if (Auth::attempt($credentials)) {
        // Jika autentikasi berhasil, redirect ke dashboard siswa
        return redirect()->route('siswa.dashboard');
    }

    // Jika gagal login, redirect kembali ke halaman login dengan error
    return back()->withErrors(['loginError' => 'NIS atau password salah.']);
}

    /**
     * Menampilkan dashboard siswa setelah login dengan guard siswa.
     */
    public function showDashboard()
    {
        return view('siswa.dashboard');
    }
    
    /**
     * Menampilkan halaman konsul
     */

     public function konsul()
     {
         return view('siswa.konsul');
     }
    /**
     * Mengirim pesan ke guru untuk konsultasi.
     */
    public function kirimPesan(Request $request, $guru_id)
    {
        // Validasi pesan
        $request->validate([
            'message' => 'required',
        ]);

        // Simpan pesan
        Pesan::create([
            'guru_id' => $guru_id,
            'siswa_id' => Auth::guard('siswa')->id(), // Menggunakan guard siswa
            'message' => $request->message,
        ]);

        // Redirect atau kembalikan ke halaman sebelumnya
        return back()->with('success', 'Pesan telah terkirim.');
    }

    /**
     * Menampilkan balasan dari guru.
     */
    public function lihatBalasan()
    {
        $pesans = Auth::guard('siswa')->user()->pesans; // Pastikan relasi di model `Siswa` sudah benar
        return view('siswa.lihat-balasan', compact('pesans'));
    }
}
