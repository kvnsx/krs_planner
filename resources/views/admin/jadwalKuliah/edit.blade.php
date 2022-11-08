@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.jadwalKuliah.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.jadwal-kuliah.update", [$jadwalKuliah->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="mata_kuliah_id">{{ trans('cruds.jadwalKuliah.fields.mata_kuliah') }}</label>
                <select class="form-control select2 {{ $errors->has('mataKuliah') ? 'is-invalid' : '' }}" name="mata_kuliah_id" id="mata_kuliah_id" required>
                    @foreach($mataKuliah as $id => $mataKuliah)
                        <option value="{{ $id }}" {{ ($jadwalKuliah->mataKuliah ? $jadwalKuliah->mataKuliah->nama : old('mata_kuliah_id')) == $mataKuliah ? 'selected' : '' }}>{{ $mataKuliah }}</option>
                    @endforeach
                </select>
                @if($errors->has('mataKuliah'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mataKuliah') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.jadwalKuliah.fields.mata_kuliah_helper') }}</span>
            </div>
            
            <div class="form-group">
                <label class="required" for="kelas">{{ trans('cruds.jadwalKuliah.fields.kelas') }}</label>
                <input class="form-control {{ $errors->has('kelas') ? 'is-invalid' : '' }}" type="text" name="kelas" id="kelas" value="{{ old('kelas', $jadwalKuliah->kelas) }}" required>
                @if($errors->has('kelas'))
                    <div class="invalid-feedback">
                        {{ $errors->first('kelas') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.mataKuliah.fields.nama_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="hari">{{ trans('cruds.jadwalKuliah.fields.hari') }}</label>
                <select class="form-control select2 {{ $errors->has('hari') ? 'is-invalid' : '' }}" name="hari" id="hari" required>
                    @foreach($hari as $id => $hari)
                        <option value="{{ $hari }}" {{ ($jadwalKuliah->hari ? $jadwalKuliah->hari : old('hari')) == $hari ? 'selected' : '' }}>{{ $hari }}</option>
                    @endforeach
                </select>
                @if($errors->has('hari'))
                    <div class="invalid-feedback">
                        {{ $errors->first('hari') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.jadwalKuliah.fields.hari_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="start_time">{{ trans('cruds.jadwalKuliah.fields.start_time') }}</label>
                <select class="form-control select2 {{ $errors->has('startTime') ? 'is-invalid' : '' }}" name="start_time" id="start_time" required>
                    @foreach($startTime as $id => $time)
                        <option value="{{ $time }}" {{ ($jadwalKuliah->start_time ? $jadwalKuliah->start_time : old('start_time')) == $time ? 'selected' : '' }}>{{ $time }}</option>
                    @endforeach
                </select>
                @if($errors->has('start_time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('start_time') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.jadwalKuliah.fields.end_time_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="end_time">{{ trans('cruds.jadwalKuliah.fields.end_time') }}</label>
                <select class="form-control select2 {{ $errors->has('endTime') ? 'is-invalid' : '' }}" name="end_time" id="end_time" required>
                    @foreach($endTime as $id => $time)
                        <option value="{{ $time }}" {{ ($jadwalKuliah->end_time ? $jadwalKuliah->end_time : old('end_time')) == $time ? 'selected' : '' }}>{{ $time }}</option>
                    @endforeach
                </select>
                @if($errors->has('end_time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('end_time') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.jadwalKuliah.fields.end_time_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection