<?php
$conn=new mysqli("localhost","root","","graficos");
$sql='SELECT nombreprod, b.cantidad from productos as a INNER JOIN detalle as b on a.idproducto=b.idproducto';
$result = $conn->query(($sql));
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Age', 'Weight'],
          <?php
                while($fila=$result->fetch_assoc()){
                    echo"['".$fila["cantidad"]."',".$fila["nombreprod"]." ],";
                }
                //['Work',     11],
                ?>
        ]);
        var options = {
          title: 'Age vs. Weight comparison',
          hAxis: {title: 'Age', minValue: 0, maxValue: 15},
          vAxis: {title: 'Weight', minValue: 0, maxValue: 15},
          legend: 'none'
        };

        var chart = new google.visualization.ScatterChart(document.getElementById('chart_div'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>
