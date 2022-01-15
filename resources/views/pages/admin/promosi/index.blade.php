@extends('layouts.app')

@section('content')
 <!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Promosi Karyawan</h4>
        <ol class="breadcrumb">
            {{-- <li class="breadcrumb-item"><a href="#">Jabatan</a></li> --}}
        </ol>
        {{-- <div class="alert alert-danger" role="alert">
            This is a danger alert—check it out!
          </div> --}}
        <div class="row">
            <div class="col-12">
                 <div class="btn-group pull-right m-t-15">
                    {{-- <a href="{{ url('/promosi/create') }}" class="btn btn-default mb-3" id="tombol-tambah">Add Promosi</a> --}}
                </div>
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title">Data Promosi Karyawan</h4>
                    <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Np</th>
                            <th>nama karyawan</th>
                            <th>Setatus Promosi</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>

                        <tbody>
                            <?php $i=1;?>
                            @foreach ($data_promosi as $promosi)
                                
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$promosi->Karyawan->np}}</td>
                                <td>{{$promosi->nama_karyawan}}</td>
                                <td>
                                    @if ($promosi->status_promosi != 1)
                                        <div class="alert alert-primary" role="alert">
                                            <b>{{'Di Promosikan'}}</b>
                                        </div>

                                        @else 
                                         <div class="alert alert-danger" role="alert">
                                            <b>{{'Tidak Memenuhi Syarat Promosi'}}</b>
                                        </div>
                                    @endif
                                    
                                </td>
                                
                                <td>
                                    <a href="javascript:void(0)" id="detail" data-id="{{$promosi->id}}" class="btn btn-info btn-sm btn-show"><i class="ti-info-alt" data-id="{{$promosi->id}}"></i> Detail</a>
                                     {{-- <button  name="delete" class="delete btn btn-danger btn-sm"><i class="ti-trash"></i></a>  --}}
                                </td>
                            </tr>
                            <?php $i++?>
                            @endforeach
                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end row -->
    </div>
</div>
    
{{-- modal detail --}}

      <!-- Modal -->
            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Detail Karyawan Promosi</h5>
                  
                </div>
                <div class="modal-body">
                    <table class="table table-hover">
                   
                    <tbody>
                        <tr>
                        <td>1</td>
                        <td>Nama Karyawan : </td>
                        <td id="nama"></td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Nilai NKI : </td>
                        <td id="nilaiNki"></td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Jenis Cuti : </td>
                        <td id="cuti"></td>
                        <td id="nilai_ijin"></td>
                        </tr>

                        <tr>
                            <td scope="row">4</td>
                            <td>Sertifikasi LSP : </td>
                            <td id="sertifikasi"></td>
                            <td id="no"></td>
                        </tr>
                        <tr>
                            <td scope="row">5</td>
                            <td>Persentase : </td>
                            <td id="persentase"> </td>
                        </tr>
                    </tbody>
                </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div> 

{{-- /modal detail --}}

@endsection

@push('addon-script')
    <script>
       $("body").on("click", ".btn-show", function(event) {
           var id = $(this).data('id');
           var url ='promosi/'+id;
           $.ajax({
               url: url,
               type: 'get',
               dataType: "json",
               success: function(data) {
                   $("#modal").modal("show");
                    $('#nama').text(data.nama_karyawan);
                    $('#nilaiNki').text(data.nilai);
                    $('#cuti').text(data.status_ijin);
                    $('#nilai_ijin').text(data.nilai_ijin);
                    $('#sertifikasi').text(data.sertifikasi_lsp);
                    $('#no').text(data.no);
                    $('#persentase').text(data.persentase);
                }
            });

           
        });
    </script>
@endpush