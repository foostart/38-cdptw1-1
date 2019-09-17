/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


window.onload = function () {
    var chart5 = new CanvasJS.Chart("chartContainer5",
            {
                animationEnabled: true,
                axisY: {
                    includeZero: false,
                },
                axisX: {
                    valueFormatString: "DD-MMM",
                },
                data: [
                    {
                        type: "rangeArea",
                        yValueFormatString: "#0.## °C",
                        dataPoints: [// Y: [Low, High]
                            {x: new Date(2014, 05, 01), y: [11, 22]},
                            {x: new Date(2014, 05, 02), y: [13, 30]},
                            {x: new Date(2014, 05, 03), y: [13, 28]},
                            {x: new Date(2014, 05, 04), y: [12, 22]},
                            {x: new Date(2014, 05, 05), y: [11, 18]},
                            {x: new Date(2014, 05, 06), y: [09, 25]},
                            {x: new Date(2014, 05, 07), y: [11, 25]},
                            {x: new Date(2014, 05, 08), y: [13, 20]},
                            {x: new Date(2014, 05, 09), y: [13, 26]},
                            {x: new Date(2014, 05, 10), y: [15, 24]},
                            {x: new Date(2014, 05, 11), y: [16, 24]},
                            {x: new Date(2014, 05, 12), y: [17, 27]},
                            {x: new Date(2014, 05, 13), y: [12, 24]},
                            {x: new Date(2014, 05, 14), y: [11, 20]},
                            {x: new Date(2014, 05, 15), y: [10, 21]},
                            {x: new Date(2014, 05, 16), y: [13, 24]},
                            {x: new Date(2014, 05, 17), y: [17, 31]},
                            {x: new Date(2014, 05, 18), y: [17, 26]},
                            {x: new Date(2014, 05, 19), y: [14, 25]},
                            {x: new Date(2014, 05, 20), y: [12, 21]},
                            {x: new Date(2014, 05, 21), y: [16, 23]},
                            {x: new Date(2014, 05, 22), y: [14, 26]},
                            {x: new Date(2014, 05, 23), y: [15, 25]},
                            {x: new Date(2014, 05, 24), y: [17, 29]},
                            {x: new Date(2014, 05, 25), y: [18, 23]},
                            {x: new Date(2014, 05, 26), y: [18, 27]},
                            {x: new Date(2014, 05, 27), y: [16, 28]},
                            {x: new Date(2014, 05, 28), y: [19, 29]},
                            {x: new Date(2014, 05, 29), y: [20, 30]},
                            {x: new Date(2014, 05, 30), y: [22, 31]}
                        ]
                    }
                ]
            });
    chart5.render();
}