  
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
      google.charts.load('current', {'packages':['bar']});
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
          chart: {
            title: 'Ganacias de la compañia del año <?php echo $año ?>',
            subtitle: 'Ventas: <?php echo $año ?>',
          }
        };
        var chart = new google.charts.Bar(document.getElementById('columnchart'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart" style="width: 800px; height: 500px;"></div>


        
        </div>
    </div>
    
    
    <!-------------------------------------------------------------------------------- Ventana Modal---------------------------------------------------------------------------->

<!--------------------------------------------------------------------------------- FIN VENTANA MODAL---------------------------------------------------------------------->


    <script type="text/javascript" src="../../js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.validate.min.js"></script>
    </section>

    <?php include('../../Fo/footer.php');?>