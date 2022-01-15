@extends('layouts.app')

@section('content')
 <!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Unit Kerja</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Unit Kerja</a></li>
        </ol>
        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    <a href="javascript:void(0)" class="btn btn-primary mb-3" id="tombol-tambah">Add Unit Kerja</a>
                    <table id="tabel-unit" class="table table-bordered">
                        <thead>
                            <tr>
                                
                                <td class="text-center"><strong>Kode Unit</strong></td>
                                <td class="text-center"><strong>Nama Unit Kerja</strong></td>
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