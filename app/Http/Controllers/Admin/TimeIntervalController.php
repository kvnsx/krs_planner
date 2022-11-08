<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySchoolClassRequest;
use App\Http\Requests\MassDestroyTimeIntervalRequest;
use App\Http\Requests\StoreSchoolClassRequest;
use App\Http\Requests\StoreTimeIntervalRequest;
use App\Http\Requests\UpdateSchoolClassRequest;
use App\Http\Requests\UpdateTimeIntervalRequest;
use App\TimeInterval;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TimeIntervalController extends Controller
{
    public function index()
    {
        $timeInterval = TimeInterval::all();

        return view('admin.timeInterval.index', compact('timeInterval'));
    }

    public function create()
    {
        return view('admin.timeInterval.create');
    }

    public function store(StoreTimeIntervalRequest $request)
    {
        $timeInterval = TimeInterval::create($request->all());

        return redirect()->route('admin.time-interval.index');
    }

    public function edit(TimeInterval $timeInterval)
    {
        return view('admin.timeInterval.edit', compact('timeInterval'));
    }

    public function update(UpdateTimeIntervalRequest $request, TimeInterval $timeInterval)
    {
        $timeInterval->update($request->all());

        return redirect()->route('admin.time-interval.index');
    }

    public function show(TimeInterval $timeInterval)
    {
        return view('admin.timeInterval.show', compact('timeInterval'));
    }

    public function destroy(TimeInterval $timeInterval)
    {
        $timeInterval->delete();

        return back();
    }

    public function massDestroy(MassDestroyTimeIntervalRequest $request)
    {
        TimeInterval::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
