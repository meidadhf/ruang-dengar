<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa'; // Nama tabel, sesuaikan dengan yang ada di database

    protected $fillable = [
        'siswa_id',
        'password',
        'nama',
    ];
}
