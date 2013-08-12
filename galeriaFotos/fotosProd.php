<?php
$nombreProducto=$_GET['nombre'];
$idProducto=$_GET['id'];
echo "<div id=\"titulos\">$nombreProducto</div>";
include_once 'MySql/accesoTecnoTouch.php';
                    include_once 'Objetos/Producto.php';

                    $nombreProducto=$_GET['nombre'];
                    $idProducto=$_GET['id'];
                    //Obtener valores por GET
                    $acces = new accesoTecnoTouch();
                    $producto = $acces->obtenerProductoPorID($idProducto);


echo "<table>";
    echo "<tbody>";
        echo "<tr>";
            echo "<td>";
               echo " <div id=\"page-wrap\">";
                    echo "<div class=\"slider-wrap\">";
                        echo "<div id=\"main-photo-slider\" class=\"csw\">";
                            echo "<div class=\"panelContainer\">";
                                if($producto->url_imagen != ""){
                                echo "<div class=\"panel\" title=\"\">";
                                    echo "<div class=\"wrapper\">";
                                        echo "<img src=\"$producto->url_imagen\" height=\"283\" width=\"415\" alt=\"temp\" />";
                                    echo "</div>";
                                echo "</div>";
                                }
                                if($producto->imagen1 != ""){
                                echo "<div class=\"panel\" title=\"\">";
                                    echo "<div class=\"wrapper\">";
                                        echo "<img src=\"$producto->imagen1\" height=\"283\" width=\"415\" alt=\"temp\" />";
                                    echo "</div>";
                                echo "</div>";
                                }
                                if($producto->imagen2 != ""){
                                echo "<div class=\"panel\" title=\"\">";
                                    echo "<div class=\"wrapper\">";
                                        echo "<img src=\"$producto->imagen2\" height=\"283\" width=\"415\" alt=\"temp\" />";
                                    echo "</div>";
                                echo "</div>";
                                }
                                if($producto->imagen3 != ""){
                                echo "<div class=\"panel\" title=\"\">";
                                    echo "<div class=\"wrapper\">";
                                        echo "<img src=\"$producto->imagen3\" height=\"283\" width=\"415\" alt=\"temp\" />";
                                    echo "</div>";
                                echo "</div>";
                                }
                                if($producto->imagen4 != ""){
                                echo "<div class=\"panel\" title=\"\">";
                                    echo "<div class=\"wrapper\">";
                                        echo "<img src=\"$producto->imagen4\" height=\"283\" width=\"415\" alt=\"temp\" />";
                                    echo "</div>";
                                echo "</div>";
                                }
                                if($producto->imagen5 != ""){
                                echo "<div class=\"panel\" title=\"\">";
                                    echo "<div class=\"wrapper\">";
                                        echo "<img src=\"$producto->imagen5\" height=\"283\" width=\"415\" alt=\"temp\" />";
                                    echo "</div>";
                                echo "</div>";
                                }
                                
                            echo "</div>";
                        echo "</div>";

                        echo "<a href=\"#1\" class=\"cross-link active-thumb\"><img src=\"$producto->url_imagen\" height=\"40\" width=\"60\" class=\"nav-thumb\" alt=\"temp-thumb\" /></a>";
                        echo "<div id=\"movers-row\">";
                        if($producto->imagen1 != ""){echo "<div><a href=\"#2\" class=\"cross-link\"><img src=\"$producto->imagen1\" height=\"40\" width=\"60\" class=\"nav-thumb\" alt=\"temp-thumb\" /></a></div>";}
                        if($producto->imagen2 != ""){echo "<div><a href=\"#2\" class=\"cross-link\"><img src=\"$producto->imagen2\" height=\"40\" width=\"60\" class=\"nav-thumb\" alt=\"temp-thumb\" /></a></div>";}
                        if($producto->imagen3 != ""){echo "<div><a href=\"#2\" class=\"cross-link\"><img src=\"$producto->imagen3\" height=\"40\" width=\"60\" class=\"nav-thumb\" alt=\"temp-thumb\" /></a></div>";}
                        if($producto->imagen4 != ""){echo "<div><a href=\"#2\" class=\"cross-link\"><img src=\"$producto->imagen4\" height=\"40\" width=\"60\" class=\"nav-thumb\" alt=\"temp-thumb\" /></a></div>";}
                        if($producto->imagen5 != ""){echo "<div><a href=\"#2\" class=\"cross-link\"><img src=\"$producto->imagen5\" height=\"40\" width=\"60\" class=\"nav-thumb\" alt=\"temp-thumb\" /></a></div>";}
                            
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</td>";
            echo "<td>";

            echo "<form id=\"formulario\"  action=\"verCarro.php\" method=\"POST\">";
                echo "<div class=\"ventaProductos\">";
                    echo "<label class=\"nombreDet\" >$producto->nombre_corto</label><br/><br/>";
                    echo "<label class=\"caracProd\">Código producto: $producto->codigo </label>";
                    echo "<br/><br/>";
                    echo "<label class=\"precioDet\"> Precio:  $$producto->precio </label>";
                    echo "<br/><br/>";
                    echo "<label class=\"caracProd\">Stock: $producto->cantidad</label><br/>";
                    echo "<label class=\"caracProd\">Todo Medio Pago</label><br/>";
                    echo "<label class=\"caracProd\">Reparto Todo Chile</label>";
                    echo "<br/><br/>";
                    echo "<img width=\"173\" alt=\"\" src=\"imagen/medio1.png\">";
                    echo "<img width=\"173\" alt=\"\" src=\"imagen/medio2.png\">";
                    echo "<div id=\"producto\" style=\"width: 168px;\">";
                    echo "<div id=\"cantidadProd\" style=\"font-size:13px\"> <span> Cantidad  </span> <input id=\"cantidad\" value=\"1\" name=\"cantidad\" type=\"text\"  maxlength=\"2\" size=\"1\" /> <div>";
                    echo "<div class=\"carro\" style=\"margin-top: 4px;\">
                            <a class=\"button\" onclick=\"javascript:document.forms[0].submit()\" >
                                <span class=\"agregarCar\" style=\"font-size:15px;\">Agregar al Carro</span>
                            </a>
                          </div>";
                    echo "</div>";
                echo "</div>";
                echo "<input type=\"hidden\" name=\"idProd\" value=\"$producto->id_producto\"/>";
            echo "</form>";
            echo "</td>";
        echo "</tr>";
    echo "</tbody>";
echo "</table>";
?>





