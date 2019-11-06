<?php include_once('../Fo/header.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="../css/default.css" />
    <link rel="icon" type="image/x-icon" href="../fonts/favicon.ico" />

</head>
<body>
<section>
<h3 align="center"><font color="#2196F3">¿Que grafica desea usar?</font></h3>
    <div class="row">
        <div class="col s12 m8 offset-m2">
            <div class="card">
        <span class="card-title"></span>
        </div>
                
        <div class="row">
                                <div class="col s6 m4">
                                <div class="card">
                                    <div class="card-image">
                                    <img src="../img/puntos.png" width="230" height="150">
                                    <span class="card-title">PUNTOS</span>
                                    </div>
                                    <div class="card-content">
                                    <p>Grafica de puntos</p>
                                    </div>
                                    <div class="card-action">
                                    <a href="Puntos/compara.php">Graficar</a>
                                    </div>
                                </div>
                                </div>

                                <div class="col s6 m4">
                                <div class="card">
                                    <div class="card-image">
                                    <img src="../img/barras.jpg" width="230" height="150">
                                    <span class="card-title"></span>
                                    </div>
                                    <div class="card-content">
                                    <p>Grafica de barras</p>
                                    </div>
                                    <div class="card-action">
                                    <a href="Barras/comparacion.php">Graficar</a>
                                    </div>
                                </div>
                                </div>

                                <div class="col s6 m4">
                                <div class="card">
                                    <div class="card-image" >
                                    <img src="../img/picos.png" width="230" height="150">
                                    <span class="card-title">Dibujo</span>
                                    </div>
                                    <div class="card-content">
                                    <p>Grrfica de picos</p>
                                    </div>
                                    <div class="card-action">
                                    <a href="Picos/compara.php">Graficar</a>
                                    </div>
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


    <script type="text/javascript" src="../js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
    </section>
    <?php include('../Fo/footer.php');?>
