@extends('layouts.app')

@section('content')
 <!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Level</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Level</a></li>
        </ol>
        <div class="row">
            <div class="col-12">
                <div class="btn-group pull-right m-t-15">
                    <a href="{{ route('add/level.create') }}" class="btn btn-default mb-3" id="tombol-tambah">Add Level</a>
                </div>
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title">Data Level</h4>
                    <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Level</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>

                        <tbody>
                            <?php $i=1;?>
                            @foreach ($data_level as $level)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$level->nama_level}}</td>
                                <td>
                                    <a href="{{ url('/edit/level/'. $level->id) }}" class="edit btn btn-info btn-sm edit-post"><i class="ti-pencil-alt"></i></a>
                                    <button data-id="{{ $level->id}}" data-title="{{ $level->nama_level}}" data-url="level" class="btn btn-sm btn-danger btn-hapus"data-toggle="modal" data-target="#DeleteModal">
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
@push('addon-script')
<script type="text/javascript">
    $(document).ready(function() {
        // $('#dataKaryawab').DataTable();
        $('#responsive-datatable').DataTable();
    } );
</script>
@endpush