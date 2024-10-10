<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guru;
use Illuminate\Support\Facades\Hash;

class GurusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Guru::create([
            'nama_guru'     => 'Putri Mardatila, S.Psi.',
            'email'         => 'putrimardatila@gmail.com',
            'password'      => Hash::make('putri123'),
        ]);
    }
}
