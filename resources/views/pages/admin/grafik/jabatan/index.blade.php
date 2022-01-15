@extends('layouts.app')
@section('content')
    <?php
    // echo "<pre>"; 
    // var_dump($data_jabatan); exit;
    
    ?>
     <!-- Page-Title -->
     <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title"> Grafik Jabatan</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Grafik Jabatan</a></li>
            </ol>

            <div class="row">
                <div class="col-lg-8">
                     <?php
                            foreach ($data_karyawan  as $karyawan) {
                                // echo $key->unit_kerja_id;
                                // echo "<br>";
                            }
                        ?>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilih Unit Kerja</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            @foreach ( $data_unit as $units)
                                @if (!empty($karyawan->unit_kerja_id))
                                        @if ($units->id == $karyawan->unit_kerja_id)
                                            <option value="{{ $units->id }}" selected>{{ $units->unit_kerja }}</option>
                                        @else
                                            <option value="{{ $units->id }}">{{ $units->unit_kerja }}</option>
                                        @endif
                                  
                                    @else
                                        <option value="{{ $units->id }}">{{ $units->unit_kerja }}</option>
                                @endif
                            @endforeach
                            
                        </select>
                    </div>

                    <div class="card-box">
                        <h4 class="m-t-0 header-title"><b>Grafik Jabatan</b></h4>
                        

                        <canvas id="jabatan" height="300"></canvas>
                    </div>
                </div>

               <div class="col-4">
                    <div class="card-box table-responsive">
                        <h4 class="m-t-0 header-title">Total Karyawan</h4>
                        <table id="" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Nama Jabatan</th>
                                <th>Grade Jabatan</th>
                                <th>total Karyawan</th>  
                            </tr>
                            </thead>


                            <tbody>
                                <?php $tmp = null?>
                                @foreach ($data_jabatan as $item)
                                    <tr>
                                        @if ($tmp != $item->nama_jabatan)
                                        <td>{{$item->nama_jabatan}}</td>
                                        <td>{{$item->grade_jabatan}}</td>
                                        <td>{{$counted[$item->id_jabatan]}}</td>  
                                        @endif
                                      <?php $tmp = $item->nama_jabatan?>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
               </div>
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="m-t-0 header-title">Data Karyawan Jabatan</h4>
                        <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>NP</th>
                                <th>Nama</th>
                                <th>tanggal lahir</th>
                                <th>jabatan</th>
                                <th>Job Grade</th>
                                <th>Masa jabatan</th>
                                <th>Tangal Mpp</th>
                                <th>Tanggal Pensiun</th>
                            </tr>
                            </thead>


                            <tbody>
                                    <?php $i=1; $x=0;?>
                                @foreach ($data_karyawan as $karyawan)
                                <tr>
                                   <td>{{$karyawan->np}}</td>
                                   <td>{{$karyawan->full_name}}</td>
                                   <td>{{$karyawan->tanggal_lahir}}</td>
                                   <td>{{$karyawan->nama_jabatan}}</td>
                                   <td> <span class="badge badge-primary">{{$karyawan->grade_jabatan}}</span></td>
                                   <td>
                                       <?php 
                                                $then  = $karyawan->tmt_jabatan;
                                                $then = new DateTime($then);
                                                // print_r($then);exit;
                                                $since = $then->diff($date_now);

                                                $DateendYear = Carbon\Carbon::parse($then)->format('d-M-Y');

                                                
                                            ?>
                                        @if ($since->y > 3)
                                            <b>{{$DateendYear}}</b>  : 
                                            <span class="badge badge-success">{{$since->y}} <b> Tahun</b> {{$since->m}} <b> Bulan</b>  <span class="badge badge-danger">Segera Promosikan</span></span>  
                                            
                                            @elseif($since->y == 0)
                                            {{$DateendYear}} : <span class="badge badge-primary"> Sudah di promosikan</span> 

                                            @elseif($since->y > 0)                               
                                            {{$DateendYear}} : <span class="badge badge-success">{{$since->y}}  <b> Tahun</b> {{$since->m}} <b> Bulan</b></span>  
                                            
                                            @else 
                                                <span class="badge badge-danger">Mohon isi Tmt Jabatan</span> 
                                        @endif
                                   </td>
                                   <td>
                                   {{$array_mpp[$x]}}
                                </td>         
                                <td>{{ $array_pensiun[$x] }}</td>  
                               </tr>
                                     <?php $i++; $x++;?>
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
    <script>

        var label = '{!! $label !!}';
        var objLabel= JSON.parse(label);
        var newObjLabel = Object.values(objLabel);

        var dataGrafik = '{!! $dataGrafik !!}';
        var objdataGrafik = JSON.parse(dataGrafik);
        var newObjdataGrafik = Object.values(objdataGrafik);

!function($) {
    "use strict";
    var ChartJs = function() {};
    ChartJs.prototype.respChart = function(selector,type,data, options) {
        // get selector by context
        var ctx = selector.get(0).getContext("2d");
        // pointing parent container to make chart js inherit its width
        var container = $(selector).parent();

        // enable resizing matter
        $(window).resize( generateChart );

        // this function produce the responsive Chart JS
        function generateChart(){
            
            // make chart width fit with its container
            var ww = selector.attr('width', $(container).width() );
            switch(type){
                case 'Line':
                    new Chart(ctx, {type: 'line', data: data, options: options});
                    break;
                case 'Doughnut':
                    new Chart(ctx, {type: 'doughnut', data: data, options: options});
                    break;
                case 'Pie':
                    new Chart(ctx, {type: 'pie', data: data, options: options});
                    break;
                case 'Bar':
                    new Chart(ctx, {type: 'bar', data: data, options: options});
                    break;
                case 'Radar':
                    new Chart(ctx, {type: 'radar', data: data, options: options});
                    break;
                case 'PolarArea':
                    new Chart(ctx, {data: data, type: 'polarArea', options: options});
                    break;
            }
            // Initiate new chart or Redraw

        };
        // run function - render chart at first load
        generateChart();
    },
    ChartJs.prototype.init = function() {

     //grafik jabatan
            var barChart = {
                labels: newObjLabel,
                datasets: [
                    {
                        label: "Jumlah",
                        backgroundColor: "rgba(126, 87, 194, 0.3)",
                        borderColor: "#7e57c2",
                        borderWidth: 1,
                        hoverBackgroundColor: "rgba(126, 87, 194, 0.6)",
                        hoverBorderColor: "#7e57c2",
                        data: newObjdataGrafik
                    }
                ]
            };
            this.respChart($("#jabatan"), "Bar", barChart);

    },
    $.ChartJs = new ChartJs, $.ChartJs.Constructor = ChartJs
}(window.jQuery),

//initializing
function($) {
    "use strict";
    $.ChartJs.init()
    }(window.jQuery);

    $('select').on('change', function() {
        var unit = this.value;

        var url = '/grafikJabatan/'+unit;

        window.location.href = url;

        // alert("");
        // $.ajax({
        //     url: 'grafikBatang/'+unit,
        //     // url: "{{URL::to('grafikBatang.index')}}/"+ unit,
        //     // data: {unit:},
        //     dataType: "json",
        //     type:"GET",
        //     success: function(data) {
        //     return data;
        //     }
        // });
    });
</script>
@endpush