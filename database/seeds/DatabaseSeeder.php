<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            DataSiswaSeeder::class,
            CalonSiswaSeeder::class,
            SekolahSeeder::class,
        ]);
    }
}
