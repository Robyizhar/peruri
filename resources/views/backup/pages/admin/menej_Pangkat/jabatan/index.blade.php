@extends('layouts.app')

@section('content')
 <!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Jabatan</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Jabatan</a></li>
        </ol>
        {{-- <div class="alert alert-danger" role="alert">
            This is a danger alert—check it out!
          </div> --}}
        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    <a href="javascript:void(0)" class="btn btn-primary mb-3" id="tombol-tambah">Add Jabatan</a>
                    <table id="tabel-jabatan" class="table table-bordered">
                        <thead>
                            <tr>
                                <td class="text-center"><strong>Kode Jaabatan</strong></td>
                                <td class="text-center"><strong>Nama Jaabatan</strong></td>
                                <td class="text-center"><strong>level</strong></td>
                                <td class="text-center" width="12%"><strong>Opsi</strong></td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('modal.edit')
@include('modal.hapus')
    
@endsection