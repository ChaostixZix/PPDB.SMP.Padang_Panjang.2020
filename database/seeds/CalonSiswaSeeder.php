<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CalonSiswaSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');
        
        for ($i = 1; $i <= 100; $i++) {
            $nik = '13710101' . str_pad($i, 8, '0', STR_PAD_LEFT);
            $admissionType = $faker->randomElement(['zonasi', 'prestasi', 'afirmasi', 'pindahtugas']);
            
            switch ($admissionType) {
                case 'zonasi':
                    if (!DB::table('calon_siswa_smp_zonasi')->where('nik_siswa', $nik)->exists()) {
                        DB::table('calon_siswa_smp_zonasi')->insert([
                            'nik_siswa' => $nik,
                            'pilihan1' => $faker->numberBetween(1, 5),
                            'jarak1' => $faker->randomFloat(2, 0.1, 5.0),
                            'pilihan2' => $faker->numberBetween(1, 5),
                            'jarak2' => $faker->randomFloat(2, 0.1, 5.0),
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);
                    }
                    break;
                    
                case 'prestasi':
                    if (!DB::table('calon_siswa_prestasi')->where('nik_siswa', $nik)->exists()) {
                        DB::table('calon_siswa_prestasi')->insert([
                            'nik_siswa' => $nik,
                            'pilihan1' => $faker->numberBetween(1, 5),
                            'jenis_prestasi' => $faker->randomElement(['Akademik', 'Olahraga', 'Seni']),
                            'tingkat_prestasi' => $faker->randomElement(['Kabupaten', 'Provinsi', 'Nasional']),
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);
                    }
                    break;
                    
                case 'afirmasi':
                    if (!DB::table('calon_siswa_afirmasi')->where('nik_siswa', $nik)->exists()) {
                        DB::table('calon_siswa_afirmasi')->insert([
                            'nik_siswa' => $nik,
                            'pilihan1' => $faker->numberBetween(1, 5),
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);
                    }
                    break;
                    
                case 'pindahtugas':
                    if (!DB::table('calon_siswa_pindahtugas')->where('nik_siswa', $nik)->exists()) {
                        DB::table('calon_siswa_pindahtugas')->insert([
                            'nik_siswa' => $nik,
                            'pilihan_sekolah' => $faker->numberBetween(1, 5),
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);
                    }
                    break;
            }
        }
    }
}