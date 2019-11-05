<?php
include_once("../../Utilerias/BaseDatos.php");
$res =cargacompracio();
echo "<table class ='highlight bordered'>
<thead>
    <tr><th>producto</th><th>Perdida</th><th>Ganancia</th></tr>
    </thead>
    <tbody>";
foreach ($res as $tupla) {
    $nompro = $tupla['nombreprod'];
    $precioP = $tupla['precioprod'];
    $precioG = $tupla['precio'];
    echo "<tr><td>$nompro</td><td>$precioP</td><td>$precioG</td><td>
    <i class='material-icons edit' data-no = '$nompro' data-nom='$precioP' data-edad = '$precioG'></i>
    </td></tr>";
}
echo "</tbody>
</table>";
?>   