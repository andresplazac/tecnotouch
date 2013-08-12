<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/JavaScript" src="js/jquery.min.js"></script>
        <script type="text/JavaScript" src="js/menu.js"></script>

        <!-- Rotador imagenes -->
        <link rel="stylesheet" type="text/css" href="engine1/style.css" />
        <script type="text/javascript" src="engine1/jquery.js"></script>



        <!-- Menu -->
        <link rel="stylesheet" type="text/css" href="pro_dropdown_2/pro_dropdown_2.css" />
        <script src="pro_dropdown_2/stuHover.js" type="text/javascript"></script>

        <link rel="stylesheet" href="css/template.css" type="text/css" />
        <link rel="stylesheet" href="css/menu.css" type="text/css" />

        <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js' type='text/javascript'></script>

        <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js' type='text/javascript'></script>
        <script type='text/javascript'>
            var a = jQuery.noConflict();a(document).ready(function(){
                a("#firstpane p.menu_head").click(function(){
                    a(this).css({backgroundImage:""}).next("div.menu_body").slideToggle(300).siblings("div.menu_body").slideUp("slow");
                    a(this).siblings().css({backgroundImage:""});});
                a("#secondpane p.menu_head").click(function(){
                    a(this).css({backgroundImage:""}).next("div.menu_body").slideDown(500).siblings("div.menu_body").slideUp("slow");
                    a(this).siblings().css({backgroundImage:""});});});
        </script>
        <link rel="stylesheet" href="menu_vertical/menu.css" type="text/css" />
        <link href="imagen/favicon.ico" type="image/x-icon" rel="shortcut icon" />
        <!-- Galeria fotos para detalle -->
        <link rel="stylesheet" type="text/css" href="galeriaFotos/style.css" />
        <script type="text/javascript" src="galeriaFotos/js/jquery-1.2.6.min.js"></script>
        <script type="text/javascript" src="galeriaFotos/js/jquery-easing-1.3.pack.js"></script>
        <script type="text/javascript" src="galeriaFotos/js/jquery-easing-compatibility.1.2.pack.js"></script>
        <script type="text/javascript" src="galeriaFotos/js/coda-slider.1.1.1.pack.js"></script>
        <script type="text/javascript">

            var theInt = null;
            var $crosslink, $navthumb;
            var curclicked = 0;

            theInterval = function(cur){
                clearInterval(theInt);

                if( typeof cur != 'undefined' )
                    curclicked = cur;

                $crosslink.removeClass("active-thumb");
                $navthumb.eq(curclicked).parent().addClass("active-thumb");
                $(".stripNav ul li a").eq(curclicked).trigger('click');

                theInt = setInterval(function(){
                    $crosslink.removeClass("active-thumb");
                    $navthumb.eq(curclicked).parent().addClass("active-thumb");
                    $(".stripNav ul li a").eq(curclicked).trigger('click');
                    curclicked++;
                    if( 6 == curclicked )
                        curclicked = 0;

                }, 3000);
            };

            $(function(){

                $("#main-photo-slider").codaSlider();

                $navthumb = $(".nav-thumb");
                $crosslink = $(".cross-link");

                $navthumb
                .click(function() {
                    var $this = $(this);
                    theInterval($this.parent().attr('href').slice(1) - 1);
                    return false;
                });

                theInterval();
            });
        </script>

        <!-- Tab para el detalle de un producto -->

        <script type='text/javascript'>
            $(document).ready(function() {
                $(".contenido_tab").hide(); //Ocultar capas
                $("ul.tabs li:first").addClass("activa").show(); //Activar primera pestaña
                $(".contenido_tab:first").show(); //Mostrar contenido primera pestaña

                // Sucesos al hacer click en una pestaña
                $("ul.tabs li").click(function() {
                    $("ul.tabs li").removeClass("activa"); //Borrar todas las clases "activa"
                    $(this).addClass("activa"); //Añadir clase "activa" a la pestaña seleccionada
                    $(".contenido_tab").hide(); //Ocultar todo el contenido de la pestaña
                    var activatab = $(this).find("a").attr("href"); //Leer el valor de href para identificar la pestaña activa
                    $(activatab).fadeIn(); //Visibilidad con efecto fade del contenido activo
                    return false;
                });
            });
        </script>
        

        <title>TecnoTouch</title>
    </head>
    <body>
        <div id="topOut">
            <img width="100%" alt="" src="css/img/logo.png">
        </div>
        <div id="container">
            <?php include 'menu.php';?>
            <div>
                <div id="left">
                    <?php include 'menuVertical.php';?>
                </div>
                <div>
                    <div id="right">
                        <?php include 'publicidad.php'; ?>
                    </div>
                    <div id="content" class="right_content">
                        <?php include_once 'galeriaFotos/fotosProd.php';?>
                        <br/>
                        <?php include 'tabProd.php';?>
                    </div>
                </div>
            </div>
        </div>
        <div style="clear:both"/>
        <div id="bottom">
            <?php include 'piePagina.php'; ?>
        </div>
    </body>
</html>
