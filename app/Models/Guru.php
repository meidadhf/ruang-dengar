<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Guru extends Authenticatable
{
    use Notifiable;

    protected $table = 'gurus';

    protected $fillable = [
        'nama_guru', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function pesans()
    {
        return $this->hasMany(Pesan::class);
    }

    // Metode untuk membuat guru baru
    public static function createGuru($data)
    {
        $guru = new self();
        $guru->nama_guru = $data['nama_guru'];
        $guru->email = $data['email'];
        $guru->password = Hash::make($data['password']); // Menggunakan Hash di sini
        $guru->save();

        return $guru;
    }
}
