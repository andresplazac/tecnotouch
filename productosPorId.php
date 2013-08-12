


<?php
$idITem=$_GET['idItem'];
$nombreITem=$_GET['nItem'];
$nombreMenu=$_GET['nMenu'];

echo "<div id=\"titulos\">".urldecode($nombreMenu) ." > " .urldecode($nombreITem). "</div>";

include_once 'MySql/accesoTecnoTouch.php';
include_once 'Objetos/Producto.php';

$acces = new accesoTecnoTouch();
$listaProd = $acces->obtenerProductosPorIdItem($idITem);


if(count($listaProd)) {
    foreach ($listaProd as $prod) {
        echo "<div id=\"producto\">";
        echo "<div class=\"imagenProducto\">";
        echo "<a href=\"detalleProd.php?nombre=$prod->nombre_corto&id=$prod->id_producto\">";
        echo "<img alt=\"\" width=\"110\" height=\"110\" src=\"$prod->url_imagen\">";
        echo "</a>";
        echo "</div>";
        echo "<div class=\"nombreProducto\">";
        echo "<a href=\"#\"> $prod->nombre_corto </a>";
        echo "</div>";
        echo "<div class=\"precioProducto\"> $prod->precio </div>";
        echo "<div class=\"carro\"><a class=\"button\" href=\"verCarro.php?id=$prod->id_producto\" >
                <span>Agregar al Carro</span></a></div>";
        echo "</div>";
    }
}else {
    echo "<br/>";
    echo "<div><label id=\"letraBase\"> No se encontraron resultados </label></div>";
}

?>

<br/>