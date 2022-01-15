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
                <div class="col-lg-8">

                    <div class="card-box">
                        <h4 class="m-t-0 header-title"><b>Grafik Pangkat</b></h4>

                        <canvas id="pangkat" height="300"></canvas>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card-box table-responsive">
                        <table id="responsive-datatable datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>pangkat</th>
                                    <th>Jumalah Karyawan</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
    
                                <tr>
                                  <td> Staff-3 (9)</td>
                                  <td>65</td>
                                </tr> 

                                <tr>
                                    <td>VP 1 (18)</td>
                                    <td>59</td>
                                  </tr> 

                                  <tr>
                                    <td> Supervisor (13)</td>
                                    <td>80</td>
                                  </tr> 
  
                                  <tr>
                                      <td>Senior VP (20)</td>
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