@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.mataKuliah.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.mata-kuliah.update", [$mataKuliah->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="nama">{{ trans('cruds.mataKuliah.fields.nama') }}</label>
                <input class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}" type="text" name="nama" id="nama" value="{{ old('nama', $mataKuliah->nama) }}" required>
                @if($errors->has('nama'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nama') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.mataKuliah.fields.nama_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="kode">{{ trans('cruds.mataKuliah.fields.kode') }}</label>
                <input class="form-control {{ $errors->has('kode') ? 'is-invalid' : '' }}" type="text" name="kode" id="kode" value="{{ old('kode', $mataKuliah->kode) }}" required>
                @if($errors->has('kode'))
                    <div class="invalid-feedback">
                        {{ $errors->first('kode') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.mataKuliah.fields.kode_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="sks">{{ trans('cruds.mataKuliah.fields.sks') }}</label>
                <input class="form-control {{ $errors->has('sks') ? 'is-invalid' : '' }}" type="text" name="sks" id="sks" value="{{ old('sks', $mataKuliah->sks) }}" required>
                @if($errors->has('sks'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sks') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.mataKuliah.fields.sks_helper') }}</span>
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