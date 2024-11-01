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

    public function edit($id, Request $request)
    {
        $data = $request->type === 'siswa' ? Siswa::find('guru_id', $id) : Guru::where('guru_id', $id)->first();
        if (!$data) {
            return redirect()->route('admin.data.index')->with('error', 'Data tidak ditemukan');
        }
    
        // Menentukan tipe data (siswa atau guru)
        $type = $request->type; // Menyimpan tipe ke variabel $type
    
        // Tampilkan view edit dengan data yang ditemukan dan tipe
        return view('admin.edit', compact('data', 'type'));     
    }

    public function update(Request $request, $id)
    {
        $data = $request->type === 'siswa' ? Siswa::find($id) : Guru::find($id);
        $data->update($request->all());
        return redirect()->route('admin.data.index');
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
