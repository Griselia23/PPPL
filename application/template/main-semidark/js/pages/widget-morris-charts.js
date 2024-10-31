//[widget morris charts Javascript]

//Project:	EduAdmin - Responsive Admin Template
//Primary use:   Used only for the morris charts


$(function () {
    "use strict";

    
// bar chart
    Morris.Bar({
        element: 'bar-chart',
        data: [{
            y: '2012',
            a: 105,
            b: 95,
            c: 65
        }, {
            y: '2013',
            a: 80,
            b: 70,
            c: 45
        }, {
            y: '2014',
            a: 55,
            b: 45,
            c: 35
        }, {
            y: '2015',
            a: 80,
            b: 70,
            c: 45
        }, {
            y: '2016',
            a: 55,
            b: 45,
            c: 35
        }, {
            y: '2017',
            a: 80,
            b: 70,
            c: 45
        }, {
            y: '2018',
            a: 105,
            b: 95,
            c: 45
        }],
        xkey: 'y',
        ykeys: ['a', 'b', 'c'],
        labels: ['A', 'B', 'C'],
        barColors:['#ff4c52', '#faa700', '#0bb2d4'],
        hideHover: 'auto',
        gridLineColor: '#eef0f2',
        resize: true
    });
    Morris.Bar({
        element: 'bar-chart',
        data: [{
            y: '2012',
            a: 105,
            b: 95,
            c: 65,
            d: 80 // Line chart data
        }, {
            y: '2013',
            a: 80,
            b: 70,
            c: 45,
            d: 60 // Line chart data
        }, {
            y: '2014',
            a: 55,
            b: 45,
            c: 35,
            d: 40 // Line chart data
        }, {
            y: '2015',
            a: 80,
            b: 70,
            c: 45,
            d: 60 // Line chart data
        }, {
            y: '2016',
            a: 55,
            b: 45,
            c: 35,
            d: 40 // Line chart data
        }, {
            y: '2017',
            a: 80,
            b: 70,
            c: 45,
            d: 60 // Line chart data
        }, {
            y: '2018',
            a: 105,
            b: 95,
            c: 65,
            d: 80 // Line chart data
        }],
        xkey: 'y',
        ykeys: ['a', 'b', 'c', 'd'], // Including 'd' for the line chart
        labels: ['A', 'B', 'C', 'D'], // Label for the line chart
        barColors: ['#ff4c52', '#faa700', '#0bb2d4'], // Colors for the bars
        lineColors: ['#00ff00'], // Color for the line chart
        hideHover: 'auto',
        gridLineColor: '#eef0f2',
        resize: true,
    
        // Add options to specify which series are bars or lines
        behaveLikeLine: true, // This tells Morris to behave like a line chart
        lineWidth: 2, // Thickness of the line
        yLineType: ['a', 'b', 'c'], // Specifies that a, b, c are bar values
        yBarType: ['d'] // Specifies that 'd' will be rendered as a line
    });
    
    Morris.Bar({
        element: 'bar-chart1',
        data: [{
            y: '2012',
            a: 105,
            b: 95,
            c: 65
        }, {
            y: '2013',
            a: 80,
            b: 70,
            c: 45
        }, {
            y: '2014',
            a: 55,
            b: 45,
            c: 35
        }, {
            y: '2015',
            a: 80,
            b: 70,
            c: 45
        }, {
            y: '2016',
            a: 55,
            b: 45,
            c: 35
        }, {
            y: '2017',
            a: 80,
            b: 70,
            c: 45
        }, {
            y: '2018',
            a: 105,
            b: 95,
            c: 45
        }],
        xkey: 'y',
        ykeys: ['a', 'b', 'c'],
        labels: ['A', 'B', 'C'],
        barColors:['#ff4c52', '#faa700', '#0bb2d4'],
        hideHover: 'auto',
        gridLineColor: '#eef0f2',
        resize: true
    });
    Morris.Bar({
        element: 'bar-chart2',
        data: [{
            y: '2012',
            a: 105,
            b: 95,
            c: 65
        }, {
            y: '2013',
            a: 80,
            b: 70,
            c: 45
        }, {
            y: '2014',
            a: 55,
            b: 45,
            c: 35
        }, {
            y: '2015',
            a: 80,
            b: 70,
            c: 45
        }, {
            y: '2016',
            a: 55,
            b: 45,
            c: 35
        }, {
            y: '2017',
            a: 80,
            b: 70,
            c: 45
        }, {
            y: '2018',
            a: 105,
            b: 95,
            c: 45
        }],
        xkey: 'y',
        ykeys: ['a', 'b', 'c'],
        labels: ['A', 'B', 'C'],
        barColors:['#ff4c52', '#faa700', '#0bb2d4'],
        hideHover: 'auto',
        gridLineColor: '#eef0f2',
        resize: true
    });
// area chart

	
	
  });