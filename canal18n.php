<?php

$valores11 = "[['distância', 'Expoente de perda - n'],";
 
$handle11 = fopen("valorn/canal18.txt", "r");
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
    echo "erro no 18";
} 
fclose($handle11);
?>
<br>
<center>Canal 18</center>
<script type="text/javascript">
	google.charts.load('current', {'packages':['corechart']});
	var options = {
		legend: { position: 'bottom' },
		pointSize: 5,
		vAxis: {title: "Expoente de perda n",ticks: [0.5,1,1.5,2,2.5]},
		hAxis: {title: "Distância em metros",ticks: [5, 10, 15, 20, 25, 30, 35, 40]},
		legend: {
			position: 'none'
		},
		titlePosition: 'none',
		chartArea: {left: 200,top:20,width:'100%',height:'80%'},

        colors: ['red']
	};
	
	function drawChart11() {
		options.title = "Canal 18";
		var data = google.visualization.arrayToDataTable(<?php echo $valores11;?>);
		var chart = new google.visualization.LineChart(document.getElementById('curve_chart18n'));
		chart.draw(data, options);
	}
	
	google.charts.setOnLoadCallback(drawChart11);
</script>
<div id="curve_chart18n" class="grafico"></div>
