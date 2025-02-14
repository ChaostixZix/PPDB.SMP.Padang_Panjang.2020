<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CalonSiswaSmpZonasiSeeder extends Seeder
{
    public function run()
    {
        DB::table('calon_siswa_smp_zonasi')->insert([
            [
                'nik_siswa' => '1371015301080001',
                'pilihan1' => 'SMPN 1 Padang Panjang',
                'pilihan2' => 'SMPN 2 Padang Panjang',
                'jarak1' => 1.5,
                'jarak2' => 2.3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nik_siswa' => '1371015301080002',
                'pilihan1' => 'SMPN 2 Padang Panjang',
                'pilihan2' => 'SMPN 3 Padang Panjang',
                'jarak1' => 0.8,
                'jarak2' => 1.7,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}