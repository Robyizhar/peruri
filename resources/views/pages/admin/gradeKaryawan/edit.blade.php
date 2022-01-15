@extends('layouts.app')

@section('content')
 
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">

        <div class="btn-group pull-right m-t-15">
        <a href="{{ url('gradeKryawan/post') }}" class="btn btn-default" id="tombol-tambah">Kembali</a>
        </div>
        <h4 class="page-title">input Penilaian</h4>
        
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <form method="post" action="/penilaianUpdate/{{$data_penilaian->id}}">      
                @method('patch')
                @csrf  
                <div class="row form-group" hidden>

                    <div class="col-6">
                        <label for="exampleFormControlSelect1">NP</label>
                            <h6 class="color-danger">{{$data_penilaian->Karyawan->np}}</h6>
                             <select class="form-control" id="exampleFormControlSelect1" name="id_karyawan" hidden >
                             <option value="" selected>== Pilih np ==</option>
                                 @foreach ($data_karyawan as $karyawan)
                                    <option value="{{$karyawan->id }}"
                                        @if ($karyawan->id == $data_penilaian->id_karyawan)
                                            selected
                                        @endif
                                    >{{$karyawan->np}}</option>
                                 @endforeach  
                             </select>
                         @if($errors->has('id_karyawan'))
                        <div class="text-danger">{{ $errors->first('id_karyawan')}}</div>
                        @endif
                    </div>
                    <div class="col-6">
                        <label for="full_name">Nama Lengkap</label>

                        <input type="text" name="nama_karyawan" class="form-control" id="namaKaryawan" placeholder="Masukan Nilai"  value="{{$data_penilaian->nama_karyawan}}" readonly>
                        
                        @if($errors->has('nama_karyawan'))
                        <div class="text-danger">{{ $errors->first('nama_karyawan')}}</div>
                        @endif
                    </div>

                    <select name="id_unitKerja" id="">
                        <option value="{{$data_penilaian->id_unitKerja}}">{{$data_penilaian->id_unitKerja}}</option>
                    </select>
                    
                </div>

                <div class="row form-group">
                    <div class="col-12">
                        <div class="alert alert-dark" role="alert">
                            <h4 class="alert-heading">NPM : {{$data_penilaian->Karyawan->np}}</h4>
                            <h5>Nama Karyawan : {{$data_penilaian->nama_karyawan}}</h5>
                            <hr>
                            <p class="mb-0">Unit kerja : {{$data_penilaian->Units->unit_kerja}}</p>
                        </div>

                    </div>
                </div>
                <hr>
                <br>
                <div class="row form-group">
                     <div class="col-2">
                        <label for="exampleFormControlSelect1">Tahun NKI</label>
                         <select class="form-control" id="Tahun" name="Tahun">
                        <option value="{{$data_penilaian->Tahun}}" selected>{{$data_penilaian->Tahun}}</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2011">2011</option>
                        </select>
                         @if($errors->has('Tahun'))
                        <div class="text-danger">{{ $errors->first('Tahun')}}</div>
                        @endif
                    </div>

                    <div class="col-4">
                          
                       <label for="exampleFormControlSelect1">Nilai NKI</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="nilai">
                            <option value="{{$data_penilaian ->nilai}}">{{$data_penilaian ->nilai}}</option>
                            <option value="P1">P1</option>
                            <option value="P2">P2</option>
                            <option value="P3">P3</option>
                            <option value="P4">P4</option>
                            <option value="P5">P5</option>    
                        </select>
                         @if($errors->has('nilai'))
                        <div class="text-danger">{{ $errors->first('nilai')}}</div>
                        @endif
                    </div>

                    <div class="col-2">
                       <label for="exampleFormControlSelect1">Jenis Ijin</label>
                       <select class="form-control" id="exampleFormControlSelect1" name="status_ijin">
                           <option value="{{$data_penilaian->status_ijin}}">{{$data_penilaian->status_ijin}}</option>
                           <option value="Cuti Dokter">Cuti Dokter</option>
                           <option value="Rawat Inap">Rawat Inap</option>
                          
                       </select>
                        @if($errors->has('status_ijin'))
                       <div class="text-danger">{{ $errors->first('status_ijin')}}</div>
                       @endif
                   </div>
                   <div class="col-4">
                         
                       <label for="exampleFormControlSelect1">Jumlah Ijin</label>
                       <input type="text" name="nilai_ijin" class="form-control" id="nilai_ijin" placeholder="Nilai ijin"  value="{{$data_penilaian->nilai_ijin}}">
                        @if($errors->has('nilai_ijin'))
                       <div class="text-danger">{{ $errors->first('nilai_ijin')}}</div>
                       @endif
                   </div>

                </div>

                <hr>
                <br>
                <div class="row form-group">
                     <div class="col-6">
                        <label for="exampleFormControlSelect1">Sertifikasi Lsp</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="sertifikasi_lsp">
                            <option value="{{$data_penilaian->sertifikasi_lsp}}">{{$data_penilaian->sertifikasi_lsp}}</option>
                            <option value="">blum tersertifikasi</option>
                            <option value="OP 1">OP 1</option>
                            <option value="OP 2">OP 2</option>
                            <option value="OP 3">OP 3</option>
                            <option value="OP 4">OP 4</option>
                            <option value="Petugas dasar">Petugas dasar</option>
                            <option value="Petugas utam">Petugas utama</option>
                            <option value="Kapok">Kapok</option>
                        </select>
                         @if($errors->has('sertifikasi_lsp'))
                        <div class="text-danger">{{ $errors->first('sertifikasi_lsp')}}</div>
                        @endif
                    </div>

                    <div class="col-6">
                          
                        <label for="exampleFormControlSelect1">No</label>
                        <input type="text" name="no" class="form-control" id="no" placeholder="No Sertifikasi "  value="{{$data_penilaian->no}}">
                         @if($errors->has('no'))
                        <div class="text-danger">{{ $errors->first('no')}}</div>
                        @endif
                    </div>
                </div>

                 <hr>
                <br>
                <div class="row form-group">
                     <div class="col-2">
                        <label for="exampleFormControlSelect1">Nilai Kedisiplinan</label>
                        <input type="text" name="nilai_kedisiplinan" class="form-control" id="nilai_kedisiplinan" placeholder="Masukan Nilai kedisiplinan"  value="{{$data_penilaian->nilai_kedisiplinan}}">
                         @if($errors->has('nilai_kedisiplinan'))
                        <div class="text-danger">{{ $errors->first('nilai_kedisiplinan')}}</div>
                        @endif
                    </div>
                     <div class="col-4">
                        <label for="exampleFormControlSelect1">Keterangan Hukuman</label>
                        <input type="text" name="keterangan_hukuman" class="form-control" id="nilai_kepatuhan" placeholder="Nilai keterangan hukuman"  value="{{$data_penilaian->keterangan_hukuman}}">
                         @if($errors->has('keterangan_hukuman'))
                        <div class="text-danger">{{ $errors->first('keterangan_hukuman')}}</div>
                        @endif
                    </div>

                    <div class="col-6">
                        <label for="exampleFormControlSelect1">Nilai Kepatuhan</label>
                        <input type="text" name="nilai_kepatuhan" class="form-control" id="nilai_kepatuhan" placeholder="Nilai Kepatuhan"  value="{{$data_penilaian->nilai_kepatuhan}}">
                         @if($errors->has('nilai_kepatuhan'))
                        <div class="text-danger">{{ $errors->first('nilai_kepatuhan')}}</div>
                        @endif
                    </div>
                </div>

                 <hr>
                <br>
                <div class="row form-group">
                     <div class="col-6">
                        <label for="exampleFormControlSelect1">Nilai Siap Kerja</label>
                        <input type="text" name="nilai_sikapKerja" class="form-control" id="nilai_sikapKerja" placeholder="Masukan Nilai siap kerja"  value="{{$data_penilaian->nilai_sikapKerja}}">
                         @if($errors->has('nilai_sikapKerja'))
                        <div class="text-danger">{{ $errors->first('nilai_sikapKerja')}}</div>
                        @endif
                    </div>

                    <div class="col-6">
                        <label for="exampleFormControlSelect1">Nilai Inisiatif</label>
                        <input type="text" name="nilai_inisiatif" class="form-control" id="nilai_inisiatif" placeholder="Nilai inisiatif"  value="{{$data_penilaian->nilai_inisiatif}}">
                         @if($errors->has('nilai_inisiatif'))
                        <div class="text-danger">{{ $errors->first('nilai_inisiatif')}}</div>
                        @endif
                    </div>
                </div>
            <button class="btn btn-primary" type="submit">Update</button>
              </form>
        </div>
    </div>
</div> <!-- end row -->
    
@endsection
@push('addon-script')
    <script>
        $(document).ready(function () {
            $('#id_karyawan').change(function () {
                 var id = $(this).val();
                //  var idu = $(this).val();
            //    alert (id)
               $('#namaKaryawan').find('option').not(':first').remove(); 
               $('#id_unitKerja').find('option').not(':first').remove(); 
               
                $.ajax({
                    url: "{{URL::to('penilaian')}}/"+ id,
                    type: 'get',
                    dataType: 'json',
                    success:function(response){
                       
                        var len = 0;
                       
                        if (response.data != null) {
                            len = response.data.length;  
                        }

                        if (len > 0) {
                            for (var i = 0; i<len; i++) {
                                var id = response.data[i].id;
                                var name = response.data[i].full_name;
                                var unitId = response.data[i].unit_kerja_id;
                                var unit = response.data[i].unit_kerja;
                               
                                
                                var option = "<option value='"+name+"' selected>"+name+"</option>"
                                $("#namaKaryawan").append(option);
                                var option = "<option value='"+unitId+"' selected>"+unit+"</option>"
                                $("#id_unitKerja").append(option);
                               
                                
                            }
                        }
                    }

                })

            }) 
        });
    </script>
@endpush