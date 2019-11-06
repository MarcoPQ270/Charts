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
          
        <form action="compara.php" name="frm1" id="frm1" method="post">
                        <div class="row">
                        <div class="input-field col s12">
                       

                           <div class="input-field col s3">
    <select id="sel" name="sel">
      <option value="" disabled selected>Selecciona el año</option>
      <option value="2010">2010</option>
      <option value="2011">2011</option>
      <option value="2012">2012</option>
    </select>
    <label>Seleccion</label>
   
  </div>
  <?php
    if(isset($_POST['sel']))
    {
        $año=$_POST['sel'];
        echo $año;
    }
    ?>  
                            <div class="input-field col s9">
                            
                               <!-- <button id="btnGuardar" name="btnGuardar" type="button" class="btn waves-effect waves-light blue" >
                                        <i class="material-icons right" >save</i>Graficar</button>-->

                                        <input type="submit" name="btnAgregar" value="Enviar">
                            </div>
                           
                           
                        </div>
                    </form>
        </div>
                
        <div class="row">
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
