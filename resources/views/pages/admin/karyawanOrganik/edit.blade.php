@extends('layouts.app')

@section('content')
 
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">

        <div class="btn-group pull-right m-t-15">
        <a href="{{ url('/karyawan/show') }}" class="btn btn-default" id="tombol-tambah">Kembali</a>
        </div>
        <h4 class="page-title">Edit Data Karyawan</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <form method="post" action="{{ url('/karyawan/update', $karyawan->id) }}" enctype="multipart/form-data">
                   @method('patch')
                    @csrf   
              
                <div class="row form-group">
                    <div class="col-6">
                        <label for="np">NP</label>
                        <input type="text" name="np" class="form-control" id="np" placeholder="Masukan NP" value="{{ $karyawan->np }}">
                        @if($errors->has('np'))
                        <div class="text-danger">{{ $errors->first('np')}}</div>
                        @endif
                    </div>
                    <div class="col-6">
                        <label for="full_name">Nama Lengkap</label>
                        <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Masukan Nama lengkap"  value="{{$karyawan->full_name  }}">
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
                        <input type="text" name="tanggal_lahir" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose" value="{{  $karyawan->tanggal_lahir }}">
                         @if($errors->has('tanggal_lahir'))
                        <div class="text-danger">{{ $errors->first('tanggal_lahir')}}</div>
                        @endif
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="md md-event-note"></i></span>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="tanggal_masuk">Tanggal Masuk</label>
                        <input type="text" name="tanggal_masuk" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-masuk" value="{{  $karyawan->tanggal_masuk }}">
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
                        <label for="exampleFormControlSelect1">Unit Kerja</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="unit_kerja_id">
                        <option value="" selected>== Pilih Unit kerja ==</option>
                          @foreach ($units as $unit)
                            <option value="{{$unit->id }}"
                                    @if($unit->id == $karyawan->unit_kerja_id)
                                        selected
                                    @endif
                                    >{{$unit->unit_kerja}}</option>
                          @endforeach  
                        </select>
                         @if($errors->has('unit_kerja_id'))
                        <div class="text-danger">{{ $errors->first('unit_kerja_id')}}</div>
                        @endif
                    </div>
                    
                    <div class="col-6">
                        <label for="exampleFormControlSelect1">Jabatan</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="id_jabatan">
                        <option value="" selected>== Pilih Jabatan ==</option>
                            @foreach ($jabatans as $jabatan)
                                 <option value="{{$jabatan->id }}"
                                    @if($jabatan->id == $karyawan->id_jabatan)
                                        selected
                                    @endif
                                    >{{$jabatan->nama_jabatan}}</option>
                            @endforeach
                        </select>
                         @if($errors->has('id_jabatan'))
                        <div class="text-danger">{{ $errors->first('id_jabatan')}}</div>
                        @endif
                    </div>
                  

                </div>
                 <hr>
                <br>
                <div class="row form-group">
                    
                      <div class="col-6">
                        <label for="exampleFormControlSelect1">Level Jabatan</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="level_id">
                       <option value="" selected>== Pilih Level ==</option>
                             @foreach ($data_level as $level)
                                <option value="{{$level->id}}"\
                                    @if ($level->id == $karyawan->level_id)
                                        selected
                                    @endif
                                    >{{$level->nama_level}}</option>
                            @endforeach
                        </select>
                         @if($errors->has('level_id'))
                        <div class="text-danger">{{ $errors->first('level_id')}}</div>
                        @endif
                    </div>

                    <div class="col-6">
                        <label for="exampleFormControlSelect1">Pangkat</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="pangkat_id">
                        <option value="" selected>== Pilih Pangkat ==</option>
                            @foreach ($pangkats as $pangkat)
                                <option value="{{$pangkat->id}}"
                                    @if ($pangkat->id == $karyawan->pangkat_id)
                                        selected
                                    @endif
                                    >{{$pangkat->nama_pangkat}}</option>
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
                          <label for="exampleFormControlSelect1">Grade Jabatan</label>
                             <select class="form-control" id="exampleFormControlSelect1" name="id_grade_jabatan">
                             <option value="" selected>== Pilih Grade Jabatan ==</option>
                                 @foreach ($gradeJabatan as $grade)
                                     <option value="{{$grade->id}}" 
                                        @if ($grade->id == $karyawan->id_grade_jabatan)
                                            selected
                                        @endif
                                        >{{$grade->grade_jabatan}}</option>
                                 @endforeach
                             </select>
                               @if($errors->has('id_grade_jabatan'))
                        <div class="text-danger">{{ $errors->first('id_grade_jabatan')}}</div>
                        @endif
                      </div>

                       <div class="col-6">
                            <label for="tmt_jabatan">Tmt Jabatan</label>
                            <input type="text" name="tmt_jabatan" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-mp" value="{{ old('tmt_jabatan') ?? $karyawan->tmt_jabatan ?? '' }}">
                            @if($errors->has('tmt_jabatan'))
                            <div class="text-danger">{{ $errors->first('tmt_jabatan')}}</div>
                            @endif
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="md md-event-note"></i></span>
                            </div>
                        </div>
                </div>

                <div class="col-12">
                    <label for="grade_pangkat">Input Grade Pangkat</label>
                    <input type="text" name="grade_pangkat" class="form-control" id="grade_pangkat" placeholder="Masukan Grade pangkat" value="{{ old('grade_pangkat') ?? $karyawan->grade_pangkat ?? '' }}">
                    @if($errors->has('grade_pangkat'))
                    <div class="text-danger">{{ $errors->first('grade_pangkat')}}</div>
                    @endif
                </div>
            <button class="btn btn-primary mt-3" type="submit">Save</button>
              </form>
        </div>
    </div>
</div> <!-- end row -->
    
@endsection