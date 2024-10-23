<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $fillable = ['guru_id', 'pesan'];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}
