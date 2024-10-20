<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function kirim(Request $request)
    {
        // Validasi input
        $request->validate([
            'guru_id' => 'required',
            'pesan' => 'required|string',
        ]);

        // Simpan pesan konsultasi (ini contoh, sesuaikan dengan model yang kamu gunakan)
        \App\Models\Pesan::create([
            'guru_id' => $request->guru_id,
            'pesan' => $request->pesan,
            // Tambahkan atribut lain jika diperlukan, seperti siswa_id atau waktu pengiriman
        ]);

        // Redirect setelah pesan berhasil dikirim
        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }

    public function index()
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
