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

<body background="../img/a.jpg">
    <div class="row">
        <div class="col s12 m8 offset-m2">
            <h3 align="center"><font color="#2196F3">Detalle compra</font></h3>
            <div class="card">
            <div class="card-image">
        </div>
                <div class="card-content">
                    <form action="actEst.php" name="frm1" id="frm1" method="GET">
                        <div class="row">
                        <div class="input-field col s12">
                        <div class="card-image">
                                    <img src="../../img/dinero.jpg" width="230" height="300">
                           </div>
                            <div class="input-field col s9">
                            
                                <button id="btnGuardar" name="btnGuardar" type="button" class="btn waves-effect waves-light blue" >
                                        <i class="material-icons right" >save</i><a href="prueba.php"  style="color:#FFFFFF;">Graficar</a></button>
                            </div>
                           
                            <div class="input-field col s3">

                                <button id="btnConsultar" name="btnConsultar" type="button" class="btn waves-effect waves-light blue" value="Cunsultar">
                                        <i class="material-icons right">cloud_done</i>Cunsultar</button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------------------------------------------------- Ventana Modal---------------------------------------------------------------------------->
<div class="modal" id="Tabladetalle">
        <div class="modal-content">
            <h4 align="center">Consulta de detalles ventas</h4>
            <br>
            <div class="row" id="tabla">
               
            </div>
        </div>
        <div class="modal-foter">
            <a id="Cerrar" class="modal-action waves-effect waves-orange btn-flat">Cerrar</a>
        </div>
</div>
<!--------------------------------------------------------------------------------- FIN VENTANA MODAL---------------------------------------------------------------------->


    <script type="text/javascript" src="../../js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.validate.min.js"></script>
    <script>
 //INICIALIZA LA VENTANA MODAL--------------------------------------------------------------------------------------------------------------------------------------------
            $("#Tabladetalle").modal();
            $("#tabla").load("Tabladetalle.php");
            $("#btnConsultar").click(function(){
                $("#tabla").load("Tabladetalle.php");
                $("#Tabladetalle").modal('open');
                
            });
            $("#Cerrar").click(function(){
                $("#Tabladetalle").modal('close');
                
            });
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    </script>
</body>

<?php include('../../Fo/footer.php');?>