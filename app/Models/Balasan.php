<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balasan extends Model
{
    use HasFactory;
    protected $table = 'balasans';
    protected $fillable = ['pesan_id', 'reply'];

    //relasi ke pesan
    public function pesan()
    {
        return $this->belongsTo(Pesan::class, 'pesan_id');
    }
}
