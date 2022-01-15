<script>
    console.log('halo');
     //CSRF TOKEN
     $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    $('select').on('change', function() {
        var unit = this.value;

        var url = '/grafikBatang/'+unit;

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

    
    var label = '{!! $label !!}';
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

    //barchart
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
            data: newObjDataGrafik
        }
    ]
    };
    this.respChart($("#karyawan"),'Bar',barChart);

    },
    $.ChartJs = new ChartJs, $.ChartJs.Constructor = ChartJs
}(window.jQuery),

//initializing
    function($) {
        "use strict";
        $.ChartJs.init()
    }(window.jQuery);
</script>
