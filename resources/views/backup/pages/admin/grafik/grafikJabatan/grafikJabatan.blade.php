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
                <div class="col-lg-9">
                    
                    {{-- grafik --}}
                    <div class="card-box">
                        <h4 class="m-t-0 header-title"><b>Grafik Jabatan</b></h4>
            
                        <canvas id="jabatan" height="300"></canvas>
                    </div>
                     {{-- /grafik --}}
                </div>

                <div class="col-lg-3">
                    <div class="card-box table-responsive">
                        <table id="responsive-datatable datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Jabatan</th>    
                                    <td>jumlah Karyawan</td>
                                </tr>
                            </thead>
                            <tbody>
                               <tr>
                                   <td>Auditor Dasar</td>
                                   <td>59</td>
                               </tr>
                               <tr>
                                <td>Auditor Muda</td>
                                <td>80</td>
                            </tr>
                            <tr>
                                <td>Auditor Pertama</td>
                                <td>65</td>
                            </tr>
                            <tr>
                                <td>Auditor Junior 2</td>
                                <td>81</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection