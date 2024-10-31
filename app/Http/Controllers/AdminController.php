<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Guru;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        $guru = Guru::all();
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
            'nama_guru' => 'required', // tambahkan validasi untuk nama_guru
            'deskripsi' => 'required',
            // tambahkan field lain yang diperlukan
        ]);

        Guru::create([
            'guru_id' => $request->guru_id,
            'nama_guru' => $request->nama_guru, // pastikan nama_guru ada di sini
            'deskripsi' => $request->deskripsi,
            // field lain yang diperlukan
        ]);

        return redirect()->route('admin.data.index')->with('success', 'Data guru berhasil ditambahkan');
    }


    public function edit($id, Request $request)
    {
        $data = $request->type === 'siswa' ? Siswa::find($id) : Guru::find($id);
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
        $data = $request->type === 'siswa' ? Siswa::find($id) : Guru::find($id);
        $data->delete();
        return redirect()->route('admin.data.index');
    }
}
