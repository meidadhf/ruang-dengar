<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Aunthenticatable;

class Guru extends Aunthenticatable
{
    protected $fillable = ['name', 'email', 'password'];

    //relasi ke tabel konsultasi
    public function pesans()
    {
        return $this->hasMany(Pesan::class);
    }
}
