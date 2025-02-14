<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CalonSiswaPindahtugasTableSeeder extends Seeder
{
    public function run()
    {
        $calon_siswa = [
            [
                'nik_siswa' => '1371082404080002',
                'pilihan_sekolah' => 'SMPN 2 Padang Panjang',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('calon_siswa_pindahtugas')->insert($calon_siswa);
    }
}