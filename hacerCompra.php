<html>
    <head>
        <link rel="stylesheet" href="css/template.css" type="text/css" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php

        session_start();
        include_once 'MySql/accesoTecnoTouch.php';
        include_once 'Objetos/Producto.php';
        $acces = new accesoTecnoTouch();


        $lista = $_SESSION['ids'];
        $ticket = $_SESSION['ticket'];
        $listaProductos = explode("#", $lista);
        $acces->borrarDetCotizacion($ticket);
        $total = 0;


        $cotizacion = $acces->insertarCotizacion(session_id(), $total, $ticket);

        foreach($listaProductos as $productoCant) {
            $detalle = explode("-", $productoCant);
            $detProd = $acces->obtenerProductoPorID($detalle[0]); //pos 0 indica el ID del producto
            $total = $total + ($detProd->precio * $detalle[1]);
            $acces->insertarDetCotizacion($detalle[0], $ticket, $detalle[1]);
        }
        $cotizacion = $acces->insertarCotizacion(session_id(), $total, $ticket);

        
        
        

        echo "<div id=\"producto\" style=\"width: 99%;\">";
        echo "<div class=\"panelDetalle\" style=\"text-align:left !important; margin-left:20px\">";
        echo "<label style=\"color: #0B3B0B;
                            font-family: arial;
                            font-size: 13px;
                            font-weight: bold;\">Su identificador de compra es: ". $ticket ."</label><br/>";
        echo "<label style=\"color: #0B3B0B;
                            font-family: arial;
                            font-size: 13px;
                            font-weight: bold;\">El total de cotización es: $".$total."</label>";
        echo "</div>";
        echo "<div class=\"carro\" style=\"float:right;margin-right:6px\">
                            <a href=\"verCarro.php\" class=\"button\" >
                                <span class=\"agregarCar\" style=\"font-size:15px;\">Volver</span>
                            </a>
                          </div>";
        echo "</div>";

        ?>
        <iframe src="https://www.webpay.cl/portalpagodirecto/pages/institucion.jsf?idEstablecimiento=5076798"
                style="width: 100%; height: 100%;">

        </iframe>


        <script type="text/javascript">
            //window.open("https://www.webpay.cl/portalpagodirecto/pages/institucion.jsf?idEstablecimiento=5076798");
            // window.location.href = "verCarro.php";
        </script>


    </body>
</html>
