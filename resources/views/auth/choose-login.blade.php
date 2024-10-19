<!-- resources/views/auth/choose-login.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Pilih Role untuk Login</h1>
    <a href="{{ route('login.siswa') }}" class="btn btn-primary">Login Siswa</a>
    <a href="{{ route('login.guru') }}" class="btn btn-secondary">Login Guru</a>
    <a href="{{ route('login.admin') }}" class="btn btn-danger">Login Admin</a>
</div>
@endsection
