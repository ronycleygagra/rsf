<?php

$valores11 = "[['distância', 'dBm'],";
 
$handle11 = fopen("potencia_sinal_m_canal26.txt", "r");
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
<br>
<center>Canal 26</center>
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
			},
			titlePosition: 'none',
			chartArea: {left: 200,top:20,width:'100%',height:'80%'}
		};
		
		function drawChart26() {
			options.title = "Canal 11";
			var data = google.visualization.arrayToDataTable(<?php echo $valores11;?>);
			var chart = new google.visualization.LineChart(document.getElementById('curve_chart26'));
			chart.draw(data, options);
		}
		
		google.charts.setOnLoadCallback(drawChart26);
		
    </script>
    <div id="curve_chart26" class="grafico"></div>
