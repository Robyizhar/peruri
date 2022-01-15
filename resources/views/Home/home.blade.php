@extends('layouts.app')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Dashboard</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            </ol>
            {{-- card --}}
            <div class="row">    
                <div class="col-md-4">
                    <div class="widget-bg-color-icon card-box fadeInDown animated">
                        <div class="pull-left">
                            <i><img src="{{asset('assets/images/organik.png')}}" width="100px"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-dark"><b class="counter">{{$count_karyawan}}</b></h3>
                            <p class="text-muted mb-0">Total Organik</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="col-md-4 ">
                    <div class="widget-bg-color-icon card-box ">
                        <div class="pull-left">
                            <i><img src="{{asset('assets/images/pkwt.png')}}" width="100px"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-dark"><b class="counter">946</b></h3>
                            <p class="text-muted mb-0">Total PKWT</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="col-md-4 ">
                    <div class="widget-bg-color-icon card-box">
                        <div class="pull-left">
                            <i><img src="{{asset('assets/images/pegawai.png')}}" width="100px"></i>
                        </div>
                        <div class="text-right">
                            <h3 class="text-dark"><b class="counter">{{$count_pensiun}}</b></h3>
                            <p class="text-muted mb-0">Total pensiun</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            {{-- /card --}}

            {{-- grafich --}}

            <div class="row mb-3">
                <div class="col-md-8">
                    
                    <div id="gradeKaryawan" style="height: 300px; width: 100%;"></div>
                </div>

                <div class="col-md-4">
                    
                    <div id="persentasiPkwtOrganik" style="height: 300px; width: 100%;"></div>
                </div>
            </div>
           
        <div class="row">
            <div class="col-lg-8">
                <div class="card-box">
                    <h4 class="m-t-0 header-title  d-flex justify-content-center"><b>Jumlah Pensiun </b></h4>

                    <canvas id="dashboard" height="300"></canvas>
                </div>
            </div>
            {{-- /grafich --}}

            <div class="col-lg-4">
                <div class="card-box">
                    <h6 class="d-flex justify-content-center">Karyawan Yang akan pensiun </h6>
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="d-flex justify-content-center">Tahun Pensiun</th>
                            <th>Jumlah</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        <tr>
                            <td>2020</td>
                            <td>65</td>
                        </tr>
                        <tr>
                            <td>2022</td>
                            <td>58</td>
                        </tr>
                        <tr>
                            <td>2023</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td>2024</td>
                            <td>82</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
         </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="card-box">
                    <h4 class="m-t-0 header-title class="d-flex justify-content-center""><b>Grafik Pangkat</b></h4>

                    <canvas id="pangkat" height="300"></canvas>
                </div>
            </div>  
            <div class="col-lg-4">
                <div class="card-box">
                    <h6 class="">Data Pangkat </h6>
                    
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="d-flex justify-content-center">Pangkat</th>
                            <th class="">Jumlah karyawan</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($pangkats as $item)
                            <tr>
                                <td>{{ $item->nama_pangkat }}</td>
                                <td>{{ $label_pangkats['data'][$item->nama_pangkat] }}</td>
                            </tr>
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
 
    console.log('Home');
     //CSRF TOKEN
     $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
    

    var label = '{!! $label_pangkat !!}';
    var objLabel = JSON.parse(label);
    var newObjLabel = Object.values(objLabel);

    var dataGrafik = '{!! $dataGrafik !!}';
    var objDataGrafik = JSON.parse(dataGrafik);
    var newObjDataGrafik = Object.values(objDataGrafik);

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
     
     //Pie chart KARYAWAN
    
   
            
    //barchart Pensiun
    var barChart = {
                labels: ["2021", "2022", "2023", "2024", "2025"],
                datasets: [
                    {
                        label: "Karyawan Pensiun",
                        backgroundColor: "#7e57c2",
                        borderColor: "#ebeff2",
                        borderWidth: 1,
                        hoverBackgroundColor: "#34d3eb",
                        hoverBorderColor: "#34d3eb",
                        data: [92, 70, 66, 33, 32, 0]
                    }
                ]
            };
    this.respChart($("#dashboard"),'Bar',barChart);






    //barchart Pangkat
    var barChart = {
                labels: newObjLabel,
                datasets: [
                    {
                        label: "Jumlah Pangkat",
                        backgroundColor: "#34d3eb",
                        borderColor: "#ebeff2",
                        borderWidth: 1,
                        hoverBackgroundColor: "#7e57c2" ,
                        hoverBorderColor: "#7e57c2",
                        data: newObjDataGrafik
                    }
                ]
            };
    this.respChart($("#pangkat"),'Bar',barChart);









    
    //Pie chart
    var pieChart = {
                labels: [
                    "Junior",
                    "Middle",
                    "Senior"
                ],
                datasets: [
                    {
                        data: [50, 17, 33],
                        backgroundColor: [
                            "#7e57c2",
                            "#34d3eb",
                            "#ebeff2"
                        ],
                        hoverBackgroundColor: [
                            "#7e57c2",
                            "#34d3eb",
                            "#ebeff2"
                        ],
                        hoverBorderColor: "#fff"
                    }]
            };
            this.respChart($("#pie"),'Pie',pieChart);
    },

    $.ChartJs = new ChartJs, $.ChartJs.Constructor = ChartJs

    
}(window.jQuery),

//initializing
    function($) {
        "use strict";
        $.ChartJs.init()
    }(window.jQuery);



</script>

<SCript>

    window.onload = function () {

var options = {
	// title: {
	// 	text: "Desktop OS Market Share in 2017"
	// },
	// subtitles: [{
	// 	text: "As of November, 2017"
	// }],
	animationEnabled: true,
	data: [{
		type: "pie",
		startAngle: 40,
		toolTipContent: "<b>{label}</b>: {y}%",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - {y}%",
		dataPoints: [
			{ y: 25, label: "Junior" },
			{ y: 38, label: "Midel" },
			{ y: 37, label: "Senior" },
		]
	}]
};
$("#gradeKaryawan").CanvasJSChart(options);

var options = {
	title: {
		text: "PERSENTASI PKWT DAN ORGANIK"
	},

	animationEnabled: true,
	data: [{
		type: "pie",
		startAngle: 40,
		toolTipContent: "<b>{label}</b>: {y}%",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - {y}%",
		dataPoints: [
			{ y: 65, label: "Organik" },
			{ y: 35, label: "PKWT" },
		
		]
	}]
};
$("#persentasiPkwtOrganik").CanvasJSChart(options);

}
</SCript>
@endpush
