@extends('layouts.app')

@section('content')
<form action="{{ url('/'. $url) }}" enctype="multipart/form-data" method="POST">
    @if ($tombol == 'Update')
        @method('PATCH')
    @endif
    @csrf
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Kode Unit</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="kode_unit" value="{{ old('kode_unit') ?? $unit->kode_unit ?? '' }}">
    @if($errors->has('kode_unit'))
    <div class="text-danger">
        {{ $errors->first('kode_unit')}}
    </div>
    @endif
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Nama Unit</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="unit_kerja" value="{{ old('unit_kerja') ?? $unit->unit_kerja ?? '' }}">
      @if($errors->has('unit_kerja'))
        <div class="text-danger">
        {{ $errors->first('unit_kerja')}}
        </div>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection