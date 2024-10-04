<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsul extends Model
{
    use HasFactory;
    protected $table = 'konsuls';
    protected $fillable = ['guru_id', 'pesan_konsul'];

    //relasi ke table guru
    public function gurus()
    {
        return $this->belongsTo(Guru::class, 'guru_id');
    }

    //relasi ke pesan
    public function pesans()
    {
        return $this->hasMany(Pesan::class, 'konsul_id');
    }
}
