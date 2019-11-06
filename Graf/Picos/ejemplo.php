<?php include_once('../../Fo/header.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="../../css/default.css" />
    <link rel="icon" type="image/x-icon" href="../../fonts/favicon.ico" />

</head>
<body>
<section>

    <div class="row">
        <div class="col s12 m8 offset-m2">
            <div class="card">
          
        
        </div>
                
        <div class="row">
        <?php

$conn=new mysqli("localhost","root","","graficos");
$año = $_POST['sel'];
$sql="SELECT
EXTRACT(MONTH
FROM
B.fechacompra) AS mes,
SUM(B.precio) AS suma
FROM
productos A
INNER JOIN detalle B ON
(A.idproducto = B.idproducto)
WHERE
EXTRACT(YEAR
FROM
b.fechacompra) = $año
GROUP BY
EXTRACT(MONTH
FROM
B.fechacompra)";
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
          ['Ganancia', 'Mes'],
          <?php
                while($fila=$result->fetch_assoc()){
                    echo"[".$fila["mes"].",".$fila["suma"]." ],";
                }
               
                ?>
          
        ]);

        var options = {
          title: 'Ganancias del año <?php echo $año?>',
          hAxis: {title: 'Meses',  titleTextStyle: {color: '#333'}},
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

        
        </div>
    </div>
    
    
    <!-------------------------------------------------------------------------------- Ventana Modal---------------------------------------------------------------------------->

<!--------------------------------------------------------------------------------- FIN VENTANA MODAL---------------------------------------------------------------------->


    <script type="text/javascript" src="../../js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="new.js"></script>   
    </section>

    <?php include('../../Fo/footer.php');?>
