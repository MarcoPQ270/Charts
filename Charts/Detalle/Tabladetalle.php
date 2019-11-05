<?php
include_once("../../Utilerias/BaseDatos.php");
$res = cargaDetalle();
echo "<table class ='highlight bordered'>
<thead>
    <tr><th>id detalle</th><th>producto</th><th>cliente</th><th>cantidad</th><th>precio</th><th>fechacompra</th></tr>
    </thead>
    <tbody>";
foreach ($res as $tupla) {
    $idd = $tupla['iddetalle'];
    $nompro = $tupla['nombreprod'];
    $nombrec = $tupla['nombre'];
    $cantidad = $tupla['cantidad'];
    $precio=$tupla['precio'];
    $fech=$tupla['fechacompra'];
    echo "<tr><td>$idd</td><td>$nompro</td><td>$nombrec</td><td>$cantidad</td><td>$precio</td><td>$fech</td><td>
    <i class='material-icons edit' data-no = '$idd' data-nom='$nompro' data-edad = '$nombrec'> </i>
    </td></tr>";
}
echo "</tbody>
</table>";
?>    