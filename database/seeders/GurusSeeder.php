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
            'guru_id'       => '2024027001',
            'nama_guru'     => 'Dra. Endang Dwi Winarti',
            'email'         => 'endangdwi@gmail.com',
            'password'      => Hash::make('endang123'),
        ]);

        Guru::create([
            'guru_id'       => '2024027002',
            'nama_guru'     => 'Ayu Lea Lailatussadiyah, S.Pd.',
            'email'         => 'ayulea@gmail.com',
            'password'      => Hash::make('ayu123'),
        ]);

        Guru::create([
            'guru_id'       => '2024027003',
            'nama_guru'     => 'Raden Dewi Noviyanti, S.Pd.',
            'email'         => 'radendewi@gmail.com',
            'password'      => Hash::make('dewi123'),
        ]);

        Guru::create([
            'guru_id'       => '2024027004',
            'nama_guru'     => 'Arfiansyah, S.Pd.',
            'email'         => 'arfiansyah@gmail.com',
            'password'      => Hash::make('arfi123'),
        ]);

        Guru::create([
            'guru_id'       => '2024027005',
            'nama_guru'     => 'Agus Dian Kusdiana, S.Pd.',
            'email'         => 'agusdian@gmail.com',
            'password'      => Hash::make('agus123'),
        ]);

        Guru::create([
            'guru_id'       => '2024027006',
            'nama_guru'     => 'Dede Badru Zaman, S.Sos.',
            'email'         => 'dedebadru@gmail.com',
            'password'      => Hash::make('dede123'),
        ]);

        Guru::create([
            'guru_id'       => '2024027007',
            'nama_guru'     => 'Putri Mardatila, S.Psi.',
            'email'         => 'putrimardatila@gmail.com',
            'password'      => Hash::make('putri123'),
        ]);
    }
}
