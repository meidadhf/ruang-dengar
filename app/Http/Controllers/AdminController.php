<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Guru;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all(); // Mengambil semua data siswa
        $guru = Guru::all(); // Mengambil semua data guru
    
        return view('admin.index', compact('siswa', 'guru'));
    }
    

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'guru_id' => 'required',
            'nama_guru' => 'required',
            'password' => 'required',
        ]);
    
        // Membuat instance model Guru
        $guru = new Guru();
        $guru->guru_id = $request->guru_id;
        $guru->nama_guru = $request->nama_guru;
        $guru->password = $request->password; // Ini akan memanggil mutator
        $guru->save();
    
        return redirect()->route('admin.data.index')->with('success', 'Data guru berhasil disimpan.');
    }    

    public function edit($id, $type)
    {
        // Cek tipe, lalu ambil data sesuai tipe
        if ($type === 'guru') {
            $data = Guru::findOrFail($id);
        } else if ($type === 'siswa') {
            $data = Siswa::findOrFail($id);
        } else {
            abort(404); // Tampilkan halaman error jika tipe tidak sesuai
        }
    
        return view('admin.edit', compact('data', 'type'));
    }
    

    
public function update(Request $request, $id)
{
    $request->validate([
        'nama_guru' => 'required|string|max:255',
        'password' => 'required|string|min:8', // atau sesuai kebijakan
    ]);

    $guru = Guru::findOrFail($id);
    $guru->update($request->only('nama_guru', 'password'));

    return redirect()->route('admin.index')->with('success', 'Data guru berhasil diperbarui');
}


    public function destroy($id, Request $request)
    {
        // Menghapus data berdasarkan tipe
        if ($request->type === 'siswa') {
            $data = Siswa::where('siswa_id', $id)->first(); // Mencari siswa berdasarkan siswa_id
        } else {
            $data = Guru::where('guru_id', $id)->first(); // Mencari guru berdasarkan guru_id
        }
    
        // Memastikan data ditemukan sebelum mencoba menghapus
        if ($data) {
            $data->delete();
        } else {
            // Jika data tidak ditemukan, kembali dengan pesan error
            return redirect()->route('admin.data.index')->with('error', 'Data tidak ditemukan.');
        }
    
        // Kembali ke halaman index setelah berhasil menghapus
        return redirect()->route('admin.data.index')->with('success', 'Data berhasil dihapus.');
    }
    
}
