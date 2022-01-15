@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Karyawan Pkwt</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Karyawan Pkwt</a></li>
        </ol>
        {{-- <div class="alert alert-danger" role="alert">
            This is a danger alert—check it out!
          </div> --}}
        
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Detail Masa Penugasan</b></h4>
                    <form id="basic-form" action="#">
                        <div>
                            <h3>Kontrak ke 1</h3>
                            <section>
                                <div class="form-group clearfix">
                                    <div class="col-lg-12">
                                        <ul class="list-unstyled w-list">
                                            <li><b>Nomor SP :</b> SP-1249/XII/2019 </li>
                                            <br>
                                            <li><b>Tanggal Sp:</b> 12/23/2019</li>
                                            <br>
                                            <li><b>Mulai :</b>12/23/2019</li>
                                            <br>
                                            <li><b>Berakhir :</b>12/31/2020</li>
                                            <br>
                                            <li><b>Sebelum Addendum:</b>-</li>  
                                            <br>
                                            <li><b>Masa Jeda :</b>-</li>  
                                        </ul>
                                    </div>
                                </div>
                            </section>
                            <h3>Kontrak ke 2</h3>
                            <section>
                                <div class="form-group clearfix">
                                    <div class="col-lg-12">
                                        <ul class="list-unstyled w-list">
                                            <li><b>Nomor SP :</b> SP-1249/XII/2019 </li>
                                            <br>
                                            <li><b>Tanggal Sp:</b> 12/23/2019</li>
                                            <br>
                                            <li><b>Mulai :</b>12/23/2019</li>
                                            <br>
                                            <li><b>Berakhir :</b>12/31/2020</li>
                                            <br>
                                            <li><b>Sebelum Addendum:</b>-</li>  
                                            <br>
                                            <li><b>Masa Jeda :</b>-</li>  
                                        </ul>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection