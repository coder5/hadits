<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Chart Test</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="Haidar Mar'ie">
<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo site_url()?>assets/js/highcharts.js" ></script>
<script type="text/javascript" src="<?php echo site_url()?>assets/js/themes/gray.js"></script>
<script type="text/javascript">
$(function () {
	var chart;
	$(document).ready(function() {
		var options = {
				chart: {
					renderTo: 'container2',
	                plotBackgroundColor: null,
	                plotBorderWidth: null,
	                plotShadow: false
	            },
	            title: {
	                text: 'Browser market shares at a specific website, 2010'
	            },
	            tooltip: {
// 	        	    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
	            	pointFormat: '{series.name}: <b>{point.y}</b><br/>',
	                valueSuffix: ' hadits',
	                shared: true
	            },
	            plotOptions: {
	                pie: {
	                    allowPointSelect: true,
	                    cursor: 'pointer',
	                    dataLabels: {
	                        enabled: false
	                    },
	                    showInLegend: true
	                }
	            },
	            series: [{
	                type: 'pie',
	                name: 'Browser share',
// 	                data: [
// 	                    ['Firefox',   45.0],
// 	                    ['IE',       26.8],
// 	                    {
// 	                        name: 'Chrome',
// 	                        y: 12.8,
// 	                        sliced: true,
// 	                        selected: true
// 	                    },
// 	                    ['Safari',    8.5],
// 	                    ['Opera',     6.2],
// 	                    ['Others',   0.7]
// 	                ]
	            }]
		}
        jQuery.get('<?php echo site_url()?>charts/data_count', null, function(tsv) {
			var lines = [];
			traffic = [];
			try {
				// split the data return into lines and parse them
				tsv = tsv.split(/\n/g);
				jQuery.each(tsv, function(i, line) {
					line = line.split(/\t/);
					traffic.push([
						line[0],
						parseInt(line[1].replace(',', ''), 10)
					]);
				});
			} catch (e) {  }
			options.series[0].data = traffic;
			chart = new Highcharts.Chart(options);
		});
    });
});
</script>
</head>

<body>
<div id="container2" style="width: 100%; height: 400px; margin: 0 auto"></div>
</body>
</html>