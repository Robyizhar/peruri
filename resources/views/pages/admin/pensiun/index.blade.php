@extends('layouts.app')

@section('title')
    pensiun
@endsection


@section('content')
 <!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Karyawan Pensiun</h4>
        <ol class="breadcrumb">
            {{-- <li class="breadcrumb-item"><a href="#">Jabatan</a></li> --}}
        </ol>
        {{-- <div class="alert alert-danger" role="alert">
            This is a danger alert—check it out!
          </div> --}}
        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title">Data Karyawan Pensiun</h4>
                    <button class="btn btn-primary mb-3" type="button">Kurang dari 3 Bulan</button> 
                    <button class="btn btn-info mb-3" type="button">Kurang dari 1 Tahun</button>
                    <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Unit kerja</th>
                            <th>Jabatan</th>
                            <th>Pangkat</th>
                            <th>Tahun Pensiun</th>
                            <th>Status Karyawan</th>
                        </tr>
                        </thead>


                        <tbody>
                            <?php $i=1;?>
                            @foreach ($data_pensiun as $item)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$item->full_name}}</td>
                                <td>{{$item->unit->unit_kerja}}</td> 
                                <td>{{$item->pangkat->nama_pangkat}}</td>
                                <td>{{$item->jabatan->nama_jabatan}}</td>
                                <td>{{$item->tanggal_pensiun}}</td>
                                <td>
                                    @if ($item->status_pensiun == 1)
                                        <span class="badge badge-danger">Sudah Pensiun</span>
                                    @endif
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
@endsection