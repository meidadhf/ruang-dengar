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

        <!-- Fields for Guru -->
        <div class="mb-3" id="namaField" style="display:none;">
            <label for="nama_guru" class="form-label">Nama Guru</label>
            <input type="text" class="form-control" id="nama_guru" name="nama_guru">
        </div>

        <div class="mb-3" id="guruIdField" style="display:none;">
            <label for="guru_id" class="form-label">Guru ID</label>
            <input type="text" class="form-control" id="guru_id" name="guru_id">
        </div>

        <div class="mb-3" id="deskripsiField" style="display:none;">
            <label for="deskripsi" class="form-label">Deskripsi Guru</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
        </div>

        <div class="mb-3" id="fotoField" style="display:none;">
            <label for="foto" class="form-label">Foto Guru</label>
            <input type="file" class="form-control" id="foto" name="foto">
        </div>

        <div class="mb-3" id="passwordField" style="display:none;">
            <label for="password" class="form-label">Password Guru</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <!-- Fields for Siswa -->
        <div class="mb-3" id="siswaIdField" style="display:none;">
            <label for="siswa_id" class="form-label">Siswa ID</label>
            <input type="text" class="form-control" id="siswa_id" name="siswa_id">
        </div>

        <div class="mb-3" id="siswaPasswordField" style="display:none;">
            <label for="siswa_password" class="form-label">Password Siswa</label>
            <input type="password" class="form-control" id="siswa_password" name="siswa_password">
        </div>

        <div class="mb-3" id="siswaNamaField" style="display:none;">
            <label for="siswa_nama" class="form-label">Nama Siswa</label>
            <input type="text" class="form-control" id="siswa_nama" name="siswa_nama"> <!-- Mengganti input type menjadi text -->
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
        
        // Fields for Guru
        const namaField = document.getElementById('namaField');
        const guruIdField = document.getElementById('guruIdField');
        const deskripsiField = document.getElementById('deskripsiField');
        const fotoField = document.getElementById('fotoField');
        const passwordField = document.getElementById('passwordField');

        // Fields for Siswa
        const siswaIdField = document.getElementById('siswaIdField');
        const siswaPasswordField = document.getElementById('siswaPasswordField');
        const siswaNamaField = document.getElementById('siswaNamaField'); // Menambahkan siswaNamaField

        // Reset visibility and required attributes for Guru fields
        namaField.style.display = 'none';
        guruIdField.style.display = 'none';
        deskripsiField.style.display = 'none';
        fotoField.style.display = 'none';
        passwordField.style.display = 'none';

        // Reset visibility and required attributes for Siswa fields
        siswaIdField.style.display = 'none';
        siswaPasswordField.style.display = 'none';
        siswaNamaField.style.display = 'none'; // Menambahkan reset untuk siswaNamaField

        // Remove required attributes
        document.getElementById('nama_guru')?.removeAttribute('required');
        document.getElementById('guru_id')?.removeAttribute('required');
        document.getElementById('deskripsi')?.removeAttribute('required');
        document.getElementById('foto')?.removeAttribute('required');
        document.getElementById('password')?.removeAttribute('required');
        document.getElementById('siswa_id')?.removeAttribute('required');
        document.getElementById('siswa_password')?.removeAttribute('required');
        document.getElementById('siswa_nama')?.removeAttribute('required'); // Menambahkan remove untuk siswa_nama

        // Show fields based on selected type
        if (type === 'guru') {
            namaField.style.display = 'block';
            guruIdField.style.display = 'block';
            deskripsiField.style.display = 'block';
            fotoField.style.display = 'block';
            passwordField.style.display = 'block';

            // Add required attributes
            document.getElementById('nama_guru').setAttribute('required', 'required');
            document.getElementById('guru_id').setAttribute('required', 'required');
            document.getElementById('deskripsi').setAttribute('required', 'required');
            document.getElementById('foto').setAttribute('required', 'required');
            document.getElementById('password').setAttribute('required', 'required');
        } else if (type === 'siswa') {
            siswaIdField.style.display = 'block';
            siswaPasswordField.style.display = 'block';
            siswaNamaField.style.display = 'block'; // Menambahkan tampilan untuk siswaNamaField

            // Add required attributes for Siswa
            document.getElementById('siswa_id').setAttribute('required', 'required');
            document.getElementById('siswa_password').setAttribute('required', 'required');
            document.getElementById('siswa_nama').setAttribute('required', 'required'); // Menambahkan required untuk siswa_nama
        }
    });
</script>

@endsection
