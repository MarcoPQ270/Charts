<?php
try{
        //$Cn = new PDO('pgsql:host=localhost;port=5432;dbname=estudiantes;user=postgres;password=hola');
        $Cn = new PDO('mysql:host=localhost; dbname=graficos','root','');
        $Cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //$Cn->exec("SET CLIENT_ENCODING TO 'UTF8';");
        $Cn->exec("SET CHARACTER SET utf8");
}catch(Exception $e){
    die("Error: " . $e->GetMessage());
}

// Función para ejecutar consultas SELECT
function Consulta($query)
{
    global $Cn;
    try{    
        $result =$Cn->query($query);
        $resultado = $result->fetchAll(PDO::FETCH_ASSOC); 
        $result->closeCursor();
        return $resultado;
    }catch(Exception $e){
        die("Error en la LIN: " . $e->getLine() . ", MSG: " . $e->GetMessage());
    }
}

// Función que recibe un insert y regresa el consecutivo que le genero
function EjecutaConsecutivo($sentencia){
    global $Cn;
    try {
        $result = $Cn->query($sentencia);
        $resultado = $result->fetchAll(PDO::FETCH_ASSOC);
        $result->closeCursor();
        return $resultado[0]['idcurso'];
    } catch (Exception $e) {
        die("Error en la linea: " + $e->getLine() + 
        " MSG: " + $e->GetMessage());
        return 0;
    }
}

function Ejecuta ($sentencia){
    global $Cn;
    try {
        $result = $Cn->query($sentencia);
        $result->closeCursor();
        return 1; // Exito  
    } catch (Exception $e) {
        //die("Error en la linea: " + $e->getLine() + " MSG: " + $e->GetMessage());
        return 0; // Fallo
    }
}
//------------------------------------------------------------
//nombreprod	precio	stock	idcategoria
function cargaProd(){
    $query = "SELECT A.idproducto, A.nombreprod,A.precio,A.stock, B.nombrecategoria FROM productos A
    INNER JOIN categoria B ON
        (A.idcategoria = B.idcategoria)
    ORDER BY
        idproducto";
    return Consulta($query);
}

function guardaprod($idp,$nompro,$precio, $stock,$categoria){
    $sentencia = "INSERT INTO productos (idproducto,nombreprod,precio,stock, idcategoria) VALUES ({$idp},'{$nompro}',{$precio},{$stock},{$categoria})";
    if (Ejecuta($sentencia)) {
        return 1;
    } else{
        $sentencia = "UPDATE productos SET nombreprod='{$nompro}',precio={$precio}, stock={$stock}, idcategoria{$categoria} WHERE idproducto='{$idp}'";
        return Ejecuta($sentencia);
    }
}


function eliminarEstudiante($no){
$sentencia = "DELETE FROM consejo.estudiantes WHERE nocontrol = '{$no}'";
return Ejecuta($sentencia);
}

function consultaEstudiantes(){
$query = "SELECT nocontrol,nombre,edad FROM consejo.estudiantes ORDER BY nocontrol";
return Consulta($query);
}