<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Guru extends Authenticatable
{
    protected $guard = 'guru';
    protected $fillable = ['guru_id', 'nama_guru', 'email', 'password'];

}
