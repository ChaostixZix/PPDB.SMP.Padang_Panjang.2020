<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CalonSiswaAfirmasiTableSeeder extends Seeder
{
    public function run()
    {
        $calon_siswa = [
            [
                'nik_siswa' => '1371081505080003',
                'pilihan1' => 'SMPN 1 Padang Panjang',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('calon_siswa_afirmasi')->insert($calon_siswa);
    }
}