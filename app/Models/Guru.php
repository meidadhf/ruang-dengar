<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'gurus'; // Nama tabel
    protected $primaryKey = 'guru_id'; // Kolom kunci utama
    public $timestamps = true; // Jika kamu memiliki kolom created_at dan updated_at

    protected $fillable = [
        'guru_id',
        'nama_guru',
        'email',
        'password',
    ];
    // Relasi ke pesan
    public function pesans()
    {
        return $this->hasMany(Pesan::class);
    }
}
