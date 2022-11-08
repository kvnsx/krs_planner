<?php

namespace App\Services;

use App\JadwalKuliah;
use App\Lesson;
use Carbon\Carbon;

class CalendarService
{
    public function generateCalendarData($harian, $timeIntervals)
    {
        $calendarData = [];
        $timeRange = [];

        foreach ($timeIntervals as $timeInterval)
        {
            array_push($timeRange, [
                'start' => $timeInterval['start_time'],
                'end' => $timeInterval['end_time']
            ]
            );
        }

        $jadwalKuliah = JadwalKuliah::with('mataKuliah')
            ->calendarByMataKuliahId()
            ->get();

        foreach ($timeRange as $time)
        {
            $timeText = $time['start'] . ' - ' . $time['end'];
            $calendarData[$timeText] = [];

            foreach ($harian as $index => $hari)
            {
                $jadwal = $jadwalKuliah->where('hari', $hari)->where('start_time', $time['start'])->first();

                if ($jadwal)
                {
                    array_push($calendarData[$timeText], [
                        'nama_mata_kuliah'   => $jadwal->mataKuliah->nama,
                        'rowspan'            => $jadwal->difference/Carbon::parse($time['start'])->diffInMinutes($time['end']) ?? ''
                    ]);
                }
                else if (!$jadwalKuliah->where('hari', $hari)->where('start_time', '<', $time['start'])->where('end_time', '>=', $time['end'])->count())
                {
                    array_push($calendarData[$timeText], 1);
                }
                else
                {
                    array_push($calendarData[$timeText], 0);
                }
            }
        }

        return $calendarData;
    }
}
