@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.jadwalKuliah.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.jadwal-kuliah.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.jadwalKuliah.fields.id') }}
                        </th>
                        <td>
                            {{ $jadwalKuliah->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jadwalKuliah.fields.mata_kuliah') }}
                        </th>
                        <td>
                            {{ $jadwalKuliah->mataKuliah->nama ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jadwalKuliah.fields.kelas') }}
                        </th>
                        <td>
                            {{ $jadwalKuliah->kelas ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jadwalKuliah.fields.hari') }}
                        </th>
                        <td>
                            {{ $jadwalKuliah->hari }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jadwalKuliah.fields.start_time') }}
                        </th>
                        <td>
                            {{ $jadwalKuliah->start_time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jadwalKuliah.fields.end_time') }}
                        </th>
                        <td>
                            {{ $jadwalKuliah->end_time }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.jadwal-kuliah.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection