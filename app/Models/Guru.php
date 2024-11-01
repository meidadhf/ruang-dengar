<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Guru extends Authenticatable
{
    protected $guard = 'guru'; // Pastikan ini diperlukan sesuai dengan sistem autentikasi Anda
    protected $primaryKey = 'guru_id'; // Menentukan kolom primary key
    protected $fillable = ['guru_id', 'nama_guru', 'password']; // Sesuaikan dengan kolom yang ada di database

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
