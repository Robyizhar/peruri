@extends('layouts.app')

@section('content')
<form action="{{ url('/'. $url) }}" enctype="multipart/form-data" method="POST">
    @if ($tombol == 'Update')
        @method('PATCH')
    @endif
    @csrf
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Level</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_level" value="{{ old('nama_level') ?? $level->nama_level ?? '' }}">
    @if($errors->has('nama_level'))
    <div class="text-danger">
        {{ $errors->first('nama_level')}}
    </div>
    @endif
    </div>
<button type="submit" class="btn btn-primary">{{ $tombol }}</button>
</form>
@endsection