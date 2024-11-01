@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <h1>Edit Data</h1>
    <form action="{{ route('admin.update', ['id' => $data->guru_id ?? $data->siswa_id, 'type' => $type]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama_guru" class="form-control" value="{{ $data->nama_guru }}" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password (kosongkan jika tidak ingin mengubah)</label>
            <input type="password" name="password" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
