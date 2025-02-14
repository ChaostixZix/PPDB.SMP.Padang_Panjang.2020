<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSiswaSeeder extends Seeder
{
    public function run()
    {
        DB::table('data_siswa')->insert([
            [
                'nik' => '1371015301080001',
                'nama' => 'Ahmad Fauzi',
                'tempat_lahir' => 'Padang Panjang',
                'tanggal_lahir' => '2008-01-15',
                'alamat' => 'Jl. Veteran No. 45',
                'kelurahan' => 'Silaing Bawah',
                'kecamatan' => 'Padang Panjang Barat',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nik' => '1371015301080002',
                'nama' => 'Siti Rahma',
                'tempat_lahir' => 'Padang Panjang',
                'tanggal_lahir' => '2008-03-20',
                'alamat' => 'Jl. Ahmad Yani No. 12',
                'kelurahan' => 'Pasar Usang',
                'kecamatan' => 'Padang Panjang Timur',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}