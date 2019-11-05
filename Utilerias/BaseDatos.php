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
    $query = "SELECT A.idproducto, A.nombreprod,A.precioprod,A.stock, B.nombrecategoria FROM productos A
    INNER JOIN categoria B ON
        (A.idcategoria = B.idcategoria)
    ORDER BY
        idproducto";
    return Consulta($query);
}

function cargaDetalle(){
    $query = "SELECT iddetalle,
    nombreprod,
    c.nombre,
    b.precio,
    cantidad,
    fechacompra
FROM
    productos AS a
INNER JOIN detalle AS b
INNER JOIN clientes AS c
ON
    a.idproducto = b.idproducto AND b.idcliente = c.idcliente  
    ORDER BY
        iddetalle";
    return Consulta($query);
}

function cargacompracio(){
$query="SELECT A.nombreprod, A.precioprod, B.precio
FROM productos A
INNER JOIN detalle B ON
(A.idproducto = B.idproducto)
ORDER BY
A.nombreprod";
}