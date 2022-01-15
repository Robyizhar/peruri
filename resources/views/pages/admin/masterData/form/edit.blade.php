@extends('layouts.app')

@section('content')
<form action="{{ url('/'. $url) }}" enctype="multipart/form-data" method="POST">
    @if ($tombol == 'Update')
        @method('PATCH')
    @endif
    @csrf
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Kode</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="kode_jabatan" value="{{ old('kode_jabatan') ?? $jabatan->kode_jabatan ?? '' }}">
    @if($errors->has('kode_jabatan'))
    <div class="text-danger">
        {{ $errors->first('kode_jabatan')}}
    </div>
    @endif
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Nama</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="nama_jabatan" value="{{ old('nama_jabatan') ?? $jabatan->nama_jabatan ?? '' }}">
      @if($errors->has('nama_jabatan'))
        <div class="text-danger">
        {{ $errors->first('nama_jabatan')}}
        </div>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection