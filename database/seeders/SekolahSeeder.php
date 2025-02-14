<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SekolahSeeder extends Seeder
{
    public function run()
    {
        DB::table('sekolah')->insert([
            [
                'nama' => 'SMPN 1 Padang Panjang',
                'alamat' => 'Jl. Jenderal Sudirman No. 41, Padang Panjang',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'SMPN 2 Padang Panjang',
                'alamat' => 'Jl. Sutan Syahrir, Padang Panjang',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'SMPN 3 Padang Panjang',
                'alamat' => 'Jl. Syech Ibrahim Musa, Padang Panjang',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}