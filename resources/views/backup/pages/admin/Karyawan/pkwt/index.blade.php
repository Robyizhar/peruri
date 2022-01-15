@extends('layouts.app')

@section('content')
 
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">
        <a href="{{ url('/karyawan/addPkwt') }}" class="btn btn-default" id="tombol-tambah">Add Karyawan</a>
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
                        <td class="text-center" width="10%"><strong>Nama</strong></td>
                        <td class="text-center"><strong>Unit</strong></td>
                        <td class="text-center"><strong>Kode Bagan</strong></td>
                        <td class="text-center"><strong>Setatus</strong></td>

                        {{-- tampilkan di detail --}}

                        {{-- <td class="text-center"><strong>Kontrak Ke</strong></td>
                        <td class="text-center"><strong>Nomor Sp</strong></td>
                        <td class="text-center"><strong>Tanggal Sp</strong></td>
                        <td class="text-center"><strong>Mulai</strong></td>
                        <td class="text-center"><strong>Berakhir</strong></td>
                        <td class="text-center"><strong>Sebelum Adendum</strong></td>
                        <td class="text-center"><strong>Masa Jeda</strong></td> --}}
                        <td class="text-center" width="12%"><strong>Opsi</strong></td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div> <!-- end row -->
@include('modal.hapus')
@endsection
