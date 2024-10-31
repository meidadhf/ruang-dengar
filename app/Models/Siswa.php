<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Aunthenticatable;

class Siswa extends Aunthenticatable
{
    protected $guard  = 'siswa';
    protected $fillable = ['nis', 'nama', 'email', 'kelas', 'alamat']; // Tambahkan field lainnya
}
