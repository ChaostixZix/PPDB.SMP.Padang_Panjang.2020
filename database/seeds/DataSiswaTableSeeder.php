<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSiswaTableSeeder extends Seeder
{
    public function run()
    {
        $siswa = [
            [
                'nik' => '1371082503080001',
                'nama' => 'Ahmad Fauzi',
                'tempat_lahir' => 'Padang Panjang',
                'tanggal_lahir' => '2008-03-25',
                'jenis_kelamin' => 'L',
                'alamat' => 'Jl. Sutan Syahrir No. 15, Padang Panjang',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nik' => '1371082404080002',
                'nama' => 'Siti Rahma',
                'tempat_lahir' => 'Bukittinggi',
                'tanggal_lahir' => '2008-04-24',
                'jenis_kelamin' => 'P',
                'alamat' => 'Jl. Ahmad Yani No. 45, Padang Panjang',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nik' => '1371081505080003',
                'nama' => 'Muhammad Rizki',
                'tempat_lahir' => 'Padang Panjang',
                'tanggal_lahir' => '2008-05-15',
                'jenis_kelamin' => 'L',
                'alamat' => 'Jl. Sudirman No. 78, Padang Panjang',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('data_siswa')->insert($siswa);
    }
}