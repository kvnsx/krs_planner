<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMataKuliahRequest;
use App\Http\Requests\StoreJadwalKuliahRequest;
use App\Http\Requests\UpdateJadwalKuliahRequest;
use App\JadwalKuliah;
use App\MataKuliah;
use App\TimeInterval;
use Symfony\Component\HttpFoundation\Response;

class JadwalKuliahController extends Controller
{
    public function index()
    {

        $jadwalKuliah = JadwalKuliah::all();

        return view('admin.jadwalKuliah.index', compact('jadwalKuliah'));
    }

    public function create()
    {
        $mataKuliah = MataKuliah::all()->pluck('nama', 'id')->prepend(trans('global.pleaseSelect'), '');

        $hari =  JadwalKuliah::HARI;

        $startTime = TimeInterval::all()->pluck('start_time', 'id')->prepend(trans('global.pleaseSelect'), '');
        
        $endTime = TimeInterval::all()->pluck('end_time', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.jadwalKuliah.create', compact('mataKuliah', 'hari', 'startTime', 'endTime'));
    }

    public function store(StoreJadwalKuliahRequest $request)
    {
        $jadwalKuliah = JadwalKuliah::create($request->all());

        return redirect()->route('admin.jadwal-kuliah.index');
    }

    public function edit(JadwalKuliah $jadwalKuliah)
    {
        $mataKuliah = MataKuliah::all()->pluck('nama', 'id')->prepend(trans('global.pleaseSelect'), '');

        $hari =  JadwalKuliah::HARI;

        $startTime = TimeInterval::all()->pluck('start_time', 'id')->prepend(trans('global.pleaseSelect'), '');
        
        $endTime = TimeInterval::all()->pluck('end_time', 'id')->prepend(trans('global.pleaseSelect'), '');

        $jadwalKuliah->load('mataKuliah');

        return view('admin.jadwalKuliah.edit', compact('mataKuliah', 'hari', 'startTime', 'endTime', 'jadwalKuliah'));
    }

    public function update(UpdateJadwalKuliahRequest $request, JadwalKuliah $jadwalKuliah)
    {
        $jadwalKuliah->update($request->all());

        return redirect()->route('admin.jadwal-kuliah.index');
    }

    public function show(JadwalKuliah $jadwalKuliah)
    {
        $jadwalKuliah->load('mataKuliah');

        return view('admin.jadwalKuliah.show', compact('jadwalKuliah'));
    }

    public function destroy(JadwalKuliah $jadwalKuliah)
    {
        $jadwalKuliah->delete();

        return back();
    }

    public function massDestroy(MassDestroyMataKuliahRequest $request)
    {
        JadwalKuliah::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
