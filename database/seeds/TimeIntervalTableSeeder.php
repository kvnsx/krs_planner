<?php

use App\TimeInterval;
use Illuminate\Database\Seeder;

class TimeIntervalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timeInterval = [
            [
                'id' => 1,
                'start_time' => '07:00',
                'end_time' => '07:50',
            ],
            [
                'id' => 2,
                'start_time' => '07:50',
                'end_time' => '08:40',
            ],
            [
                'id' => 3,
                'start_time' => '08:45',
                'end_time' => '09:35',
            ],
            [
                'id' => 4,
                'start_time' => '09:35',
                'end_time' => '10:25',
            ]
        ];

        TimeInterval::insert($timeInterval);
    }
}
