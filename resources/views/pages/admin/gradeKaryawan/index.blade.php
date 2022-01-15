@extends('layouts.app')

@section('content')
 <!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">penilaian Karyawan</h4>
        <ol class="breadcrumb">
            {{-- <li class="breadcrumb-item"><a href="#">Jabatan</a></li> --}}
        </ol>
        {{-- <div class="alert alert-danger" role="alert">
            This is a danger alert—check it out!
          </div> --}}
        <div class="row">
            <div class="col-12">
                 <div class="btn-group pull-right m-t-15">
                    <a href="{{ url('/penilaianKaryawan/create') }}" class="btn btn-default mb-3" id="tombol-tambah">Add penilaian</a>
                </div>
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title">Data penilaian Karyawan</h4>
                    <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Np</th>
                            <th>Nama</th>
                            <th>Sertifikasi Lsp</th>
                            <th>no</th>
                            <th>keterangan</th>
                            <th>Nilai Kedisiplinan</th>
                            <th>Keyword</th>
                            <th>nilai kepatuhan</th>
                            <th>nilai sikap Kerja</th>
                            <th>nilai inisiatif</th>
                            <th>persentase</th>
                            <th>status promosi</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>


                        <tbody>
                            <?php $i=1;?>
                            @foreach ($data_penilaian as $penilaian)
                                
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$penilaian->Karyawan->np}}</td>
                                <td>{{$penilaian->nama_karyawan}}</td>
                                <td>
                                    @if ($penilaian->sertifikasi_lsp == null)
                                        <div class="alert alert-primary" role="alert">
                                            Belum tersertifikasi
                                        </div>
                                    @endif
                                    <div class="alert alert-success" role="alert">
                                         {{$penilaian->sertifikasi_lsp}}
                                    </div>
                                   
                                </td>         
                                <td>{{$penilaian->no}}</td>     
                                <td>{{$penilaian->keterangan_hukuman}}</td>    
                                <td>
                                    @if ($penilaian->nilai_kedisiplinan >= 96 && $penilaian->nilai_kedisiplinan <= 130)
                                        <div class="alert alert-success" role="alert">
                                            {{$penilaian->nilai_kedisiplinan}}
                                        </div>
                                    @else
                                        @if ($penilaian->nilai_kedisiplinan >= 91 && $penilaian->nilai_kedisiplinan <= 95)
                                           <div class="alert alert-info" role="alert">
                                                {{$penilaian->nilai_kedisiplinan}}
                                            </div>
                                        @else
                                            @if ($penilaian->nilai_kedisiplinan >= 81 && $penilaian->nilai_kedisiplinan <= 90)
                                                <div class="alert alert-warning" role="alert">
                                                    {{$penilaian->nilai_kedisiplinan}}
                                                </div>  
                                            @else
                                                <div class="alert alert-danger" role="alert">
                                                        {{$penilaian->nilai_kedisiplinan}}
                                                </div>
                                            @endif
                                        @endif
                                    @endif
                                    {{-- {{$penilaian->nilai_kedisiplinan}} --}}
                                
                                </td>
                                <td>
                                    @if ($penilaian->keyword == '-')
                                        <div class="label label-primary" role="alert">
                                            {{$penilaian->keyword.'--'}}
                                        </div>
                                    @else
                                        @if ($penilaian->keyword == 'Ringan')
                                            <div class="alert alert-info" role="alert">
                                               <b class="text-dark">{{$penilaian->keyword}}</b> 
                                            </div>  
                                        @else
                                            @if ($penilaian->keyword == 'Sedang')
                                                 <div class="alert alert-warning" role="alert">
                                                    <b class="text-dark">{{$penilaian->keyword}}</b>
                                                </div> 
                                            @else 
                                                 <div class="alert alert-danger" role="alert">
                                                        <b class="text-dark">{{$penilaian->keyword}}</b>
                                                </div>
                                            @endif
                                        @endif   
                                    @endif
                                </td>
                                <td>
                                    <div class="alert alert-dark" role="alert">
                                        <b>{{$penilaian->nilai_kepatuhan}}</b>
                                    </div>
                                        
                                </td>
                                <td>
                                    <div class="alert alert-dark" role="alert">
                                        <b>{{$penilaian->nilai_sikapKerja}}</b>
                                    </div>
                                </td>
                                <td>
                                    <div class="alert alert-secondary" role="alert">
                                        <b>{{$penilaian->nilai_inisiatif}}</b>
                                    </div>
                                    
                                </td>
                                    <td>
                                        @if ($penilaian->persentase > 60)
                                            <div class="alert alert-success" role="alert">
                                               <b class="text-primary">{{$penilaian->persentase.'%'}}</b> 
                                            </div>
                                        @else
                                            <div class="alert alert-danger" role="alert">
                                                {{$penilaian->persentase.'%'}}
                                            </div>
                                        @endif
                                    </td>
                                <td>
                                    @if ($penilaian->status_promosi == 0)
                                    <div class="alert alert-primary" role="alert">
                                        {{'Di Promosikan '}}   
                                    </div>
                                    @else
                                    <div class="alert alert-danger" role="alert">
                                        {{'blum bisa di promosikan'}} 
                                    </div>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{url('penilaianKaryawan/edit/'.$penilaian->id)}}" data-toggle="tooltip" class="btn btn-info btn-sm"><i class="ti-pencil-alt"></i></a>
                                    <form action="{{url('penilaianKaryawan/'.$penilaian->id)}}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" onclick="return confirm('apakah anda ingin menghapus data ini ? ')"class="delete btn btn-danger btn-sm"><i class="ti-trash"></i></button>
                                </form>
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
@push('addon-script')
     <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();
            $('#responsive-datatable').DataTable();
        } );
    </script>
@endpush
