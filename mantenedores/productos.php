<html>
    <head>
        <link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
        <link href="scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />
        <script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
        <script src="Scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="PeopleTableContainer" style="width: 99%;"></div>

        <?php



        include_once '../MySql/accesoTecnoTouch.php';
        $acces = new accesoTecnoTouch();
        $listaItem = $acces->obtenerItems();

echo"<br/>";

        echo"<script type=\"text/javascript\">";
        echo"   $(document).ready(function () {";
        echo"        $('#PeopleTableContainer').jtable({";
        echo"            title: 'Tabla de Productos',";
        echo"            actions: {";
        echo"                listAction: 'ProductosAcciones.php?action=list',";
        echo"                createAction: 'ProductosAcciones.php?action=create',";
        echo"                updateAction: 'ProductosAcciones.php?action=update',";
        echo"                deleteAction: 'ProductosAcciones.php?action=delete'";
        echo"            },";
        echo"            fields: {";
        echo"                id_producto: {";
        echo"                    key: true,";
        echo"                    title: 'ID',";
        echo"                    width: '5%',";
        echo"                    create: true,";
        echo"                    edit: false,";
        echo"                    list: false";
        echo"                },";
        echo"                nombre_corto: {";
        echo"                    title: 'Nombre Corto',";
        echo"                    width: '20%'";
        echo"                },";
        echo"                nombre_largo: {";
        echo"                    title: 'Nombre Largo',";
        echo"                    width: '30%'";
        echo"                },";
        echo"                precio: {";
        echo"                    title: 'Precio',";
        echo"                    width: '10%'";
        echo"                },";
        echo"                destacado:{";
        echo"                    title: 'Destacado',";
        echo"                    width: '10%'";
        echo"                },";
        echo"                url_imagen:{";
        echo"                    title: 'URL Imgen Principal',";
        echo"                    width: '30%'";
        echo"                },";
        echo"                cantidad:{";
        echo"                    title: 'Cantidad',";
        echo"                    width: '10%'";
        echo"                },";

        echo"                id_item:{";
        echo"                    title: 'Sub Menu',";
        echo"                    width: '15%',";
        echo"                    options: {";
        $i = 0;
        $totalItem = count($listaItem);
        foreach($listaItem as $item){
            $i++;
            if($i == $totalItem){
        echo"        $item->id_item: '$item->nombre'";
            }else{
        echo"        $item->id_item: '$item->nombre',";
            }
        }
        echo"                               },";
        echo"                    list: true";
        echo"                },";

        echo"                vigente:{";
        echo"                    title: 'Vigente',";
        echo"                    width: '10%',";
        echo"                    options: { 0: 'Desactivado', 1: 'Activado' },";
        echo"                    list: true";
        echo"                }";
        echo"            }";
        echo"        });";
        echo"        $('#PeopleTableContainer').jtable('load');";
        echo"    });";
        echo"</script>";
        ?>
        <!--
        <script type="text/javascript">

            $(document).ready(function () {

                //Prepare jTable
                $('#PeopleTableContainer').jtable({
                    title: 'Tabla de Productos',
                    actions: {
                        listAction: 'ProductosAcciones.php?action=list',
                        createAction: 'ProductosAcciones.php?action=create',
                        updateAction: 'ProductosAcciones.php?action=update',
                        deleteAction: 'ProductosAcciones.php?action=delete'
                    },
                    fields: {
                        id_producto: {
                            key: true,
                            title: 'ID',
                            width: '5%',
                            create: true,
                            edit: true,
                            list: true
                        },
                        nombre_corto: {
                            title: 'Nombre Corto',
                            width: '20%'
                        },
                        nombre_largo: {
                            title: 'Nombre Largo',
                            width: '30%'
                        },
                        precio: {
                            title: 'Precio',
                            width: '10%'
                        },
                        destacado:{
                            title: 'Destacado',
                            width: '10%'
                        },
                        url_imagen:{
                            title: 'URL Imgen Principal',
                            width: '30%'
                        },
                        cantidad:{
                            title: 'Cantidad',
                            width: '10%'
                        },
                        vigente:{
                            title: 'Vigente',
                            width: '10%',
                            options: { 0: 'Desactivado', 1: 'Activado' },
                            list: true
                        }

                    }
                });

                //Load person list from server
                $('#PeopleTableContainer').jtable('load');

            });

        </script>
        -->
    </body>
</html>
