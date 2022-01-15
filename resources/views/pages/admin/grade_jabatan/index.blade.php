@extends('layouts.app')

@section('content')
 <!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Grade Jabatan</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Grade Jabatan</a></li>
        </ol>
        <div class="row">
            <div class="col-12">
                <div class="btn-group pull-right m-t-15">
                    <a href="{{ url('/'.$url) }}" class="btn btn-default mb-3" id="tombol-tambah">Add Grade Jabatan</a>
                </div>
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title">Data Grade Jabatan</h4>
                    <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Grade Jabatan</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>

                        <tbody>
                            <?php $i=1;?>
                            @foreach ($data_grade_jabatan as $gj)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$gj->grade_jabatan}}</td>
                                <td>
                                    <a href="{{ url('/edit/grade_jabatan/'. $gj->id) }}" class="edit btn btn-info btn-sm edit-post"><i class="ti-pencil-alt"></i></a>
                                    <button data-id="{{ $gj->id}}" data-title="{{ $gj->grade_jabatan}}" data-url="gradejabatan" class="btn btn-sm btn-danger btn-hapus"data-toggle="modal" data-target="#DeleteModal">
                                        <i class="ti-trash"></i>
                                    </button>
                                </td>
                            </tr>  
                            <?php $i++;?> 
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end row -->
    </div>
</div>
@include('modal.hapus')  
@endsection