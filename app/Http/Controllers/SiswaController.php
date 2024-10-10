<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Pesan;
use App\Models\Guru;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showLoginForm()
    {
        return view('siswa.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('nis', 'password');
        if (auth()->guard('siswa')->attempt($credentials)) {
            return redirect()->route('siswa.dashboard');
        }
        return back()->withErrors(['nis' => 'NIS atau password salah. Silahkan coba kembali.']);
    }

    public function dashboard()
    {
        return view('siswa.dashboard');
    }

    public function listGuru()
    {
        $gurus = Guru::all();
        return view('siswa.list-guru', compact('gurus'));
    }

    public function kirimPesan(Request $request, $guru_id)
    {
        $request->validate([
            'message' => 'required',
        ]);

        Pesan::create([
            'guru_id' => $guru_id,
            'siswa_id' => auth()->id(),
            'message' => $request->message,
        ]);
        return redirect()->route('siswa.dashboard')->with('success', 'Pesan konsultasi berhasil dikirim.');
    }

    public function lihatBalasan()
    {
        $pesans = auth()->user()->pesans;
        return view('siswa.lihat-balasan', compact('pesans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
