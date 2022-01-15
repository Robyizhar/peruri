@extends('layouts.app')

@section('content')
<form action="{{ url('/'. $url) }}" enctype="multipart/form-data" method="POST">
    @if ($tombol == 'Update')
        @method('PATCH')
    @endif
    @csrf
    @csrf
    <div class="form-group">
    <label for="exampleInputEmail1">Grade Jabatan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="grade_jabatan" value="{{ old('grade_jabatan') ?? $gradejabatan->grade_jabatan ?? '' }}">
    @if($errors->has('grade_jabatan'))
    <div class="text-danger">
        {{ $errors->first('grade_jabatan')}}
    </div>
    @endif
    </div>
<button type="submit" class="btn btn-primary">{{ $tombol }}</button>
</form>
@endsection