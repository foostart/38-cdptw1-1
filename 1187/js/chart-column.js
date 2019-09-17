/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


window.onload = function () {
    var chart = new CanvasJS.Chart("chartColumnContainer",
            {
                title: {
                    text: "Number of Users in Each Room"
                },
                animationEnabled: true,
                axisX: {
                    title: "Rooms"
                },
                axisY: {
                    title: "percentage"
                },
                data: [
                    {
                        type: "stackedColumn100",
                        name: "Boys",
                        showInLegend: "true",
                        dataPoints: [
                            {y: 40, label: "Accountant"},
                            {y: 10, label: "Technical"},
                            {y: 72, label: "Business"},
                            {y: 30, label: "Lecture Hall"},
                            {y: 21, label: "Library"}
                        ]
                    }, {
                        type: "stackedColumn100",
                        name: "Girls",
                        showInLegend: "true",
                        dataPoints: [
                            {y: 20, label: "Accountant"},
                            {y: 14, label: "Technical"},
                            {y: 40, label: "Business"},
                            {y: 43, label: "Lecture Hall"},
                            {y: 17, label: "Library"}
                        ]
                    }

                ]
            });

    chart.render();
}