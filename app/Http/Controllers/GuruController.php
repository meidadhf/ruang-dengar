<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Pesan;
class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('guru.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (auth()->guard('guru')->attempt($credentials)) {
            return redirect()->route('guru.dashboard');
        }
        return back()->withErrors(['email' => 'Email atau password salah. Silahkan isi kembali.']);
    }

    public function dashboard()
    {
        $pesans = Pesan::where('guru_id', auth()->id())->get();
        return view('guru.dashboard', compact('pesans'));
    }

    public function balasPesan(Request $request, $pesan_id)
    {
        //      
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
