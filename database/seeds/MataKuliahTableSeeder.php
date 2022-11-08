<?php

use App\MataKuliah;
use Illuminate\Database\Seeder;

class MataKuliahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mataKuliah = [
            [
                'id' => 1,
                'nama' => ' Implementasi dan Evaluasi Sistem Informasi',
                'kode' => 'CIS61023',
                'sks' => 3
            ],
            [
                'id' => 2,
                'nama' => 'Pemrograman Aplikasi Perangkat Bergerak',
                'kode' => 'CIS61020',
                'sks' => 3
            ],
            [
                'id' => 3,
                'nama' => 'Pengantar Data Sains',
                'kode' => 'CIS61021',
                'sks' => 2
            ],
        ];

        MataKuliah::insert($mataKuliah);
    }
}
