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