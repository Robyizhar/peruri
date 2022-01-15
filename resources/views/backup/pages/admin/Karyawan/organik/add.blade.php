@extends('layouts.app')

@section('content')
 
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">

        <div class="btn-group pull-right m-t-15">
        <a href="{{ url('/karyawan/show') }}" class="btn btn-default" id="tombol-tambah">Kembali</a>
        </div>
        <h4 class="page-title">Input Karyawan</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <form method="post" action="{{ url('/'.$action) }}" enctype="multipart/form-data">
                @if ($button == 'Update')
                    @method('PATCH')
                @endif
                @csrf
                <div class="row form-group">
                    <div class="col-6">
                        <label for="np">NP</label>
                        <input type="text" name="np" class="form-control" id="np" placeholder="Masukan NP" value="{{ old('np') ?? $karyawan->np ?? '' }}">
                        @if($errors->has('np'))
                        <div class="text-danger">{{ $errors->first('np')}}</div>
                        @endif
                    </div>
                    <div class="col-6">
                        <label for="full_name">Full Name</label>
                        <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Masukan Nama lengkap"  value="{{ old('full_name') ?? $karyawan->full_name ?? '' }}">
                         @if($errors->has('full_name'))
                        <div class="text-danger">{{ $errors->first('full_name')}}</div>
                        @endif
                    </div>
                    
                </div>
                <hr>
                <br>
                <div class="row form-group">
                    <div class="col-6">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="text" name="tanggal_lahir" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose" value="{{ old('tanggal_lahir') ?? $karyawan->tanggal_lahir ?? '' }}">
                         @if($errors->has('tanggal_lahir'))
                        <div class="text-danger">{{ $errors->first('tanggal_lahir')}}</div>
                        @endif
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="md md-event-note"></i></span>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="tanggal_masuk">Tanggal Masuk</label>
                        <input type="text" name="tanggal_masuk" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-masuk" value="{{ old('tanggal_lahir') ?? $karyawan->tanggal_masuk ?? '' }}">
                         @if($errors->has('tanggal_masuk'))
                        <div class="text-danger">{{ $errors->first('tanggal_masuk')}}</div>
                        @endif
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="md md-event-note"></i></span>
                        </div>
                    </div>
                </div>
                <hr>
                <br>
                <div class="row form-group">
                    <div class="col-6">
                        <label for="tanggal_mpp">Tanggal MPP</label>
                        <input type="text" name="tanggal_mpp" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-mp" value="{{ old('tanggal_mpp') ?? $karyawan->tanggal_mpp ?? '' }}">
                        @if($errors->has('tanggal_mpp'))
                        <div class="text-danger">{{ $errors->first('tanggal_mpp')}}</div>
                        @endif
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="md md-event-note"></i></span>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="tanggal_pensiun">Tanggal Pensiun</label>
                        <input type="text" name="tanggal_pensiun" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-pensiun" value="{{ old('tanggal_pensiun') ?? $karyawan->tanggal_pensiun ?? '' }}">
                        @if($errors->has('tanggal_pensiun'))
                        <div class="text-danger">{{ $errors->first('tanggal_pensiun')}}</div>
                        @endif
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="md md-event-note"></i></span>
                        </div>
                    </div>

                </div>
                <hr>
                <br>
                <div class="row form-group">
                    <div class="col-6">
                        <select name="jabatan_id" class="custom-select mt-3">
                            <option value="" selected>Pilih Jabatan</option>
                            @foreach ($jabatans as $jabatan)
                                @if ($button == 'Update')
                                    @if ($jabatan->id === $karyawan->jabatan_id)
                                        <option value="{{ $jabatan->id }}" selected>{{ $jabatan->nama_jabatan }}</option>
                                    @else
                                        <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                                    @endif
                                @else
                                    <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                                @endif
                            @endforeach
                        </select>
                        @if($errors->has('jabatan_id'))
                        <div class="text-danger">{{ $errors->first('jabatan_id')}}</div>
                        @endif
                    </div>
                    <div class="col-6">
                        <select name="unit_kerja_id" class="custom-select mt-3">
                            <option value="" selected>Pilih unit kerja</option>
                            @foreach ($units as $unit)
                                @if ($button == 'Update')
                                    @if ($unit->id === $karyawan->unit_kerja_id)
                                        <option value="{{ $unit->id }}" selected>{{ $unit->unit_kerja }}</option>
                                    @else
                                        <option value="{{ $unit->id }}">{{ $unit->unit_kerja }}</option>
                                    @endif
                                @else
                                    <option value="{{ $unit->id }}">{{ $unit->unit_kerja }}</option>
                                @endif
                            @endforeach
                        </select>
                        @if($errors->has('unit_kerja_id'))
                        <div class="text-danger">{{ $errors->first('unit_kerja_id')}}</div>
                        @endif
                    </div>
                </div>
                <hr>
                <br>
                <div class="row form-group">
                    <div class="col-6">
                        <select name="posisi_id" class="custom-select mt-3">
                            <option value="" selected>Pilih posisi</option>
                            @foreach ($positions as $position)
                                @if ($button == 'Update')
                                    @if ($position->id === $karyawan->posisi_id)
                                        <option value="{{ $position->id }}" selected>{{ $position->nama_posisi }}</option>
                                    @else
                                        <option value="{{ $position->id }}">{{ $position->nama_posisi }}</option>
                                    @endif
                                @else
                                    <option value="{{ $position->id }}">{{ $position->nama_posisi }}</option>
                                @endif
                            @endforeach
                        </select>
                        @if($errors->has('posisi_id'))
                        <div class="text-danger">{{ $errors->first('posisi_id')}}</div>
                        @endif
                    </div>
                    <div class="col-6">
                        <select name="pangkat_id" class="custom-select mt-3">
                            <option value="" selected>Pilih pangkat</option>
                            @foreach ($pangkats as $pangkat)
                                @if ($button == 'Update')
                                    @if ($pangkat->id === $karyawan->pangkat_id)
                                        <option value="{{ $pangkat->id }}" selected>{{ $pangkat->nama_pangkat }}</option>
                                    @else
                                        <option value="{{ $pangkat->id }}">{{ $pangkat->nama_pangkat }}</option>
                                    @endif
                                @else
                                    <option value="{{ $pangkat->id }}">{{ $pangkat->nama_pangkat }}</option>
                                @endif
                            @endforeach
                        </select>
                         @if($errors->has('pangkat_id'))
                        <div class="text-danger">{{ $errors->first('pangkat_id')}}</div>
                        @endif
                    </div>
                </div>
                <hr>
                <br>
                <div class="row form-group">
                    <div class="col-6">
                        <label class="control-label " for="grade">Grade</label>
                        <div class="">
                            <input id="grade" name="grade" type="text" placeholder="masukan grade" class="required form-control" value="{{ old('grade') ?? $karyawan->grade ?? '' }}">
                            @if($errors->has('grade'))
                            <div class="text-danger">{{ $errors->first('grade')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="T_to_pensiun">T to pensiun</label>
                        <input type="text" name="T_to_pensiun" class="form-control" placeholder="" id="T_to_pensiun" value="{{ old('T_to_pensiun') ?? $karyawan->T_to_pensiun ?? '' }}">
                        @if($errors->has('T_to_pensiun'))
                        <div class="text-danger">{{ $errors->first('T_to_pensiun')}}</div>
                        @endif
                    </div>
                </div>
                <hr>
                <br>
                <div class="row form-group">
                    <div class="col-6">
                        <label class="control-label " for="brithplace">brithplace</label>
                        <div class="">
                            <input id="brithplace" name="brithplace" type="text" placeholder="masukan brithplace" class="required form-control" value="{{ old('brithplace') ?? $karyawan->brithplace ?? '' }}">
                            @if($errors->has('brithplace'))
                        <div class="text-danger">{{ $errors->first('brithplace')}}</div>
                        @endif
                        </div>
                    </div>

                    <div class="col-6">
                        <label for="Tmt">TMT</label>
                        <input type="text" name="Tmt" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-Tmt" value="{{ old('tanggal_lahir') ?? $karyawan->Tmt ?? '' }}">
                        @if($errors->has('Tmt'))
                        <div class="text-danger">{{ $errors->first('Tmt')}}</div>
                        @endif
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="md md-event-note"></i></span>
                        </div>
                    </div>

                    <div class="col-12">
                        <select name="level_id" class="custom-select mt-3">
                            <option selected>Pilih Level</option>
                            @foreach ($levels as $level)
                                @if ($button == 'Update')
                                    @if ($level->id === $karyawan->level_id)
                                        <option value="{{ $level->id }}" selected>{{ $level->level }}</option>
                                    @else
                                        <option value="{{ $level->id }}">{{ $level->level }}</option>
                                    @endif
                                @else
                                    <option value="{{ $level->id }}">{{ $level->level }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
            <button class="btn btn-primary" type="submit">{{ $button }}</button>
              </form>
        </div>
    </div>
</div> <!-- end row -->
    
@endsection