<div id="titulos">Productos Agregados al Carro</div>

<?php
session_start();
include_once 'MySql/accesoTecnoTouch.php';
include_once 'Objetos/Producto.php';
$acces = new accesoTecnoTouch();

$composicion;
$cantidad;
$idProd;

if($_GET["id"] != ""){
    $cantidad = "1";
    $idProd = $_GET["id"];
}else{
    $cantidad = $_POST['cantidad'];
    $idProd = $_POST['idProd'];
}

$composicion = $idProd . "-" . $cantidad;

if($idProd != "" && $cantidad != "") {
    $lista = $_SESSION['ids'];
    if ( $lista == "") { //Caso que no existe cotización ni código
        $_SESSION['ids'] = $composicion;
        $ticket = generarCodigo(10);
        $_SESSION['ticket'] = $ticket;
    }else {
        $listId = $_SESSION['ids'];
        $listId = $listId . "#" .$composicion;
        $_SESSION['ids'] = $listId;
    }
}

$lista = $_SESSION['ids'];


if($lista == ""){
    echo "<br/><labe id=\"letraBase\">No se han agregado productos al carro</label>";

}else {
    $listaProductos = explode("#", $lista);
    echo"<br/><label id=\"letraBase\">Ticket de compra: " .$_SESSION['ticket'] ."</label>";
    echo"<table id=\"one-column-emphasis\">";
    echo"<colgroup><col>";
    echo"</colgroup><thead>";
    echo"<tr>";
    echo"<th scope=\"col\">Producto</th>";
    echo"<th scope=\"col\">Código</th>";
    echo"<th scope=\"col\">Cantidad</th>";
    echo"<th scope=\"col\">Precio Unitario</th>";
    echo"<th scope=\"col\">Precio Total</th>";
    echo"</tr>";
    echo"</thead>";
    echo"<tbody>";
    $total = 0;
    foreach ($listaProductos as $productos){
        $detalle = explode("-", $productos);
        $detProd = $acces->obtenerProductoPorID($detalle[0]);
        $total = $total + ($detProd->precio * $detalle[1]);
        echo"<tr>";
        echo"<td>$detProd->nombre_corto</td>";
        echo"<td>$detProd->codigo</td>";
        echo"<td style=\"text-align:right\">$detalle[1]</td>";
        echo"<td style=\"text-align:right\">$$detProd->precio</td>";
        echo"<td style=\"text-align:right\">$".$detProd->precio * $detalle[1]."</td>";
        echo"</tr>";
    }
    echo"<tr style=\"background-color:#0B3B0B\">";
        echo"<td style=\"color:white;font-size: 14px;font-weight: bold;\">Totales</td>";
        echo"<td></td>";
        echo"<td style=\"text-align:right\"></td>";
        echo"<td style=\"text-align:right\"></td>";
        echo"<td style=\"text-align:right;color:white;font-size: 14px;font-weight: bold;\">$".$total."</td>";
    echo"</tr>";

    echo"</tbody>";
    echo"</table>";
    echo"<br/>";
    echo "<div id=\"producto\" style=\"width: 99%;\">";
                    echo "<div class=\"carro\" style=\"float:right;margin-right:6px\">
                            <a href=\"hacerCompra.php\" class=\"button\" >
                                <span class=\"agregarCar\" style=\"font-size:15px;\">Comprar</span>
                            </a>
                          </div>";
                    echo "</div>";
    echo "<div style=\"clear:both\"/>";
}

function generarCodigo($longitud) {
 $key = '';
 $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}
?>


