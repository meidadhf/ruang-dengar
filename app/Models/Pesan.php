<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;
    protected $table = 'pesans';
    protected $fillable = ['konsul_id', 'pesan_konsul'];

    //relasi ke konsul
    public function konsul()
    {
        return $this->belongsTo(Konsul::class, 'konsul_id');
    }

    //relasi ke balasan
    public function balasans()
    {
        return $this->hasMany(Balasan::class, 'pesan_id');
    }
}
