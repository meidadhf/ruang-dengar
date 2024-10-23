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
    public function dashboard(Request $request)
    {
        // Ambil ID guru yang sedang login
        $guru_id = auth()->user()->guru_id; // Pastikan guru sudah login dan memiliki guru_id

        // Ambil semua pesan yang dikirim ke guru ini
        $pesans = Pesan::where('guru_id', $guru_id)->latest()->get();

        // Kirim pesan ke view dashboard guru
        return view('guru.dashboard', compact('pesans'));
    }
    public function login(Request $request)
    {
        $request->validate([
            'guru_id' => 'required|string',
            'password'  => 'required|string',
        ]);

        if (Auth::guard('guru')->attempt([
            'guru_id' => $request->guru_id,
            'password'  => $request->password,
        ])) {
            return redirect()->route('guru.dashboard');
        }
        return back()->withErrors([
            'guru_id' => 'ID atau password salah',
        ]);
    }

    /**
     * Proses logout.
     */
    public function logout()
    {
        Auth::guard('guru')->logout();
        return redirect()->route('guru.login');
    }

    public function index()
    {
        // Ambil semua pesan untuk guru yang sedang login
        $pesans = Pesan::where('guru_id', auth()->user()->guru_id)->get();


        // Kirim data pesan ke view
        return view('guru.dashboard', compact('pesans'));
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
        // Validasi input
        $request->validate([
            'email' => 'required|email|unique:gurus,email',
            'password' => 'required|min:8',
        ]);

        // Buat akun guru dengan password yang di-hash
        Guru::create([
            'email' => $request->email,
            'password' => bcrypt($request->password), // Gunakan bcrypt di sini
        ]);

        return redirect()->route('guru.index')->with('success', 'Akun guru berhasil dibuat.');
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
