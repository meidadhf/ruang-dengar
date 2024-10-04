<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table     = 'siswas';
    protected $fillable  = ['nis', 'password'];

    //relasi ke tabel konsultasi
    public function konsuls()
    {
        return $this->hasMany(Konsul::class);
    }
}
