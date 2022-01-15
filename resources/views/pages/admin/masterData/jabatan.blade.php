@extends('layouts.app')

@section('content')
 <!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Jabatan</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Jabatan</a></li>
        </ol>
        <div class="row">
            <div class="col-12">
                <div class="btn-group pull-right m-t-15">
                    <a href="{{ url('/'.$url) }}" class="btn btn-default mb-3" id="tombol-tambah">Add Jabatan</a>
                </div>
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title">Data Jabatan</h4>
                    <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Kode Jabatan</th>
                            <th>Nama Jabatan</th>
                            <th>opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data_jabatan as $jabatan)
                            <tr>
                                <td>{{$jabatan->kode_jabatan}}</td>
                                <td>{{$jabatan->nama_jabatan}}</td>
                                <td>
                                    {{-- <a href="javascript:void(0)" data-toggle="tooltip" data-nama="{{ $jabatan->nama_jabatan }}" data-url="jabatan" data-id="{{ $jabatan->id }}" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="ti-pencil-alt"></i></a> --}}
                                    <a href="{{ url('/edit/jabatan/'. $jabatan->id) }}" class="edit btn btn-info btn-sm edit-post"><i class="ti-pencil-alt"></i></a>
                                    <button data-id="{{ $jabatan->id}}" data-title="{{ $jabatan->nama_jabatan}}" data-url="jabatan" class="btn btn-sm btn-danger btn-hapus"data-toggle="modal" data-target="#DeleteModal">
                                        <i class="ti-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('modal.hapus')
@endsection