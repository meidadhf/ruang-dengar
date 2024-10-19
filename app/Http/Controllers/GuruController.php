<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Pesan;

class GuruController extends Controller
{
    /**
     * Menampilkan formulir login.
     */
    public function showLoginForm()
    {
        return view('guru.login');
    }

    /**
     * Proses login.
     */
    public function login(Request $request)
    {
        // Validasi data yang dimasukkan
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Debugging: Cek kredensial yang diterima
        \Log::info('Login attempt with:', $request->only('email', 'password'));

        // Cek kredensial
        if (Auth::guard('guru')->attempt($request->only('email', 'password'))) {
            // Jika login berhasil, arahkan ke dashboard
            return redirect()->route('guru.dashboard');
        }

        // Debugging: Jika login gagal
        \Log::warning('Login failed for:', $request->only('email'));
        return redirect()->back()->withInput()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Menampilkan dashboard guru.
     */
    public function dashboard()
    {
        // Mengambil pesan yang berkaitan dengan guru yang sedang login
        $pesans = Pesan::where('guru_id', auth()->id())->get();
        return view('guru.dashboard', compact('pesans'));
    }

    /**
     * Menampilkan daftar guru.
     */
    public function daftarGuru()
    {
        // Ambil semua guru
        $gurus = Guru::all(); // Pastikan model Guru sudah terisi dengan data yang benar
        return view('siswa.dashboard', compact('gurus')); // Mengarahkan ke view siswa.dashboard
    }

    /**
     * Proses konsul.
     */
    public function konsul(Request $request, $guruId)
    {
        // Di sini Anda bisa menangani logika untuk konsul, misalnya menyimpan data ke database
        return redirect()->route('konsul.page', ['guruId' => $guruId]); // Mengarahkan ke halaman konsul
    }

    /**
     * Proses logout.
     */
    public function logout()
    {
        Auth::guard('guru')->logout();
        return redirect()->route('guru.login');
    }

    /**
     * Proses membalas pesan.
     */
    public function balasPesan(Request $request, $pesan_id)
    {
        // Validasi input
        $request->validate([
            'isi' => 'required|string',
        ]);

        // Temukan pesan yang ingin dibalas
        $pesan = Pesan::findOrFail($pesan_id);

        // Simpan balasan
        $pesan->balasan = $request->input('isi');
        $pesan->guru_id = auth()->id(); // Menyimpan ID guru yang membalas
        $pesan->save();

        return redirect()->route('guru.dashboard')->with('success', 'Pesan berhasil dibalas.');
    }

    // Fungsi lainnya jika perlu
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_guru' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:gurus',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $guru = Guru::createGuru($request->all());
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
