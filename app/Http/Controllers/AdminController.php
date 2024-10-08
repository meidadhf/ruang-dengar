<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Guru;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (auth()->guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function createGuruForm()
    {
        return view('admin.create-guru');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function storeGuru(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:gurus',
            'password' => 'required',
        ]);

        Guru::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Data guru berhasil ditambahkan.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function createSiswaForm()
    {
        return view('admin.create-siswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function storeSiswa(Request $request)
    {
        $request->validate([
            'nis' => 'required|unique:siswas',
            'password' => 'required',
        ]);

        Siswa::create([
            'nis' => $request->nis,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Data siswa berhasil ditambahkan.');
    }
    public function deleteGuru($id)
    {
        Guru::findOrFail($id)->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Data guru berhasil dihapus.');
    }
    public function deleteSiswa($id)
    {
        Siswa::findOrFail($id)->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Data siswa berhasil dihapus.');
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
