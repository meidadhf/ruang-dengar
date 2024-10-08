<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Aunthenticatable;

class Siswa extends Aunthenticatable
{
    protected $fillable  = ['nis', 'password'];

    //relasi ke tabel konsultasi
    public function pesans()
    {
        return $this->hasMany(Pesan::class);
    }
}
