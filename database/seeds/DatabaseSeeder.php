<?php

use App\TimeInterval;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            TimeIntervalTableSeeder::class,
            MataKuliahTableSeeder::class,
            JadwalKuliahTableSeeder::class,
        ]);
    }
}
