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

        // Cek kredensial siswa menggunakan guard siswa
        if (Auth::guard('siswa')->attempt($credentials)) {
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
        // Ambil semua data guru untuk ditampilkan di dashboard siswa
        $gurus = Guru::all();

        return view('siswa.dashboard', compact('gurus'));
    }

    /**
     * Menampilkan halaman konsul
     */
    public function konsul($guru_id, $nama_guru)
    {
         // Kirim data guru ke view
         return view('siswa.konsul', compact('guru_id', 'nama_guru'));
    }

    public function store(Request $request)
    {
        // Validasi input untuk siswa
        $request->validate([
            'siswa_id' => 'nullable|unique:siswa,siswa_id',
            'password' => 'required',
            'nama' => 'nullable|string|max:255', // Validasi untuk field nama
        ]);

        // Simpan data siswa
        Siswa::create([
            'siswa_id' => $request->siswa_id,
            'password' => bcrypt($request->password), // Enkripsi password
            'nama' => $request->nama, // Menyimpan nama siswa
        ]);

        return redirect()->route('admin.data.index')->with('success', 'Data siswa berhasil disimpan.');
    }

    public function destroy($siswa_id)
    {
        // Hapus data siswa berdasarkan siswa_id
        Siswa::where('siswa_id', $siswa_id)->delete();
    
        return redirect()->route('admin.data.index')->with('success', 'Data siswa berhasil dihapus.');
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
        // Ambil semua pesan terkait siswa yang sedang login
        $pesans = Auth::guard('siswa')->user()->pesans; // Pastikan relasi di model `Siswa` sudah benar

        return view('siswa.lihat-balasan', compact('pesans'));
    }
}
