<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CalonSiswaSmpZonasiTableSeeder extends Seeder
{
    public function run()
    {
        $calon_siswa = [
            [
                'nik_siswa' => '1371082503080001',
                'pilihan1' => 'SMPN 1 Padang Panjang',
                'pilihan2' => 'SMPN 2 Padang Panjang',
                'jarak1' => 1.5,
                'jarak2' => 2.8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nik_siswa' => '1371082404080002',
                'pilihan1' => 'SMPN 2 Padang Panjang',
                'pilihan2' => 'SMPN 3 Padang Panjang',
                'jarak1' => 0.8,
                'jarak2' => 3.2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('calon_siswa_smp_zonasi')->insert($calon_siswa);
    }
}