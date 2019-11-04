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
$sql='SELECT nombreprod, stock FROM productos';
$result = $conn->query(($sql));
?>
    <script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Vendedor', 'Ventas al mes'],
                <?php
                    while($fila=$result->fetch_assoc()){
                        echo"['".$fila["nombreprod"]."',".$fila["stock"]." ],";
                    }
                //['Work',     11],
                ?>
            ]);
            var options = {
                title: 'Productos en almacen',
                is3D: true,
                //pieHole: 0.4, Grafica de dona
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            //donutchart grafica de dona
            chart.draw(data, options);
        }
    </script>

<body>
<!--
donutchart grafica de dona
-->
<div id="piechart_3d" style="width: 900px; height: 500px;"></div>


        
        </div>
    </div>
    <!-------------------------------------------------------------------------------- Ventana Modal---------------------------------------------------------------------------->

<!--------------------------------------------------------------------------------- FIN VENTANA MODAL---------------------------------------------------------------------->


    <script type="text/javascript" src="../../js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.validate.min.js"></script>
    </section>
    <?php include('../../Fo/footer.php');?>
