<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMataKuliahRequest;
use App\Http\Requests\StoreMataKuliahRequest;
use App\Http\Requests\UpdateMataKuliahRequest;
use App\MataKuliah;
use Symfony\Component\HttpFoundation\Response;

class MataKuliahController extends Controller
{
    public function index()
    {
        $mataKuliah = MataKuliah::all();

        return view('admin.mataKuliah.index', compact('mataKuliah'));
    }

    public function create()
    {
        return view('admin.mataKuliah.create');
    }

    public function store(StoreMataKuliahRequest $request)
    {
        $mataKuliah = MataKuliah::create($request->all());

        return redirect()->route('admin.mata-kuliah.index');
    }

    public function edit(MataKuliah $mataKuliah)
    {
        return view('admin.mataKuliah.edit', compact('mataKuliah'));
    }

    public function update(UpdateMataKuliahRequest $request, MataKuliah $mataKuliah)
    {
        $mataKuliah->update($request->all());

        return redirect()->route('admin.mata-kuliah.index');
    }

    public function show(MataKuliah $mataKuliah)
    {
        return view('admin.mataKuliah.show', compact('mataKuliah'));
    }

    public function destroy(MataKuliah $mataKuliah)
    {
        $mataKuliah->delete();

        return back();
    }

    public function massDestroy(MassDestroyMataKuliahRequest $request)
    {
        MataKuliah::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
