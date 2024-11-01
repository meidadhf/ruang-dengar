<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Aunthenticatable;

class Siswa extends Aunthenticatable
{
    protected $guard  = 'siswa';
    // protected $fillable = ['nis', 'nama', 'email', 'kelas', 'alamat']; // Tambahkan field lainnya

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id'); // jika ada kolom guru_id di siswas
    }    
}
