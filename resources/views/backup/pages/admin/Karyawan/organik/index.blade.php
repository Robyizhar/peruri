@extends('layouts.app')

@section('content')

<!-- Page-Title -->
<div class="row">
   
    <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">
        <a href="{{ url('/karyawan/add') }}" class="btn btn-default" id="tombol-tambah">Add Karyawan</a>
        </div>
        <h4 class="page-title">Tabel Karyawan</h4>
        {{-- <h4 class="page-title">{{ $url }}</h4> --}}
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <table id="tabel-karyawan" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <td class="text-center"><strong>NP</strong></td>
                        <td class="text-center" width="10%"><strong>Full Name</strong></td>
                        <td class="text-center"><strong>Tanggal Lahir</strong></td>
                        <td class="text-center"><strong>Tanggal Masuk</strong></td>
                        <td class="text-center"><strong>Tanggal MPP</strong></td>
                        <td class="text-center"><strong>Tanggal Pensiun</strong></td>
                        <td class="text-center"><strong>Jabatan</strong></td>
                        <td class="text-center"><strong>unit kerja</strong></td>
                        <td class="text-center"><strong>posisi</strong></td>
                        <td class="text-center"><strong>pangkat</strong></td>
                        <td class="text-center"><strong>grade</strong></td>
                        <td class="text-center"><strong>T_to_pensiun</strong></td>
                        <td class="text-center"><strong>brithplace</strong></td>
                        <td class="text-center"><strong>TMT</strong></td>
                        <td class="text-center"><strong>level</strong></td>
                        <td class="text-center" width="12%"><strong>Opsi</strong></td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div> <!-- end row -->
@include('modal.hapus')
@endsection
