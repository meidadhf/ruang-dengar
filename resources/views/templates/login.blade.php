@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="display-5 fw-bolder mb-0 text-center"><span class="text-gradient d-inline">Masuk ke akun anda</span></h1>
    <form action="{{ route('login.submit') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="role" class="form-label">Login sebagai</label>
            <select name="role" class="form-control" required>
                <option value="siswa">Siswa</option>
                <option value="guru">Guru</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">NIS Siswa / ID Guru</label>
            <input type="text" name="user_id" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
@endsection
