<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\JadwalKuliah;
use App\Services\CalendarService;
use App\TimeInterval;

class CalendarController extends Controller
{
    public function index(CalendarService $calendarService)
    {
        $hari     = JadwalKuliah::HARI;
        $timeIntervals = TimeInterval::all()->toArray();
        $calendarData = $calendarService->generateCalendarData($hari, $timeIntervals);

        return view('admin.calendar', compact('hari', 'calendarData'));
    }
}
