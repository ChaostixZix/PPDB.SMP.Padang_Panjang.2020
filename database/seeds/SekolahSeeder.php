<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SekolahSeeder extends Seeder
{
    public function run()
    {
        $schools = [
            [
                'zon_id' => 1,
                'nama_sekolah' => 'SMPN 1 Padang Panjang',
                'kuota' => 100,
            ],
            [
                'zon_id' => 2,
                'nama_sekolah' => 'SMPN Gunung Pangilun',
                'kuota' => 90,
            ],
            [
                'zon_id' => 3,
                'nama_sekolah' => 'SMPN Bukit Surungan',
                'kuota' => 85,
            ],
            [
                'zon_id' => 4,
                'nama_sekolah' => 'SMPN Silaing Bawah',
                'kuota' => 95,
            ],
            [
                'zon_id' => 5,
                'nama_sekolah' => 'SMPN Ganting',
                'kuota' => 80,
            ]
        ];

        foreach ($schools as $school) {
            if (!DB::table('zonasi')->where('zon_id', $school['zon_id'])->exists()) {
                DB::table('zonasi')->insert(array_merge($school, [
                    'created_at' => now(),
                    'updated_at' => now(),
                ]));
            }
        }
    }
}
