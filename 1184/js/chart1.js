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
    var chart1 = new CanvasJS.Chart("chartContainer1",
            {
                animationEnabled: true,
                data: [
                    {
                        dataPoints: [
                            {label: "USA"},
                            {label: "Russia"},
                            {label: "China"},
                            {label: "India"},
                            {label: "Australia"},
                            {label: "SA"}

                        ]
                    }, {
                        dataPoints: [
                            {y: 135305, label: "USA"},
                            {y: 107922, label: "Russia"},
                            {y: 52300, label: "China"},
                            {y: 3360, label: "India"},
                            {y: 39900, label: "Australia"},
                            {y: 0, label: "SA"}

                        ]
                    }
                ]
                ,
                legend: {
                    cursor: "pointer",
                    itemclick: function (e) {
                        if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                            e.dataSeries.visible = false;
                        } else
                        {
                            e.dataSeries.visible = true;
                        }
                        chart.render();
                    }
                }
            });

    var chart2 = new CanvasJS.Chart("chartContainer2",
            {
                animationEnabled: true,
                data: [
                    {
                        dataPoints: [
                            {label: "USA"},
                            {label: "Russia"},
                            {label: "China"},
                            {label: "India"},
                            {label: "Australia"},
                            {label: "SA"}

                        ]
                    }, {
                        dataPoints: [
                            {y: 135305, label: "USA"},
                            {y: 107922, label: "Russia"},
                            {y: 52300, label: "China"},
                            {y: 3360, label: "India"},
                            {y: 39900, label: "Australia"},
                            {y: 0, label: "SA"}

                        ]
                    }
                ]
                ,
                legend: {
                    cursor: "pointer",
                    itemclick: function (e) {
                        if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                            e.dataSeries.visible = false;
                        } else
                        {
                            e.dataSeries.visible = true;
                        }
                        chart.render();
                    }
                }
            });

    var chart3 = new CanvasJS.Chart("chartContainer3",
            {
                animationEnabled: true,
                data: [
                    {
                        dataPoints: [
                            {label: "USA"},
                            {label: "Russia"},
                            {label: "China"},
                            {label: "India"},
                            {label: "Australia"},
                            {label: "SA"}

                        ]
                    }, {
                        dataPoints: [
                            {y: 135305, label: "USA"},
                            {y: 107922, label: "Russia"},
                            {y: 52300, label: "China"},
                            {y: 3360, label: "India"},
                            {y: 39900, label: "Australia"},
                            {y: 0, label: "SA"}

                        ]
                    }
                ]
                ,
                legend: {
                    cursor: "pointer",
                    itemclick: function (e) {
                        if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                            e.dataSeries.visible = false;
                        } else
                        {
                            e.dataSeries.visible = true;
                        }
                        chart.render();
                    }
                }
            });
    var chart4 = new CanvasJS.Chart("chartContainer4",
            {
                animationEnabled: true,
                data: [
                    {
                        dataPoints: [
                            {label: "USA"},
                            {label: "Russia"},
                            {label: "China"},
                            {label: "India"},
                            {label: "Australia"},
                            {label: "SA"}

                        ]
                    }, {
                        dataPoints: [
                            {y: 135305, label: "USA"},
                            {y: 107922, label: "Russia"},
                            {y: 52300, label: "China"},
                            {y: 3360, label: "India"},
                            {y: 39900, label: "Australia"},
                            {y: 0, label: "SA"}

                        ]
                    }
                ]
                ,
                legend: {
                    cursor: "pointer",
                    itemclick: function (e) {
                        if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                            e.dataSeries.visible = false;
                        } else
                        {
                            e.dataSeries.visible = true;
                        }
                        chart.render();
                    }
                }
            });

    chart1.render();
    chart2.render();
    chart3.render();
    chart4.render();
}