<?php
include_once("../../Utilerias/BaseDatos.php");
$res = cargaProd();
echo "<table class ='highlight bordered'>
<thead>
    <tr><th>id producto</th><th>nombre producto</th><th>precio</th><th>stock</th><th>categoria</th><th>Selecciona</th></tr>
    </thead>
    <tbody>";
foreach ($res as $tupla) {
    $idp = $tupla['idproducto'];
    $nompro = $tupla['nombreprod'];
    $precio = $tupla['precio'];
    $stock = $tupla['stock'];
    $categoria=$tupla['nombrecategoria'];
    echo "<tr><td>$idp</td><td>$nompro</td><td>$precio</td><td>$stock</td><td>$categoria</td><td>
    <i class='material-icons edit' data-no = '$idp' data-nom='$nompro' data-edad = '$precio'> create </i>
    </td></tr>";
}
echo "</tbody>
</table>";
?>    