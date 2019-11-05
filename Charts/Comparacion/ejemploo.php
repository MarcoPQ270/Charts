<?php
$conn=new mysqli("localhost","root","","graficos");
$sql='SELECT A.nombreprod, A.precioprod, B.precio
FROM productos A
INNER JOIN detalle B ON
(A.idproducto = B.idproducto)
ORDER BY
A.nombreprod';
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
          ['Producto', 'Ganancias', 'perdidias'],
          <?php
                while($fila=$result->fetch_assoc()){
                    echo"['".$fila["nombreprod"]."',".$fila["precio"].",".$fila["precioprod"]." ],";
                }
                //['Work',     11],
                ?>
        ]);

        var options = {
          title: 'Ganancias y perdidias por productos',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 100%; height: 500px;"></div>
  </body>
</html>
