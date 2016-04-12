(function(graph) {
	'use strict';

	/**
	 * Fires on dom ready
	 */
	graph.onDomReady = function() {
		var options = graph.getOptions()
		options.chart.zoomType = 'x'
		options.title.text = "Temperature"
		options.chart.type = "line"
		options.yAxis.title.text = "Temperature (°C)"
		options.yAxis.min = null
		options.yAxis.max = null
		options.tooltip.valueSuffix = '°C'

		if ($("#chart").length >= 1) {
			graph.render("#chart", "/?sensordata=get", options)
		}
	};

	/**
	 * Render graph on homepage
	 */
	graph.render = function(container, jsonUrl, options) {
		var postdata = {
			'type': '1'
		}

		var call = $.ajax({
			type: 'POST',
			url: jsonUrl,
			data: postdata,
			dataType: 'json',
			beforeSend: function() {
				$(container).html("<div class='loading'></div>");
			}
		})

		call.done(function(request) {
			var result = new Array()
			if (request != null) {
				$.each(request, function(id, station) {
					var data  = new Object()
					data.name = station.name
					data.data = []
					$.each(station.values, function(key, value) {
						data.data.push(value)
					})
					result.push(data)
				})
			}

			options.series = result
			var opt = $.extend({}, graph.getOptions(), options)

			$(container).highcharts(opt)
		})
	}

	/**
	 * Highcharts default options
	 */
	graph.getOptions = function() {
		var options = new Object({
			title: {
				text: "",
				align: "left",
				style: {
					fontSize: "26px",
					fontFamily: "Asap, Trebuchet MS"
				}
			},
			xAxis: {
				type: 'datetime',
				labels: {
					rotation: -45,
					align: 'right',
				},
				title: {
					text: 'Date/Time',
				},
				crosshair: true,
				alternateGridColor: "#f7f7f7"
			},
			tooltip: {
				shared: true,
				valueSuffix: '',
				pointFormat: '<span style="color:{point.color}">\u25CF</span> {series.name}: <b>{point.y:.2f} °C</b><br/>',
			},
			legend: {
				align: 'center',
				verticalAlign: 'bottom',
				layout: 'horizontal',
			},
			yAxis: {
				title: {
					text: ''
				}
			},
			chart: {
				style: {
					fontFamily: 'Trebuchet MS',
				},
				zoomType: 'x',
			},
			plotOptions: {
				series: {
					cropTreshhold: 5000,
					states: {
						hover: {
							enabled: false
						}
					}
				},
				line: {
					turboThreshold: 5000,
					lineWidth: 1
				}
			},
			credits: {
				enabled: false
			}
		});

		return options;
	};
})(window.graph = window.graph || {});
$(document).ready(graph.onDomReady);
