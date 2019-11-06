<?php include_once('Fo/header.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/default.css" />
    <link rel="icon" type="image/x-icon" href="fonts/favicon.ico" />

</head>
<body>
<section>
    <div class="row">
        <div class="col s12 m8 offset-m2">
            <div class="card">
            <div class="card-image">
          <img src="img/d.jpg">
        <span class="card-title">¿Que desea consultar?</span>
        </div>
                
        <div class="row">
                                <div class="col s6 m4">
                                <div class="card">
                                    <div class="card-image">
                                    <img src="img/productos en stock.jpg" width="230" height="150">
                                    <span class="card-title">Productos en Stock</span>
                                    </div>
                                    <div class="card-content">
                                    <p>Se muestran los productos en Stock de la empresa y se grafican los datos en base a los productos y la cantidad que hay de los mismos.</p>
                                    </div>
                                    <div class="card-action">
                                    <a href="Charts/Productos/productos.php">Productos</a>
                                    </div>
                                </div>
                                </div>

                                <div class="col s6 m4">
                                <div class="card">
                                    <div class="card-image">
                                    <img src="img/ventas.jpg" width="230" height="150">
                                    <span class="card-title">Ventas</span>
                                    </div>
                                    <div class="card-content">
                                    <p>Se muestra una grafica y una tabla sobre los productos mas vendidos en base a los detalles de ls ventas</p>
                                    </div>
                                    <div class="card-action">
                                    <a href="Charts/Detalle/detallecomp.php">Detalle de ventas</a>
                                    </div>
                                </div>
                                </div>

                                <div class="col s6 m4">
                                <div class="card">
                                    <div class="card-image" >
                                    <img src="img/comparacion.png" width="230" height="150">
                                    <span class="card-title">Comparacion</span>
                                    </div>
                                    <div class="card-content">
                                    <p>Se muestra una grafica y una tabla donde se comparan ganancias y las predidas dentro de la organizacion</p>
                                    </div>
                                    <div class="card-action">
                                    <a href="Charts/Comparacion/comparacion.php">Graficar</a>
                                    </div>
                                </div>
                                </div>
                                <div class="col s6 m4">
                                <div class="card">
                                    <div class="card-image" >
                                    <img src="img/ganancias.jpg" width="230" height="150">
                                    <span class="card-title">Ganancias</span>
                                    </div>
                                    <div class="card-content">
                                    <p>Se muestran las ganancias de la empresa  en una grafica de barras en base a los años que la empresa tiene trabajando</p>
                                    </div>
                                    <div class="card-action">
                                    <a href="Charts/VentasComp/compara.php">Graficar</a>
                                    </div>
                                </div>
                                </div>

                               </div>
                 </div>
             </div>
        </div>
    </div>
    <!-------------------------------------------------------------------------------- Ventana Modal---------------------------------------------------------------------------->

<!--------------------------------------------------------------------------------- FIN VENTANA MODAL---------------------------------------------------------------------->


    <script type="text/javascript" src="js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    </section>
    <?php include('Fo/footer.php');?>
