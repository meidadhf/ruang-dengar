@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <h1>Tambah Data</h1>
    <form action="{{ route('admin.data.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="type" class="form-label">Tipe Data</label>
            <select class="form-control" id="type" name="type" required>
                <option value="">Pilih Tipe Data</option>
                <option value="siswa">Siswa</option>
                <option value="guru">Guru</option>
            </select>
        </div>

        <div class="mb-3" id="namaField" style="display:none;">
            <label for="nama_guru" class="form-label">Nama Guru</label>
            <input type="text" class="form-control" id="nama_guru" name="nama_guru" required>
        </div>

        <div class="mb-3" id="guruIdField" style="display:none;">
            <label for="guru_id" class="form-label">Guru ID</label>
            <input type="text" class="form-control" id="guru_id" name="guru_id" required>
        </div>

        <div class="mb-3" id="deskripsiField" style="display:none;">
            <label for="deskripsi" class="form-label">Deskripsi Guru</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
        </div>

        <div class="mb-3" id="fotoField" style="display:none;">
            <label for="foto" class="form-label">Foto Guru</label>
            <input type="file" class="form-control" id="foto" name="foto" required>
        </div>

        <div class="mb-3" id="passwordField" style="display:none;">
            <label for="password" class="form-label">Password Guru</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

<script src="{{ asset('template/js/scripts.js') }}"></script>
<script>
    document.getElementById('type').addEventListener('change', function () {
        const type = this.value;
        const namaField = document.getElementById('namaField');
        const guruIdField = document.getElementById('guruIdField');
        const deskripsiField = document.getElementById('deskripsiField');
        const fotoField = document.getElementById('fotoField');
        const passwordField = document.getElementById('passwordField');

        // Reset visibility and required attributes
        namaField.style.display = 'none';
        guruIdField.style.display = 'none';
        deskripsiField.style.display = 'none';
        fotoField.style.display = 'none';
        passwordField.style.display = 'none';

        // Remove required attribute if elements exist
        document.getElementById('nama_guru')?.removeAttribute('required');
        document.getElementById('guru_id')?.removeAttribute('required');
        document.getElementById('deskripsi')?.removeAttribute('required');
        document.getElementById('foto')?.removeAttribute('required');
        document.getElementById('password')?.removeAttribute('required');

        if (type === 'guru') {
            namaField.style.display = 'block';
            guruIdField.style.display = 'block';
            deskripsiField.style.display = 'block';
            fotoField.style.display = 'block';
            passwordField.style.display = 'block';

            // Add required attribute
            document.getElementById('nama_guru').setAttribute('required', 'required');
            document.getElementById('guru_id').setAttribute('required', 'required');
            document.getElementById('deskripsi').setAttribute('required', 'required');
            document.getElementById('foto').setAttribute('required', 'required');
            document.getElementById('password').setAttribute('required', 'required');
        } else if (type === 'siswa') {
            // Handle siswa form if needed
        }
    });
</script>

@endsection
