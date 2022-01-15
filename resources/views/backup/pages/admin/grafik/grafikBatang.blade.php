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
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Select</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option value="" selected>Pilih pangkat</option>
                            @foreach ($unit as $units)
                            <option value="{{ $units->id }}" selected>{{ $units->unit_kerja }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="card-box">
                        <h4 class="m-t-0 header-title"><b>Bar Chart</b></h4>
                        <p class="text-muted m-b-15 font-13">A bar chart is a way of showing data as bars.
                            It is sometimes used to show trend data, and the comparison of multiple data sets side by side.
                        </p>

                        <canvas id="karyawan" height="300"></canvas>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card-box table-responsive">
                        <table id="responsive-datatable datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Np</th>
                                    <th>Full Name</th>
                                    <th>Level</th>
                                    <th>Tanggal Pensiun</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data_karyawan as $karyawan)
                                <tr>
                                    <td>{{$karyawan->np}}</td>
                                    <td>{{$karyawan->full_name}}</td>
                                    <td>{{$karyawan->level->posisi_jabatan}}</td>
                                    <td>{{$karyawan->tanggal_pensiun}}</td>
                                </tr>    
                                @endforeach     
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection