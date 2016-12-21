<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript">
		window.onload = function () {
			var chart = new CanvasJS.Chart("chartContainer2", {
				title: {
					text: "ยอดขายห้องแต่ละประเภท"
				},
				theme: "theme2",
				animationEnabled: true,
				axisX: {
					valueFormatString: "MMM"
				},
				axisY: {
					valueFormatString: "#0ล้านบาท"
				},
				data: [{
					type: "line",
					dataPoints: [
					{ x: new Date(2012, 01, 1), y: 71, indexLabel: "gain", markerType: "triangle", markerColor: "#6B8E23", markerSize: 12 },
					{ x: new Date(2012, 02, 1), y: 55, indexLabel: "loss", markerType: "cross", markerColor: "tomato", markerSize: 12 },
					{ x: new Date(2012, 03, 1), y: 50, indexLabel: "loss", markerType: "cross", markerColor: "tomato", markerSize: 12 },
					{ x: new Date(2012, 04, 1), y: 65, indexLabel: "gain", markerType: "triangle", markerColor: "#6B8E23", markerSize: 12 },
					{ x: new Date(2012, 05, 1), y: 85, indexLabel: "gain", markerType: "triangle", markerColor: "#6B8E23", markerSize: 12 },
					{ x: new Date(2012, 06, 1), y: 68, indexLabel: "loss", markerType: "cross", markerColor: "tomato", markerSize: 12 },
					{ x: new Date(2012, 07, 1), y: 28, indexLabel: "loss", markerType: "cross", markerColor: "tomato", markerSize: 12 },
					{ x: new Date(2012, 08, 1), y: 34, indexLabel: "gain", markerType: "triangle", markerColor: "#6B8E23", markerSize: 12 },
					{ x: new Date(2012, 09, 1), y: 24, indexLabel: "loss", markerType: "cross", markerColor: "tomato", markerSize: 12 }
					]
				}
				]
			});

			chart.render();

			var chart = new CanvasJS.Chart("chartContainer4", {
				zoomEnabled: false,
				animationEnabled: true,
				title: {
					text: "ยอดขายห้องทุกละประเภท"
				},
				axisY2: {
					valueFormatString: "0.0 ล้านบาท",

					maximum: 1.2,
					interval: .2,
					interlacedColor: "#F5F5F5",
					gridColor: "#D7D7D7",
					tickColor: "#D7D7D7"
				},
				theme: "theme2",
				toolTip: {
					shared: true
				},
				legend: {
					verticalAlign: "bottom",
					horizontalAlign: "center",
					fontSize: 15,
					fontFamily: "Lucida Sans Unicode"
				},
				data: [{
					type: "line",
					lineThickness: 3,
					axisYType: "secondary",
					showInLegend: true,
					name: "Superior",
					dataPoints: [
					{ x: new Date(2004, 0), y: 0 },
					{ x: new Date(2005, 0), y: 0.001 },
					{ x: new Date(2006, 0), y: 0.01 },
					{ x: new Date(2007, 0), y: 0.05 },
					{ x: new Date(2008, 0), y: 0.1 },
					{ x: new Date(2009, 0), y: 0.15 },
					{ x: new Date(2010, 0), y: 0.22 },
					{ x: new Date(2011, 0), y: 0.38 },
					{ x: new Date(2012, 0), y: 0.56 },
					{ x: new Date(2013, 0), y: 0.77 },
					{ x: new Date(2014, 0), y: 0.91 },
					{ x: new Date(2015, 0), y: 0.94 }
					]
				},
				{
					type: "line",
					lineThickness: 3,
					showInLegend: true,
					name: "Deluxe",
					axisYType: "secondary",
					dataPoints: [
					{ x: new Date(2004, 00), y: 0.18 },
					{ x: new Date(2005, 00), y: 0.2 },
					{ x: new Date(2006, 0), y: 0.25 },
					{ x: new Date(2007, 0), y: 0.35 },
					{ x: new Date(2008, 0), y: 0.42 },
					{ x: new Date(2009, 0), y: 0.5 },
					{ x: new Date(2010, 0), y: 0.58 },
					{ x: new Date(2011, 0), y: 0.67 },
					{ x: new Date(2012, 0), y: 0.78 },
					{ x: new Date(2013, 0), y: 0.88 },
					{ x: new Date(2014, 0), y: 0.98 },
					{ x: new Date(2015, 0), y: 1.04 }
					]
				},
				{
					type: "line",
					lineThickness: 3,
					showInLegend: true,
					name: "Suite",
					axisYType: "secondary",
					dataPoints: [
					{ x: new Date(2004, 00), y: 0.16 },
					{ x: new Date(2005, 0), y: 0.17 },
					{ x: new Date(2006, 0), y: 0.18 },
					{ x: new Date(2007, 0), y: 0.19 },
					{ x: new Date(2008, 0), y: 0.20 },
					{ x: new Date(2009, 0), y: 0.23 },
					{ x: new Date(2010, 0), y: 0.261 },
					{ x: new Date(2011, 0), y: 0.289 },
					{ x: new Date(2012, 0), y: 0.3 },
					{ x: new Date(2013, 0), y: 0.31 },
					{ x: new Date(2014, 0), y: 0.32 },
					{ x: new Date(2015, 0), y: 0.33 }
					]
				},
				{
					type: "line",
					lineThickness: 3,
					showInLegend: true,
					name: "Family",
					axisYType: "secondary",
					dataPoints: [
					{ x: new Date(2004, 00), y: 0.16 },
					{ x: new Date(2005, 0), y: 0.17 },
					{ x: new Date(2006, 0), y: 0.18 },
					{ x: new Date(2007, 0), y: 0.19 },
					{ x: new Date(2008, 0), y: 0.20 },
					{ x: new Date(2009, 0), y: 0.23 },
					{ x: new Date(2010, 0), y: 0.261 },
					{ x: new Date(2011, 0), y: 0.289 },
					{ x: new Date(2012, 0), y: 0.3 },
					{ x: new Date(2013, 0), y: 0.31 },
					{ x: new Date(2014, 0), y: 0.32 },
					{ x: new Date(2015, 0), y: 0.33 }
					]
				}
				],
				legend: {
					cursor: "pointer",
					itemclick: function (e) {
						if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
							e.dataSeries.visible = false;
						}
						else {
							e.dataSeries.visible = true;
						}
						chart.render();
					}
				}
			});

			chart.render();
		}
	</script>
	<script src="http://angsila.cs.buu.ac.th/~57160284/887240/Project/dist/js/canvasjs.min.js"></script>
	<title>3PAN HOTEL</title>
</head>

<body>
	
	<div id="chartContainer2" style="width: 70%; height: 600px;display: inline-block;"></div>
	<div id="chartContainer4" style="width: 70%; height: 600px;display: inline-block;"></div>
</body>

</html>