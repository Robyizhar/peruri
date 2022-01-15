@extends('layouts.app')

@section('content')
<form action="{{ url('/'. $url) }}" enctype="multipart/form-data" method="POST">
    @if ($tombol == 'Update')
        @method('PATCH')
    @endif
    @csrf
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Pangkat</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_pangkat" value="{{ old('nama_pangkat') ?? $pangkat->nama_pangkat ?? '' }}">
    @if($errors->has('nama_pangkat'))
    <div class="text-danger">
        {{ $errors->first('nama_pangkat')}}
    </div>
    @endif
    </div>
<button type="submit" class="btn btn-primary">{{ $tombol }}</button>
</form>
@endsection