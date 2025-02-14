<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DataSiswaSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 100; $i++) {
            $nik = '13710101' . str_pad($i, 8, '0', STR_PAD_LEFT);
            
            if (!DB::table('data_siswa')->where('nik', $nik)->exists()) {
                DB::table('data_siswa')->insert([
                    'nik' => $nik,
                    'nama' => $faker->name,
                    'tempat_lahir' => $faker->city,
                    'tanggal_lahir' => $faker->date('Y-m-d', '2008-12-31'),
                    'jenis_kelamin' => $faker->randomElement(['L', 'P']),
                    'alamat' => $faker->address,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
