/*Dashboard4 Init*/
 
"use strict"; 
$(document).ready(function() {
	/*Toaster Alert*/
	$.toast({
		heading: 'Welcome Back!',
		text: '<p>You have successfully completed level 1.</p><button class="btn btn-danger btn-sm mt-10">Play again</button>',
		position: 'top-right',
		loaderBg:'#3a55b1',
		class: 'jq-toast-danger',
		hideAfter: 3500, 
		stack: 6,
		showHideTransition: 'fade'
	});

	/*Owl Carousel*/
	$('#owl_demo_1').owlCarousel({
		items: 1,
		animateOut: 'fadeOut',
		loop: true,
		margin: 10,
		autoplay: true,
		mouseDrag: false,
		dots:false

	});
	if($('#chart_1').length > 0)
		// Line Chart
		Morris.Line({
			// ID of the element in which to draw the chart.
			element: 'chart_1',
			// Chart data records -- each entry in this array corresponds to a point on
			// the chart.
			data: [{
				d: '2012-10-01',
				visits: 802
			}, {
				d: '2012-10-02',
				visits: 783
			}, {
				d: '2012-10-03',
				visits: 820
			}, {
				d: '2012-10-04',
				visits: 839
			}, {
				d: '2012-10-05',
				visits: 792
			}, {
				d: '2012-10-06',
				visits: 859
			}, {
				d: '2012-10-07',
				visits: 790
			}, {
				d: '2012-10-08',
				visits: 1680
			}, {
				d: '2012-10-09',
				visits: 1592
			}, {
				d: '2012-10-10',
				visits: 1420
			}, {
				d: '2012-10-11',
				visits: 882
			}, {
				d: '2012-10-12',
				visits: 889
			}, {
				d: '2012-10-13',
				visits: 819
			}, {
				d: '2012-10-14',
				visits: 849
			}, {
				d: '2012-10-15',
				visits: 870
			}, {
				d: '2012-10-16',
				visits: 1063
			}, {
				d: '2012-10-17',
				visits: 1192
			}, {
				d: '2012-10-18',
				visits: 1224
			}, {
				d: '2012-10-19',
				visits: 1329
			}, {
				d: '2012-10-20',
				visits: 1329
			}, {
				d: '2012-10-21',
				visits: 1239
			}, {
				d: '2012-10-22',
				visits: 1190
			}, {
				d: '2012-10-23',
				visits: 1312
			}, {
				d: '2012-10-24',
				visits: 1293
			}, {
				d: '2012-10-25',
				visits: 1283
			}, {
				d: '2012-10-26',
				visits: 1248
			}, {
				d: '2012-10-27',
				visits: 1323
			}, {
				d: '2012-10-28',
				visits: 1390
			}, {
				d: '2012-10-29',
				visits: 1420
			}, {
				d: '2012-10-30',
				visits: 1529
			}, {
				d: '2012-10-31',
				visits: 1892
			}, ],
			// The name of the data record attribute that contains x-visitss.
			xkey: 'd',
			// A list of names of data record attributes that contain y-visitss.
			ykeys: ['visits'],
			// Labels for the ykeys -- will be displayed when you hover over the
			// chart.
			labels: ['Visits'],
			// Disables line smoothing
			pointSize: 1,
			pointStrokeColors:['#f83f37'],
			behaveLikeLine: true,
			grid:false,
			gridTextColor:'#878787',
			lineWidth: 2,
			smooth: true,
			hideHover: 'auto',
			lineColors: ['#f83f37'],
			resize: true,
			gridTextFamily:"Poppins"
		});

});

/*****E-Charts function start*****/
var echartsConfig = function() { 
	if( $('#e_chart_1').length > 0 ){
		var eChart_1 = echarts.init(document.getElementById('e_chart_1'));
		var option = {
			tooltip: {
				show: true,
				backgroundColor: '#fff',
				borderRadius:6,
				padding:6,
				axisPointer:{
					lineStyle:{
						width:0,
					}
				},
				textStyle: {
					color: '#324148',
					fontFamily: '"Poppins", sans-serif',
					fontSize: 12
				}	
			},
			series: [
				{
					type: 'pie',
					selectedMode: 'single',
					radius: ['80%', '40%'],
					labelLine: {
						normal: {
							show: false
						}
					},
					color: ['#f83f37', '#fdc5c3'],
					data:[
						{value:435, name:''},
						{value:679, name:''},
					]
				}
			]
		};
		eChart_1.setOption(option);
		eChart_1.resize();
	}
	if( $('#e_chart_2').length > 0 ){
		var eChart_2 = echarts.init(document.getElementById('e_chart_2'));
		//data
		var data = [220, 182, 191, 234, 190, 330, 310];
		var markLineData = [];
		for (var i = 1; i < data.length; i++) {
			markLineData.push([{
				xAxis: i - 1,
				yAxis: data[i - 1],
				value: (data[i] + data[i-1]).toFixed(2)
			}, {
				xAxis: i,
				yAxis: data[i]
			}]);
		}

		//option
		var option2 = {
			color: ['#f83f37','#fdc5c3'],
			tooltip: {
				show: true,
				trigger: 'axis',
				backgroundColor: '#fff',
				borderRadius:6,
				padding:6,
				axisPointer:{
					lineStyle:{
						width:0,
					}
				},
				textStyle: {
					color: '#324148',
					fontFamily: '"Poppins", sans-serif;',
					fontSize: 12
				}	
			},
			
			grid: {
				top: '3%',
				left: '3%',
				right: '3%',
				bottom: '3%',
				containLabel: true
			},
			xAxis : [
				{
					type : 'category',
					data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
					axisLine: {
						show:false
					},
					axisTick: {
						show:false
					},
					axisLabel: {
						textStyle: {
							color: '#6f7a7f'
						}
					}
				}
			],
			yAxis : [
				{
					type : 'value',
					axisLine: {
						show:false
					},
					axisTick: {
						show:false
					},
					axisLabel: {
						textStyle: {
							color: '#6f7a7f'
						}
					},
					splitLine: {
						lineStyle: {
							color: 'transparent',
						}
					}
				}
			],
		   
			series: [
				{
					data:[420, 332, 401, 334, 400, 330, 410],
					type: 'bar',
					barMaxWidth: 30,
				},
				{
					data: [120, 152, 251, 124, 250, 120, 110],
					type: 'bar',
					barMaxWidth: 30,
				}
			]
		};
		eChart_2.setOption(option2);
		eChart_2.resize();
	}
}
/*****E-Charts function end*****/

/*****Resize function start*****/
var echartResize;
$(window).on("resize", function () {
	/*E-Chart Resize*/
	clearTimeout(echartResize);
	echartResize = setTimeout(echartsConfig, 200);
}).resize(); 
/*****Resize function end*****/

/*****Function Call start*****/
echartsConfig();
/*****Function Call end*****/