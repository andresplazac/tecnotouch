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
                        <?php include 'tablaCarrito.php';?>
                        <!-- Contenido -->
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

