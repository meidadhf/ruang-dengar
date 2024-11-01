@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <h1>Data Siswa dan Guru</h1>

    <!-- Tautan untuk menambah data baru -->
    <div class="mb-3">
        <a href="{{ route('admin.data.create') }}" class="btn btn-success">Tambah Data</a>
    </div>

    <!-- Tabel Data Siswa -->
    <h2>Data Siswa</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID Siswa</th>
                <th>Nama Siswa</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $data) <!-- Mengganti $guru menjadi $siswa -->
                <tr>
                    <td>{{ $data->siswa_id }}</td>
                    <td>{{ $data->nama_siswa }}</td>
                    <td>
                        <a href="{{ route('admin.edit', ['id' => $data->siswa_id, 'type' => 'siswa']) }}" class="btn btn-warning">Edit</a> <!-- Menggunakan id siswa -->
                        <form action="{{ route('admin.data.destroy', ['id' => $data->siswa_id, 'type' => 'siswa']) }}" method="POST" style="display:inline;"> <!-- Menyesuaikan dengan rute yang benar -->
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Tabel Data Guru -->
    <h2>Data Guru</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID Guru</th>
                <th>Nama Guru</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guru as $data)
                <tr>
                    <td>{{ $data->guru_id }}</td>
                    <td>{{ $data->nama_guru }}</td>
                    <td>
                        <a href="{{ route('admin.edit', ['id' => $data->guru_id, 'type' => 'guru']) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.data.destroy', ['guru_id' => $data->guru_id]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
