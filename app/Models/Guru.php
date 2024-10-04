<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'gurus';
    protected $fillable = ['name', 'email', 'description'];

    //relasi ke tabel konsultasi
    public function konsuls()
    {
        return $this->hasMany(Konsul::class);
    }
}
