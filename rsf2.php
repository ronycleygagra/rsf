<?php

$valores11 = $valores12 = $valores13 = $valores14 = $valores15 = $valores16 = $valores17 = $valores18 = $valores19 = "[['distância', 'dBm'],";
$valores20 = $valores21 = $valores22 = $valores23 = $valores24 = $valores25 = $valores26 = $valores11;
 
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

$handle12 = fopen("potencia_sinal_m_canal12.txt", "r");
if ($handle12) {
	$valores12 .= "[5,".fgets($handle12)."],".
	"[10,".fgets($handle12)."],".
	"[15,".fgets($handle12)."],".
	"[20,".fgets($handle12)."],".
	"[25,".fgets($handle12)."],".
	"[30,".fgets($handle12)."],".
	"[35,".fgets($handle12)."],".
	"[40,".fgets($handle12)."],".
	"]";
} else {
    echo "erro no 12";
} 
fclose($handle12);

$handle13 = fopen("potencia_sinal_m_canal13.txt", "r");
if ($handle13) {
	$valores13 .= "[5,".fgets($handle13)."],".
	"[10,".fgets($handle13)."],".
	"[15,".fgets($handle13)."],".
	"[20,".fgets($handle13)."],".
	"[25,".fgets($handle13)."],".
	"[30,".fgets($handle13)."],".
	"[35,".fgets($handle13)."],".
	"[40,".fgets($handle13)."],".
	"]";
} else {
    echo "erro no 13";
} 
fclose($handle13);

$handle14 = fopen("potencia_sinal_m_canal14.txt", "r");
if ($handle14) {
	$valores14 .= "[5,".fgets($handle14)."],".
	"[10,".fgets($handle14)."],".
	"[15,".fgets($handle14)."],".
	"[20,".fgets($handle14)."],".
	"[25,".fgets($handle14)."],".
	"[30,".fgets($handle14)."],".
	"[35,".fgets($handle14)."],".
	"[40,".fgets($handle14)."],".
	"]";
} else {
    echo "erro no 14";
} 
fclose($handle14);

$handle15 = fopen("potencia_sinal_m_canal15.txt", "r");
if ($handle15) {
	$valores15 .= "[5,".fgets($handle15)."],".
	"[10,".fgets($handle15)."],".
	"[15,".fgets($handle15)."],".
	"[20,".fgets($handle15)."],".
	"[25,".fgets($handle15)."],".
	"[30,".fgets($handle15)."],".
	"[35,".fgets($handle15)."],".
	"[40,".fgets($handle15)."],".
	"]";
} else {
    echo "erro no 15";
} 
fclose($handle15);

$handle16 = fopen("potencia_sinal_m_canal16.txt", "r");
if ($handle16) {
	$valores16 .= "[5,".fgets($handle16)."],".
	"[10,".fgets($handle16)."],".
	"[15,".fgets($handle16)."],".
	"[20,".fgets($handle16)."],".
	"[25,".fgets($handle16)."],".
	"[30,".fgets($handle16)."],".
	"[35,".fgets($handle16)."],".
	"[40,".fgets($handle16)."],".
	"]";
} else {
    echo "erro no 16";
} 
fclose($handle16);

$handle17 = fopen("potencia_sinal_m_canal17.txt", "r");
if ($handle17) {
	$valores17 .= "[5,".fgets($handle17)."],".
	"[10,".fgets($handle17)."],".
	"[15,".fgets($handle17)."],".
	"[20,".fgets($handle17)."],".
	"[25,".fgets($handle17)."],".
	"[30,".fgets($handle17)."],".
	"[35,".fgets($handle17)."],".
	"[40,".fgets($handle17)."],".
	"]";
} else {
    echo "erro no 17";
} 
fclose($handle17);

$handle18 = fopen("potencia_sinal_m_canal18.txt", "r");
if ($handle18) {
	$valores18 .= "[5,".fgets($handle18)."],".
	"[10,".fgets($handle18)."],".
	"[15,".fgets($handle18)."],".
	"[20,".fgets($handle18)."],".
	"[25,".fgets($handle18)."],".
	"[30,".fgets($handle18)."],".
	"[35,".fgets($handle18)."],".
	"[40,".fgets($handle18)."],".
	"]";
} else {
    echo "erro no 18";
} 
fclose($handle18);

$handle19 = fopen("potencia_sinal_m_canal19.txt", "r");
if ($handle19) {
	$valores19 .= "[5,".fgets($handle19)."],".
	"[10,".fgets($handle19)."],".
	"[15,".fgets($handle19)."],".
	"[20,".fgets($handle19)."],".
	"[25,".fgets($handle19)."],".
	"[30,".fgets($handle19)."],".
	"[35,".fgets($handle19)."],".
	"[40,".fgets($handle19)."],".
	"]";
} else {
    echo "erro no 19";
} 
fclose($handle19);

$handle20 = fopen("potencia_sinal_m_canal20.txt", "r");
if ($handle20) {
	$valores20 .= "[5,".fgets($handle20)."],".
	"[10,".fgets($handle20)."],".
	"[15,".fgets($handle20)."],".
	"[20,".fgets($handle20)."],".
	"[25,".fgets($handle20)."],".
	"[30,".fgets($handle20)."],".
	"[35,".fgets($handle20)."],".
	"[40,".fgets($handle20)."],".
	"]";
} else {
    echo "erro no 20";
} 
fclose($handle20);

$handle21 = fopen("potencia_sinal_m_canal21.txt", "r");
if ($handle21) {
	$valores21 .= "[5,".fgets($handle21)."],".
	"[10,".fgets($handle21)."],".
	"[15,".fgets($handle21)."],".
	"[20,".fgets($handle21)."],".
	"[25,".fgets($handle21)."],".
	"[30,".fgets($handle21)."],".
	"[35,".fgets($handle21)."],".
	"[40,".fgets($handle21)."],".
	"]";
} else {
    echo "erro no 21";
} 
fclose($handle21);

$handle22 = fopen("potencia_sinal_m_canal22.txt", "r");
if ($handle22) {
	$valores22 .= "[5,".fgets($handle22)."],".
	"[10,".fgets($handle22)."],".
	"[15,".fgets($handle22)."],".
	"[20,".fgets($handle22)."],".
	"[25,".fgets($handle22)."],".
	"[30,".fgets($handle22)."],".
	"[35,".fgets($handle22)."],".
	"[40,".fgets($handle22)."],".
	"]";
} else {
    echo "erro no 22";
} 
fclose($handle22);

$handle23 = fopen("potencia_sinal_m_canal23.txt", "r");
if ($handle23) {
	$valores23 .= "[5,".fgets($handle23)."],".
	"[10,".fgets($handle23)."],".
	"[15,".fgets($handle23)."],".
	"[20,".fgets($handle23)."],".
	"[25,".fgets($handle23)."],".
	"[30,".fgets($handle23)."],".
	"[35,".fgets($handle23)."],".
	"[40,".fgets($handle23)."],".
	"]";
} else {
    echo "erro no 23";
} 
fclose($handle23);

$handle24 = fopen("potencia_sinal_m_canal24.txt", "r");
if ($handle24) {
	$valores24 .= "[5,".fgets($handle24)."],".
	"[10,".fgets($handle24)."],".
	"[15,".fgets($handle24)."],".
	"[20,".fgets($handle24)."],".
	"[25,".fgets($handle24)."],".
	"[30,".fgets($handle24)."],".
	"[35,".fgets($handle24)."],".
	"[40,".fgets($handle24)."],".
	"]";
} else {
    echo "erro no 24";
} 
fclose($handle24);

$handle25 = fopen("potencia_sinal_m_canal25.txt", "r");
if ($handle25) {
	$valores25 .= "[5,".fgets($handle25)."],".
	"[10,".fgets($handle25)."],".
	"[15,".fgets($handle25)."],".
	"[20,".fgets($handle25)."],".
	"[25,".fgets($handle25)."],".
	"[30,".fgets($handle25)."],".
	"[35,".fgets($handle25)."],".
	"[40,".fgets($handle25)."],".
	"]";
} else {
    echo "erro no 25";
} 
fclose($handle25);

$handle26 = fopen("potencia_sinal_m_canal26.txt", "r");
if ($handle26) {
	$valores26 .= "[5,".fgets($handle26)."],".
	"[10,".fgets($handle26)."],".
	"[15,".fgets($handle26)."],".
	"[20,".fgets($handle26)."],".
	"[25,".fgets($handle26)."],".
	"[30,".fgets($handle26)."],".
	"[35,".fgets($handle26)."],".
	"[40,".fgets($handle26)."],".
	"]";
} else {
    echo "erro no 26";
} 
fclose($handle26);


$handle11 = fopen("potencia_sinal_m_canal11.txt", "r");
$handle12 = fopen("potencia_sinal_m_canal12.txt", "r");
$handle13 = fopen("potencia_sinal_m_canal13.txt", "r");
$handle14 = fopen("potencia_sinal_m_canal14.txt", "r");
$handle15 = fopen("potencia_sinal_m_canal15.txt", "r");
$handle16 = fopen("potencia_sinal_m_canal16.txt", "r");
$handle17 = fopen("potencia_sinal_m_canal17.txt", "r");
$handle18 = fopen("potencia_sinal_m_canal18.txt", "r");
$handle19 = fopen("potencia_sinal_m_canal19.txt", "r");
$handle20 = fopen("potencia_sinal_m_canal20.txt", "r");
$handle21 = fopen("potencia_sinal_m_canal21.txt", "r");
$handle22 = fopen("potencia_sinal_m_canal22.txt", "r");
$handle23 = fopen("potencia_sinal_m_canal23.txt", "r");
$handle24 = fopen("potencia_sinal_m_canal24.txt", "r");
$handle25 = fopen("potencia_sinal_m_canal25.txt", "r");
$handle26 = fopen("potencia_sinal_m_canal26.txt", "r");

$valoresttotal = "[['distância', 'Canal 11','Canal 12','Canal 13','Canal 14','Canal 15','Canal 16','Canal 17','Canal 18','Canal 19','Canal 20','Canal 21','Canal 22','Canal 23','Canal 24','Canal 25','Canal 26'],";
$valoresttotal .= "[5,".fgets($handle11).",".fgets($handle12).",".fgets($handle13).",".fgets($handle14).",".fgets($handle15).",".fgets($handle16).",".fgets($handle17).",".fgets($handle18).",".fgets($handle19).",".fgets($handle20).",".fgets($handle21).",".fgets($handle22).",".fgets($handle23).",".fgets($handle24).",".fgets($handle25).",".fgets($handle26)."],".
	"[10,".fgets($handle11).",".fgets($handle12).",".fgets($handle13).",".fgets($handle14).",".fgets($handle15).",".fgets($handle16).",".fgets($handle17).",".fgets($handle18).",".fgets($handle19).",".fgets($handle20).",".fgets($handle21).",".fgets($handle22).",".fgets($handle23).",".fgets($handle24).",".fgets($handle25).",".fgets($handle26)."],".
	"[15,".fgets($handle11).",".fgets($handle12).",".fgets($handle13).",".fgets($handle14).",".fgets($handle15).",".fgets($handle16).",".fgets($handle17).",".fgets($handle18).",".fgets($handle19).",".fgets($handle20).",".fgets($handle21).",".fgets($handle22).",".fgets($handle23).",".fgets($handle24).",".fgets($handle25).",".fgets($handle26)."],".
	"[20,".fgets($handle11).",".fgets($handle12).",".fgets($handle13).",".fgets($handle14).",".fgets($handle15).",".fgets($handle16).",".fgets($handle17).",".fgets($handle18).",".fgets($handle19).",".fgets($handle20).",".fgets($handle21).",".fgets($handle22).",".fgets($handle23).",".fgets($handle24).",".fgets($handle25).",".fgets($handle26)."],".
	"[25,".fgets($handle11).",".fgets($handle12).",".fgets($handle13).",".fgets($handle14).",".fgets($handle15).",".fgets($handle16).",".fgets($handle17).",".fgets($handle18).",".fgets($handle19).",".fgets($handle20).",".fgets($handle21).",".fgets($handle22).",".fgets($handle23).",".fgets($handle24).",".fgets($handle25).",".fgets($handle26)."],".
	"[30,".fgets($handle11).",".fgets($handle12).",".fgets($handle13).",".fgets($handle14).",".fgets($handle15).",".fgets($handle16).",".fgets($handle17).",".fgets($handle18).",".fgets($handle19).",".fgets($handle20).",".fgets($handle21).",".fgets($handle22).",".fgets($handle23).",".fgets($handle24).",".fgets($handle25).",".fgets($handle26)."],".
	"[35,".fgets($handle11).",".fgets($handle12).",".fgets($handle13).",".fgets($handle14).",".fgets($handle15).",".fgets($handle16).",".fgets($handle17).",".fgets($handle18).",".fgets($handle19).",".fgets($handle20).",".fgets($handle21).",".fgets($handle22).",".fgets($handle23).",".fgets($handle24).",".fgets($handle25).",".fgets($handle26)."],".
	"[40,".fgets($handle11).",".fgets($handle12).",".fgets($handle13).",".fgets($handle14).",".fgets($handle15).",".fgets($handle16).",".fgets($handle17).",".fgets($handle18).",".fgets($handle19).",".fgets($handle20).",".fgets($handle21).",".fgets($handle22).",".fgets($handle23).",".fgets($handle24).",".fgets($handle25).",".fgets($handle26)."]".
	"]";

fclose($handle11);
fclose($handle12);
fclose($handle13);
fclose($handle14);
fclose($handle15);
fclose($handle16);
fclose($handle17);
fclose($handle18);
fclose($handle19);
fclose($handle20);
fclose($handle21);
fclose($handle22);
fclose($handle23);
fclose($handle24);
fclose($handle25);
fclose($handle26);
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
		
		function drawChart12() {
			options.title = "Canal 12";
			var data = google.visualization.arrayToDataTable(<?php echo $valores12;?>);
			var chart = new google.visualization.LineChart(document.getElementById('curve_chart12'));
			chart.draw(data, options);
		}
		
		function drawChart13() {
			options.title = "Canal 13";
			var data = google.visualization.arrayToDataTable(<?php echo $valores13;?>);
			var chart = new google.visualization.LineChart(document.getElementById('curve_chart13'));
			chart.draw(data, options);
		}
		
		function drawChart14() {
			options.title = "Canal 14";
			var data = google.visualization.arrayToDataTable(<?php echo $valores14;?>);
			var chart = new google.visualization.LineChart(document.getElementById('curve_chart14'));
			chart.draw(data, options);
		}
		
		function drawChart15() {
			options.title = "Canal 15";
			var data = google.visualization.arrayToDataTable(<?php echo $valores15;?>);
			var chart = new google.visualization.LineChart(document.getElementById('curve_chart15'));
			chart.draw(data, options);
		}
		
		function drawChart16() {
			options.title = "Canal 16";
			var data = google.visualization.arrayToDataTable(<?php echo $valores16;?>);
			var chart = new google.visualization.LineChart(document.getElementById('curve_chart16'));
			chart.draw(data, options);
		}
		
		function drawChart17() {
			options.title = "Canal 17";
			var data = google.visualization.arrayToDataTable(<?php echo $valores17;?>);
			var chart = new google.visualization.LineChart(document.getElementById('curve_chart17'));
			chart.draw(data, options);
		}
		
		function drawChart18() {
			options.title = "Canal 18";
			var data = google.visualization.arrayToDataTable(<?php echo $valores18;?>);
			var chart = new google.visualization.LineChart(document.getElementById('curve_chart18'));
			chart.draw(data, options);
		}
		
		function drawChart19() {
			options.title = "Canal 19";
			var data = google.visualization.arrayToDataTable(<?php echo $valores19;?>);
			var chart = new google.visualization.LineChart(document.getElementById('curve_chart19'));
			chart.draw(data, options);
		}
		
		function drawChart20() {
			options.title = "Canal 20";
			var data = google.visualization.arrayToDataTable(<?php echo $valores20;?>);
			var chart = new google.visualization.LineChart(document.getElementById('curve_chart20'));
			chart.draw(data, options);
		}
		
		function drawChart21() {
			options.title = "Canal 21";
			var data = google.visualization.arrayToDataTable(<?php echo $valores21;?>);
			var chart = new google.visualization.LineChart(document.getElementById('curve_chart21'));
			chart.draw(data, options);
		}
		
		function drawChart22() {
			options.title = "Canal 22";
			var data = google.visualization.arrayToDataTable(<?php echo $valores22;?>);
			var chart = new google.visualization.LineChart(document.getElementById('curve_chart22'));
			chart.draw(data, options);
		}
		
		function drawChart23() {
			options.title = "Canal 23";
			var data = google.visualization.arrayToDataTable(<?php echo $valores23;?>);
			var chart = new google.visualization.LineChart(document.getElementById('curve_chart23'));
			chart.draw(data, options);
		}
		
		function drawChart24() {
			options.title = "Canal 24";
			var data = google.visualization.arrayToDataTable(<?php echo $valores24;?>);
			var chart = new google.visualization.LineChart(document.getElementById('curve_chart24'));
			chart.draw(data, options);
		}
		
		function drawChart25() {
			options.title = "Canal 25";
			var data = google.visualization.arrayToDataTable(<?php echo $valores25;?>);
			var chart = new google.visualization.LineChart(document.getElementById('curve_chart25'));
			chart.draw(data, options);
		}
		
		function drawChart26() {
			options.title = "Canal 26";
			var data = google.visualization.arrayToDataTable(<?php echo $valores26;?>);
			var chart = new google.visualization.LineChart(document.getElementById('curve_chart26'));
			chart.draw(data, options);
		}
		
		function drawChartTodos() {
			options.title = "Sobreposição de todos os canais";
			options.legend.position = 'right';
			var data = google.visualization.arrayToDataTable(<?php echo $valoresttotal;?>);
			var chart = new google.visualization.LineChart(document.getElementById('curve_charttotal'));
			chart.draw(data, options);
		}
		
		google.charts.setOnLoadCallback(drawChart11);
		google.charts.setOnLoadCallback(drawChart12);
		google.charts.setOnLoadCallback(drawChart13);
		google.charts.setOnLoadCallback(drawChart14);
		google.charts.setOnLoadCallback(drawChart15);
		google.charts.setOnLoadCallback(drawChart16);
		google.charts.setOnLoadCallback(drawChart17);
		google.charts.setOnLoadCallback(drawChart18);
		google.charts.setOnLoadCallback(drawChart19);
		google.charts.setOnLoadCallback(drawChart20);
		google.charts.setOnLoadCallback(drawChart21);
		google.charts.setOnLoadCallback(drawChart22);
		google.charts.setOnLoadCallback(drawChart23);
		google.charts.setOnLoadCallback(drawChart24);
		google.charts.setOnLoadCallback(drawChart25);
		google.charts.setOnLoadCallback(drawChart26);
		google.charts.setOnLoadCallback(drawChartTodos);
		
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
	<div id="curve_chart12" class="grafico"></div>
	<div id="curve_chart13" class="grafico"></div>
	<div id="curve_chart14" class="grafico"></div>
	<div id="curve_chart15" class="grafico"></div>
	<div id="curve_chart16" class="grafico"></div>
	<div id="curve_chart17" class="grafico"></div>
	<div id="curve_chart18" class="grafico"></div>
	<div id="curve_chart19" class="grafico"></div>
	<div id="curve_chart20" class="grafico"></div>
	<div id="curve_chart21" class="grafico"></div>
	<div id="curve_chart22" class="grafico"></div>
	<div id="curve_chart23" class="grafico"></div>
	<div id="curve_chart24" class="grafico"></div>
	<div id="curve_chart25" class="grafico"></div>
	<div id="curve_chart26" class="grafico"></div>
	<div id="curve_charttotal" class="grafico"></div>
  </body>
</html>