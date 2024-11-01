<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Guru extends Authenticatable
{
    // Definisikan atribut dan relasi model di sini
    protected $table = 'gurus'; 
    protected $primaryKey = 'guru_id'; 

    // Tambahkan atribut lain yang diperlukan, misalnya:
    protected $fillable = ['nama_guru', 'password']; // Atribut yang dapat diisi
}
