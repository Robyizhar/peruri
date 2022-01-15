@extends('layouts.app')

@section('content')
{!! Form::model($model, [
  'route' => $model->exists ? ['cuti.update', $model->id] : 'cuti.store',
  'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

  <div class="form-group">
    <label>Nama Karyawan</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      <select class="form-control custom-select selectric @error('id_karyawan') is-invalid @enderror" name="id_karyawan" id="id_karyawan">

        @if ($model->exists)
            <option value="{{ $model->karyawan ? $model->karyawan->id  : 'null' }}" {{ $model->karyawan ? 'disabled'  : '' }} selected>Prev. Name: {{ $model->karyawan ? $model->karyawan->full_name  : 'name karyawan is Null'}}</option>
        @else
         <option value="" selected disabled>~ Choose Admin ~</option>
        @foreach ($data_karyawan as $karyawan)
          <option value="{{ $karyawan->id }}">{{ $karyawan->full_name }}</option>
        @endforeach
        @endif
    </div>
  </div>

  <div class="form-group">
    <label>jenis cuti</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      <input type="text" class="form-control" placeholder="jenis cuti" name="jenis_cuti" id="jenis_cuti" value="{{ old('jenis_cuti') ?? $model->jenis_cuti }}">
    </div>
  </div>
  <div class="form-group">
    <label>jumlah cuti</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      <input type="text" class="form-control" placeholder="Jumlah Cuti" name="jumlah_cuti" id="jumlah_cuti" value="{{ old('jumlah_cuti') ?? $model->jumlah_cuti }}">
    </div>
  </div>

  <button type="sbmit" class="btn btn-primary">{{$button}}</button>

{!! Form::close() !!}
    
@endsection
