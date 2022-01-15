/**
 * Theme: Ubold Dashboard
 * Author: Coderthemes
 * Chart c3 page
 */

!function($) {
    "use strict";

    var ChartC3 = function() {};

    ChartC3.prototype.init = function () {
            //Chart Dashboard 
            c3.generate({
                bindto: '#chart',
                data: {
                    columns: [
                        ['Junior', 30, 20, 50, 40, 60, 50],
                        ['Senior', 200, 130, 90, 240, 130, 220],
                        ['Kepala', 300, 200, 160, 400, 250, 250]
                    ],
                    type: 'bar',
                    colors: {
                        Junior: '#ebeff2',
                        Senior: '#7e57c2',
                        Kepala: '#34d3eb'
                    }
    
                }
            });

        //generating chart 
        c3.generate({
            bindto: '#chart-pegawai',
            data: {
                columns: [
                    // ['Asistan', 30, 20, 50, 40, 60, 50],
                    ['Junior', 200, 130, 90],
                    // ['OP I', 300, 200, 160, 400, 250, 250],
                    // ['OP II', 30, 20, 50, 40, 60, 50],
                    // ['OP III', 200, 130, 90, 240, 130, 220],
                    // ['OP IV', 300, 200, 160, 400, 250, 250],
                    ['kepala', 30, 20, 50],
                    ['Senior', 200, 130, 90],
                    // ['Petugas', 300, 200, 160, 400, 250, 250]
                ],
                type: 'bar',
                colors: {
                    Senior: '#ebeff2',
                    Junior: '#7e57c2',
                    kepala: '#34d3eb'
                }

            }
        });

         //Donut Chart
         c3.generate({
            bindto: '#donut-chart',
            data: {
                columns: [
                    ['data1', 46],
                    ['data2', 24],
                    ['data3', 30]
                ],
                type : 'donut'
            },
            donut: {
                title: "Top Categories:",
                width: 15,
                label: {
                    show:false
                }
            },
            color: {
                pattern: ['#7e57c2', '#34d3eb', "#ebeff2"]
            }
        });

        //Pie Chart
        c3.generate({
            bindto: '#pie-chart',
            data: {
                columns: [
                    ['Lulu', 46],
                    ['Olaf', 24],
                    ['Item 3', 30]
                ],
                type : 'pie'
            },
            color: {
                pattern: ['#7e57c2', '#34d3eb', "#ebeff2"]
            },
            pie: {
                label: {
                    show: false
                }
            }
        });

    },
        $.ChartC3 = new ChartC3, $.ChartC3.Constructor = ChartC3

}(window.jQuery),

//initializing
    function($) {
        "use strict";
        $.ChartC3.init()
    }(window.jQuery);


