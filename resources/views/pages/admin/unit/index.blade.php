@extends('layouts.app')

@section('content')
 <!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Unit Kerja</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Unit Kerja</a></li>
        </ol>
        {{-- <div class="alert alert-danger" role="alert">
            This is a danger alert—check it out!
          </div> --}}
        <div class="row">
            <div class="col-12">
                 <div class="btn-group pull-right m-t-15">
                    <a href="{{ url('/'.$url) }}" class="btn btn-default mb-3" id="tombol-tambah">Add Unit</a>
                </div>
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title">Data Unit</h4>
                    <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>kode Unit</th>
                            <th>Unit Kerja</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>

                        <tbody>
                            <?php $i=1;?>
                            @foreach ($data_unit as $unit)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$unit->kode_unit}}</td>
                                <td>{{$unit->unit_kerja}}</td>
                                <td>
                                    <a href="{{ url('/edit/unit/'. $unit->id) }}" class="edit btn btn-info btn-sm edit-post"><i class="ti-pencil-alt"></i></a>
                                    <button data-id="{{ $unit->id}}" data-title="{{ $unit->unit_kerja}}" data-url="unit" class="btn btn-sm btn-danger btn-hapus"data-toggle="modal" data-target="#DeleteModal">
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