@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <h1>Data Siswa dan Guru</h1>
    <a href="{{ route('admin.data.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <h2>Data Siswa</h2>
    <table class="table">
        <tr><th>Nama</th><th>Aksi</th></tr>
        @foreach ($siswa as $s)
        <tr>
            <td>{{ $s->nama }}</td>
            <td>
                <a href="{{ route('admin.data.edit', ['siswa_id' => $s->siswa_id]) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('admin.data.destroy', ['siswa_id' => $s->siswa_id]) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>

    <h2>Data Guru</h2>
    <table class="table">
        <tr><th>Nama</th><th>Aksi</th></tr>
        @foreach ($guru as $g)
            <tr>
                <td>{{ $g->nama }}</td>
                <td>
                    <a href="{{ route('admin.data.edit', ['guru_id' => $g->guru_id]) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.data.destroy', ['guru_id' => $g->guru_id]) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
