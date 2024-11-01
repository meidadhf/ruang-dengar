@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <h1>Edit Data</h1>

    <form action="{{ route('admin.update', ['id' => $data->guru_id, 'type' => $type]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="guru_id" class="form-label">ID Guru</label>
            <input type="text" class="form-control" id="guru_id" name="guru_id" value="{{ $data->guru_id }}" required>
        </div>
        
        <div class="mb-3">
            <label for="nama_guru" class="form-label">Nama Guru</label>
            <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="{{ $data->nama_guru }}" required>
        </div>
        
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi">{{ $data->deskripsi }}</textarea>
        </div>
        
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto">
        </div>
        
        <div class="mb-3">
            <label for="password" class="form-label">Password (kosongkan jika tidak ingin mengubah)</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
