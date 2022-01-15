@extends('layouts.app')

@section('content')
 
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">

        <div class="btn-group pull-right m-t-15">
        <a href="{{ url('/karyawan/showPkwt') }}" class="btn btn-default" id="tombol-tambah">Kembali</a>
        </div>
        <h4 class="page-title">Input Karyawan PKWT</h4>
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
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama lengkap"  value="{{ old('nama') ?? $karyawan->nama ?? '' }}">
                         @if($errors->has('nama'))
                        <div class="text-danger">{{ $errors->first('nama')}}</div>
                        @endif
                    </div>
                    
                </div>
                <hr>
                <br>
                <div class="row form-group">
                    <div class="col-6">
                        <select name="jabatan_id" class="custom-select mt-3">
                            <option value="" selected>Unit</option>
                            @foreach ($KodeBagans as $jabatan)
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
                            <option value="" selected>Kode Bagan</option>
                            @foreach ($unit as $units)
                                @if ($button == 'Update')
                                    @if ($units->id === $karyawan->unit_kerja_id)
                                        <option value="{{ $units->id }}" selected>{{ $units->unit_kerja }}</option>
                                    @else
                                        <option value="{{ $units->id }}">{{ $units->unit_kerja }}</option>
                                    @endif
                                @else
                                    <option value="{{ $units->id }}">{{ $units->unit_kerja }}</option>
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
                    <div class="col-12">
                        <select name="posisi_id" class="custom-select mt-3">
                            <option value="" selected>Status</option>
                            @foreach ($Setatus as $position)
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
                </div>
                <hr>
                <li class="text-muted menu-title">Masa Penugasan</li>
                  <hr>
                <br>
               {{-- tanggal --}}
                <div class="row form-group">
                    <div class="col-6">
                        <label for="full_name">Kontrak Ke</label>
                        <input type="text" name="kontrak_ke" class="form-control" id="kontrak_ke" placeholder="Kontrak Ke"  value="{{ old('kontrak_ke') ?? $karyawan->kontrak_ke ?? '' }}">
                         @if($errors->has('kontrak_ke'))
                        <div class="text-danger">{{ $errors->first('kontrak_ke')}}</div>
                        @endif
                    </div>
                    <div class="col-6">
                        <select name="pangkat_id" class="custom-select mt-3">
                            <option value="" selected>Nomor Sp</option>
                            @foreach ($NomorSp as $pangkat)
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
                {{-- /tanggal --}}
                <hr>
                <br>
                <div class="row form-group">
                    <div class="col-6">
                        <label for="tanggal_mpp">Tanggal Sp</label>
                        <input type="text" name="tanggalSp" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-tanggalSp" value="{{ old('tanggalSp') ?? $karyawan->tanggalSp ?? '' }}">
                        @if($errors->has('tanggalSp'))
                        <div class="text-danger">{{ $errors->first('tanggalSp')}}</div>
                        @endif
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="md md-event-note"></i></span>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="tanggal_pensiun">Tanggal Mulai</label>
                        <input type="text" name="mulai" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-mulai" value="{{ old('mulai') ?? $karyawan->mulai ?? '' }}">
                        @if($errors->has('mulai'))
                        <div class="text-danger">{{ $errors->first('mulai')}}</div>
                        @endif
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="md md-event-note"></i></span>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                        <div class="col-6">
                            <label for="tanggal_pensiun">Tanggal Berakhir</label>
                            <input type="text" name="berakhir" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-berakhir" value="{{ old('berakhir') ?? $karyawan->berakhir ?? '' }}">
                            @if($errors->has('berakhir'))
                            <div class="text-danger">{{ $errors->first('berakhir')}}</div>
                            @endif
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="md md-event-note"></i></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="control-label " for="brithplace">Sebelum Adendum</label>
                            <div class="">
                                <input id="sebelum_adendum" name="sebelum_adendum" type="text" placeholder="masukan sebelum_adendum" class="required form-control" value="{{ old('sebelum_adendum') ?? $karyawan->sebelum_adendum ?? '' }}">
                                @if($errors->has('sebelum_adendum'))
                            <div class="text-danger">{{ $errors->first('sebelum_adendum')}}</div>
                            @endif
                            </div>
                        </div>
                </div>    
                
                <hr>
                <br>
                <div class="row form-group">
                    <div class="col-6">
                        <label class="control-label " for="brithplace">Masa Jeda</label>
                        <div class="">
                            <input id="masa_jeda" name="masa_jeda" type="text" placeholder="masukan masa_jeda" class="required form-control" value="{{ old('masa_jeda') ?? $karyawan->masa_jeda ?? '' }}">
                            @if($errors->has('masa_jeda'))
                        <div class="text-danger">{{ $errors->first('masa_jeda')}}</div>
                        @endif
                        </div>
                    </div>
                </div>
            <button class="btn btn-primary" type="submit">{{ $button }}</button>
              </form>
        </div>
    </div>
</div> <!-- end row -->
    
@endsection