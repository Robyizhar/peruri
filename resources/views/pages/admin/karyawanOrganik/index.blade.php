@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Karyawan Organik</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">aryawan Organik</a></li>
           
        </ol>
        <div class="row">
            <div class="col-12">
                  @if(Session::has('success'))
                    <div class="alert alert-success">
                       <b>{{ Session::get('success') }}</b>
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                     @endif
                <div class="btn-group pull-right m-t-15">
                    <a href="{{ url('/karyawan/add') }}" class="btn btn-default mb-3" id="tombol-tambah">Add Karyawan</a>
                </div>
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title">Data Karyawan Organik</h4>
                    <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>NP</th>
                            <th>Full Name</th>
                            <th>Tanggal Lahir</th>
                            <th>Tanggal Masuk</th>
                            <th>Tanggal MPP</th>
                            {{-- <th>1 Tahun Sebelum</th> --}}
                            <th>Tanggal Pensiun</th>
                            <th>Status Pensiun</th>
                            <th>unit kerja</th>
                            <th>Jabatan</th>
                            <th>Level jabatan</th>
                            <th>masa jabatan</th>
                            <th>Grade Jabatan</th>
                            <th>Pangkat</th>
                            <th>Grade Pangkat</th>
                            
                            <th>opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; $x=0;?>
                            @foreach ($data_karyawan as $karyawan)    
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$karyawan->np}}</td>  
                                <td>{{$karyawan->full_name}}</td>
                                {{-- <td>{{ $new_format[$x] }}</td>          --}}
                                <td>{{$karyawan->tanggal_lahir}}</td>
                                <td>{{$karyawan->tanggal_masuk}}</td>  
                                <td>{{ $array_mpp[$x]}}</td>  
                                <td>
                                   {{ $array_pensiun[$x] }}
                                    @if ($oneYears[$x] == $date_now_parse)
                                        <span class="badge badge-danger">
                                            1 Tahun lagi akan pensiun
                                        </span>
                                    @endif
                                </td>
                                {{-- <td>{{ $new_format[$x] }}</td> --}}

                                <td>

                                    <?php if ($array_pensiun[$x] == $date_now_parse) {
                                        $status = 1;
                                    }else{
                                        $status = 0;
                                    } ?>
                                    @if ($status == 1)
                                        <span class="badge badge-danger">Sudah pensiun</span>
                                        @else 
                                        <span class="badge badge-primary">Blum pensiun</span>
                                    @endif    
                                </td>       
       
                                <td>{{$karyawan->unit->unit_kerja}}</td>          
                                <td>{{$karyawan->Jabatan->nama_jabatan}}</td>          
                                <td>{{$karyawan->level->nama_level}}</td>
                                <td> 
                                    <?php 
                                        $then  = $karyawan->tmt_jabatan;
                                        $then = new DateTime($then);
                                        // print_r($then);exit;
                                        $since = $then->diff($date_now);

                                        $DateendYear = Carbon\Carbon::parse($then)->format('d/m/Y');

                                        //  $date_mp = date('d-M-Y', strtotime('-12 months', strtotime($array_pensiun)));
                                    ?>


                                    @if ($since ->y >= 3)
                                     <b>{{$DateendYear}}</b>  : 
                                      <span class="badge badge-success">{{$since->y}} <b> Tahun</b> {{$since->m}} <b> Bulan</b>  <span class="badge badge-danger">Segera Promosikan</span></span>  
                                    @elseif($since->y == 0)
                                     {{$DateendYear}} : <span class="badge badge-primary"> Sudah di promosikan</span> 

                                    @elseif($since->y > 0)                               
                                       {{$DateendYear}} : <span class="badge badge-success">{{$since->y}}  <b> Tahun</b> {{$since->m}} <b> Bulan</b></span>  
                                       
                                    @else 
                                     {{$DateendYear}} : <span class="badge badge-success">{{$since->y}} <b> Tahun</b> {{$since->m}} <b> Bulan</b></span>
                                    @endif
                                  
                                </td>         

                                <td>{{$karyawan->Grade_jabatan->grade_jabatan}}</td>   
                                <td>{{ $karyawan->pangkat != null ? $karyawan->pangkat->nama_pangkat : '' }}</td>          
                                <td>{{$karyawan->grade_pangkat}}</td>  
                                {{-- <td>{{ $date_now_parse }}</td>      --}}
                                <td>
                                    <a href="{{url('karyawan/edit/'.$karyawan->id)}}" data-toggle="tooltip" class="btn btn-info btn-sm"><i class="ti-pencil-alt"></i></a>
                                    <form action="{{url('/karyawan/delete/'.$karyawan->id)}}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" onclick="return confirm('apakah anda ingin menghapus data ini ? ')"class="delete btn btn-danger btn-sm"><i class="ti-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            <?php $i++;$x++;?>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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