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

                    <div class="card-box">
                        <h4 class="m-t-0 header-title"><b>Grafik Level PKWT</b></h4>

                        <canvas id="level-pkwt" height="300"></canvas>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card-box table-responsive">
                        <table id="responsive-datatable datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>level</th>
                                    <th>Jumlah Karyawan</th>    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                </tr>   
                                <tr>
                                    <td></td>
                                </tr>   
                                <tr>
                                    <td></td>
                                </tr>   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection