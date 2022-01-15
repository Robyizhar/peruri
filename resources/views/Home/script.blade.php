<script>
 
    console.log('Home pak');
     //CSRF TOKEN
     $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
    

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
     var pieChart = {
                labels: [
                    "Organik",
                    "Pkwt",
                   
                ],
                datasets: [
                    {
                        data: [50, 17],
                        backgroundColor: [
                            "#7e57c2",
                            "#34d3eb",
                            
                        ],
                        hoverBackgroundColor: [
                            "#7e57c2",
                            "#34d3eb",
                           
                        ],
                        hoverBorderColor: "#fff"
                    }]
            };
            this.respChart($("#karyawan"),'Pie',pieChart);
   
            
    //barchart Pensiun
    var barChart = {
                labels: ["2020", "2021", "2023", "2024", "2025", "2026", "2027"],
                datasets: [
                    {
                        label: "Karyawan Pensiun",
                        backgroundColor: "#7e57c2",
                        borderColor: "#ebeff2",
                        borderWidth: 1,
                        hoverBackgroundColor: "#34d3eb",
                        hoverBorderColor: "#34d3eb",
                        data: [65, 59, 80, 81, 56, 55, 40,20]
                    }
                ]
            };
    this.respChart($("#dashboard"),'Bar',barChart);




    //barchart Pangkat
    var barChart = {
                labels: ["A", "B", "C", "D","E"],
                datasets: [
                    {
                        label: "Pangkat",
                        backgroundColor: "#34d3eb",
                        borderColor: "#ebeff2",
                        borderWidth: 1,
                        hoverBackgroundColor: "#7e57c2" ,
                        hoverBorderColor: "#7e57c2",
                        data: [65, 59, 80, 81, 55, 40]
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