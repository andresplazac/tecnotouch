<div id="titulos">Categorías</div>
<br/>
<div class="menu_list" id="secondpane">
    <?php
    include_once 'MySql/accesoTecnoTouch.php';
    include_once 'Objetos/Producto.php';
    $acces = new accesoTecnoTouch();
    $listaMenu = $acces->obtenerMenu();
    $idAux = 0;

    foreach($listaMenu as $menu) {
        echo "<p class=\"menu_head\">" .utf8_encode($menu->nombre)."</p>";
        $listaItem = $acces->obtenerItemPorIdMenu($menu->id_menu);
        if(count($listaItem) > 0) {
            echo "<div class=\"menu_body\">";
            foreach ($listaItem as $item) {
                echo "<a href=\"categoriaProd.php?idItem=$item->id_item&nItem=".utf8_encode($item->nombre)."&nMenu=".utf8_encode($menu->nombre)."\">";
                echo "- $item->nombre";
                echo "</a>";
            }
            echo "</div>";
        }
    }
    ?>
</div>

<br/>
<img alt="" src="imagen/3cuotas.png" >
<br/>
<img alt="" src="imagen/webpayplus.png" >
