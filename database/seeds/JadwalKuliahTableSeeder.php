<?php

use App\JadwalKuliah;
use Illuminate\Database\Seeder;

class JadwalKuliahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jadwalKuliah = [
            [
                'id'                => 1,
                'mata_kuliah_id'    => 1,
                'kelas'             => 'A',
                'hari'              => 'Senin',
                'start_time'        => '07:00',
                'end_time'          => '08:40',
            ],
            [
                'id'                => 2,
                'mata_kuliah_id'    => 1,
                'kelas'             => 'B',
                'hari'              => 'Selasa',
                'start_time'        => '07:00',
                'end_time'          => '08:40',
            ],
            [
                'id'                => 3,
                'mata_kuliah_id'    => 2,
                'kelas'             => 'A',
                'hari'              => 'Kamis',
                'start_time'        => '07:50',
                'end_time'          => '08:40',
            ],
            [
                'id'                => 4,
                'mata_kuliah_id'    => 2,
                'kelas'             => 'C',
                'hari'              => 'Jumat',
                'start_time'        => '07:50',
                'end_time'          => '08:40',
            ],
            [
                'id'                => 5,
                'mata_kuliah_id'    => 3,
                'kelas'             => 'A',
                'hari'              => 'Senin',
                'start_time'        => '07:00',
                'end_time'          => '07:50',
            ],
        ];

        JadwalKuliah::insert($jadwalKuliah);
    }
}
