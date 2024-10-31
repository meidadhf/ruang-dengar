@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <h1>Edit Data</h1>
    <form action="{{ route('admin.update', ['id' => $data->id, 'type' => $type]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
