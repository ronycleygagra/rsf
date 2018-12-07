<?php

$valores11 = $valores12 = $valores13 = $valores14 = $valores15 = $valores16 = $valores17 = $valores18 = $valores19 = "[['distância', 'dBm'],";
$valores20 = $valores21 = $valores22 = $valores23 = $valores24 = $valores25 = $valores26 = $valores11;
 
$handle11 = fopen("valorn/canal11.txt", "r");
$handle12 = fopen("valorn/canal12.txt", "r");
$handle13 = fopen("valorn/canal13.txt", "r");
$handle14 = fopen("valorn/canal14.txt", "r");
$handle15 = fopen("valorn/canal15.txt", "r");
$handle16 = fopen("valorn/canal16.txt", "r");
$handle17 = fopen("valorn/canal17.txt", "r");
$handle18 = fopen("valorn/canal18.txt", "r");
$handle19 = fopen("valorn/canal19.txt", "r");
$handle20 = fopen("valorn/canal20.txt", "r");
$handle21 = fopen("valorn/canal21.txt", "r");
$handle22 = fopen("valorn/canal22.txt", "r");
$handle23 = fopen("valorn/canal23.txt", "r");
$handle24 = fopen("valorn/canal24.txt", "r");
$handle25 = fopen("valorn/canal25.txt", "r");
$handle26 = fopen("valorn/canal26.txt", "r");

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
<br>
<center>Sobreposição de canais</center>
    <script type="text/javascript">
		google.charts.load('current', {'packages':['corechart']});
		var options = {
			legend: { position: 'bottom' },
			//curveType: 'function',
			pointSize: 5,
			vAxis: {title: "Valor médio da potência recebida (dBm)",ticks: [0.5,1,1.5,2,2.5]},
			hAxis: {title: "Distância (m)",ticks: [5, 10, 15, 20, 25, 30, 35, 40]},
			legend: {
				position: 'none'
			},
			titlePosition: 'none',
			chartArea: {left: 200,top:20,width:'70%',height:'80%'}
		};
		
		function drawChart27() {
			options.title = "Sobreposição de todos os canais";
			options.legend.position = 'right';
			var data = google.visualization.arrayToDataTable(<?php echo $valoresttotal;?>);
			var chart = new google.visualization.LineChart(document.getElementById('curve_chart27n'));
			chart.draw(data, options);
		}
		
		google.charts.setOnLoadCallback(drawChart27);
		
    </script>
    <div id="curve_chart27n" class="grafico"></div>
