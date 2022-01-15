@extends('layouts.app')
@section('content')
     <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Grafik Pangkat</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Grafik Pangkat</a></li>
            </ol>
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilih Unit Kerja</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <?php
                            foreach ($karyawans_data as $key) { }  ?>
                            <option value="" selected>Pilih pangkat</option>
                            @foreach ($data_unit as $unit)
                            @if (!empty($karyawan->unit_kerja_id))
                                  @if ($unit->id == $key->unit_kerja_id))
                                    <option value="{{ $unit->id }}" selected>{{ $unit->unit_kerja }}</option>
                                @else
                                    <option value="{{ $unit->id }}">{{ $unit->unit_kerja }}</option>
                                @endif
                            @else 
                                <option value="{{$unit->id}}">{{$unit->unit_kerja}}</option>
                            @endif 
                              
                            @endforeach
                        </select>
                    </div>
                    <div class="card-box">
                        <h4 class="m-t-0 header-title"><b>Grafik Level</b></h4>
                        <canvas id="pangkat" height="300"></canvas>
                    </div>
                </div>
               <div class="col-4">
                    <div class="card-box table-responsive">
                        <h4 class="m-t-0 header-title">Total Karyawan</h4>
                        <table id="" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Nama Pangkat</th>
                                <th>total Karyawan</th>  
                            </tr>
                            </thead>
                            <?php $kosong = null; ?>
                            <tbody>
                                @foreach ($pangkats_karyawan as $pkt)
                                    <tr>
                                        @if ($kosong !=$pkt->nama_pangkat)
                                            <td>{{ $pkt->nama_pangkat }}</td>
                                            <td>{{ $count[$pkt->pangkat_id] }}</td>
                                        @endif
                                    </tr>
                                    <?php $kosong = $pkt->nama_pangkat; ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
               </div>
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="m-t-0 header-title">Data Grafik Pangkat</h4>
                        <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>NP</th>
                                <th>Nama</th>
                                <th>pangkat</th>
                                <th>Grade Pangkat</th>
                                <th>Tanggal Mpp</th>
                                <th>Tanggal Pensiun</th>
                              
                            </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; $x=0;?>
                                @foreach ($karyawans_data as $karyawan)
                                <tr>
                                    <td>{{$karyawan->np}}</td>
                                    <td>{{$karyawan->full_name}}</td>
                                    <td>{{$karyawan->nama_pangkat}}</td>
                                    <td>{{$karyawan->grade_pangkat}}</td>
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
        var ctx = selector.get(0).getContext("2d");
        var container = $(selector).parent();
        $(window).resize( generateChart );
        function generateChart(){
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
        };
        generateChart();
    },
    ChartJs.prototype.init = function() {
            var barChart = {
                labels: newObjLabel,
                datasets: [
                    {
                        label: "Grade Pangkat",
                        backgroundColor: "rgba(126, 87, 194, 0.3)",
                        borderColor: "#7e57c2",
                        borderWidth: 1,
                        hoverBackgroundColor: "rgba(126, 87, 194, 0.6)",
                        hoverBorderColor: "#7e57c2",
                        data: newObjdataGrafik
                    }
                ]
            };
            this.respChart($("#pangkat"), "Bar", barChart);
    },
    $.ChartJs = new ChartJs, $.ChartJs.Constructor = ChartJs
}(window.jQuery),
    function($) {
        "use strict";
        $.ChartJs.init()
    }(window.jQuery);

    $('select').on('change', function() {
        var unit = this.value;
        // alert(unit);
        var url = '/grafikPangkat/'+unit;
        window.location.href = url;
    })
    
</script>
@endpush