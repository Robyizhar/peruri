@extends('layouts.app')

@section('content')
 <!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Pangkat</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Pangkat</a></li>
        </ol>
        <div class="row">
            <div class="col-12">
                <div class="btn-group pull-right m-t-15">
                    <a href="{{ url('/'.$url) }}" class="btn btn-default mb-3" id="tombol-tambah">Add Pangkat</a>
                </div>
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title">Data Pangkat</h4>
                    <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pangkat</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>

                        <tbody>
                            <?php $i=1;?>
                            @foreach ($data_pangkat as $pangkat)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$pangkat->nama_pangkat}}</td>
                                <td>
                                    <a href="{{ url('/edit/pangkat/'. $pangkat->id) }}" class="edit btn btn-info btn-sm edit-post"><i class="ti-pencil-alt"></i></a>
                                    <button data-id="{{ $pangkat->id}}" data-title="{{ $pangkat->nama_pangkat}}" data-url="pangkat" class="btn btn-sm btn-danger btn-hapus"data-toggle="modal" data-target="#DeleteModal">
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