<?php

?>
<div>
    <ul class="tabs">
        <li><a href="#tab1">Características</a></li>
        <li><a href="#tab2">Formas de pago</a></li>
        <li><a href="#tab3">Despachos</a></li>
    </ul>
    <div class="contenedor_tab">
        <div id="tab1" class="contenido_tab">
            <ul type="circle">
                <?php
                $idProducto=$_GET['id'];
                $acces = new accesoTecnoTouch();
                $producto = $acces->obtenerProductoPorID($idProducto);
                $listaCarac = explode("<br/>", $producto->caracteristicas);

                foreach($listaCarac as $carac) {
                    echo"<li>";
                    echo utf8_decode($carac);
                    echo"</li>";
                }
                
                ?>
            </ul>
        </div>
        <div id="tab2" class="contenido_tab">
            <ul type="circle">
                <li>Efectivo.</li>
                <li>Transferencia Bancaria.</li>
                <li>Redcompra.</li>
                <li>Tarjetas de crédito.</li>
                <li>Depósitos en serviestado y cajas vecinas.</li>
            </ul>
        </div>
        <div id="tab3" class="contenido_tab">
            <ul type="circle">
                <li>Despacho a todo Chile.</li>
            </ul>
        </div>
    </div>
    <div style="clear:both;">
    </div>
</div>