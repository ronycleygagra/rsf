<?php

$valores11 = "[['distância', 'dBm'],";
 
$handle11 = fopen("potencia_sinal_m_canal11.txt", "r");
if ($handle11) {
	$valores11 .= "[5,".fgets($handle11)."],".
	"[10,".fgets($handle11)."],".
	"[15,".fgets($handle11)."],".
	"[20,".fgets($handle11)."],".
	"[25,".fgets($handle11)."],".
	"[30,".fgets($handle11)."],".
	"[35,".fgets($handle11)."],".
	"[40,".fgets($handle11)."],".
	"]";
} else {
    echo "erro no 11";
} 
fclose($handle11);

?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
		google.charts.load('current', {'packages':['corechart']});
		var options = {
			legend: { position: 'bottom' },
			curveType: 'function',
			pointSize: 5,
			vAxis: {title: "Valor médio da potência recebida (dBm)",ticks: [-94,-90,-80,-70,-60]},
			hAxis: {title: "Distância (m)",ticks: [5, 10, 15, 20, 25, 30, 35, 40]},
			legend: {
				position: 'none'
			}
		};
		
		function drawChart11() {
			options.title = "Canal 11";
			var data = google.visualization.arrayToDataTable(<?php echo $valores11;?>);
			var chart = new google.visualization.LineChart(document.getElementById('curve_chart11'));
			chart.draw(data, options);
		}
		
		google.charts.setOnLoadCallback(drawChart11);
		
    </script>
  </head>
  <style>
		.grafico{
			width: 1200px;
			height: 650px
		}
  </style>
  <body>
    <div id="curve_chart11" class="grafico"></div>
  </body>
</html>