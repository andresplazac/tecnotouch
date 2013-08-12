<?php

try {
    //Open database connection
    $con = mysql_connect("localhost","root","");
    mysql_select_db("tecnotouch", $con);

    //Getting records (listAction)
    if($_GET["action"] == "list") {
        //Get records from database
        $result = mysql_query("SELECT tp.id_item, p.* FROM producto p
                    left join tiene_producto tp on tp.id_producto = p.id_producto");

        //Add all records to an array
        $rows = array();
        while($row = mysql_fetch_array($result)) {
            $rows[] = $row;
        }

        //Return result to jTable
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['Records'] = $rows;
        print json_encode($jTableResult);
    }
    //Creating a new record (createAction)
    else if($_GET["action"] == "create") {
        //Insert record into database
        //
        $result = mysql_query("INSERT INTO producto
            ( `codigo`, `nombre_corto`, `nombre_largo`, `precio`, `destacado`, `url_imagen`, `cantidad`, `vigente`) VALUES
            ('".$_POST["codigo"]."','".$_POST["nombre_corto"]."','".$_POST["nombre_largo"]."',"
                .$_POST["precio"].",".$_POST["destacado"].",'".$_POST["url_imagen"]."',".$_POST["cantidad"].",".$_POST["vigente"].");");
        
        $result = mysql_query("INSERT INTO `tiene_producto` (`id_item`, `id_producto`) VALUES (".$_POST["id_item"]." ,(SELECT max(id_producto) FROM tecnotouch.producto));");
        //Get last inserted record (to return to jTable)
        $result = mysql_query("SELECT tp.id_item, p.* FROM producto p
                    left join tiene_producto tp on tp.id_producto = p.id_producto
                where p.id_producto = (SELECT max(id_producto) FROM tecnotouch.producto)");
        
        $row = mysql_fetch_array($result);

        //Return result to jTable
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        $jTableResult['Record'] = $row;
        print json_encode($jTableResult);
    }
    //Updating a record (updateAction)
    else if($_GET["action"] == "update") {
        //Update record in database
        $result = mysql_query("UPDATE producto SET
            codigo = '" . $_POST["codigo"] . "',
            nombre_corto = '" . $_POST["nombre_corto"] . "',
            nombre_largo = '" . $_POST["nombre_largo"] . "',
            precio = " . $_POST["precio"] . ",
            destacado = " . $_POST["destacado"] . ",
            url_imagen = '" . $_POST["url_imagen"] . "',
            cantidad = " . $_POST["cantidad"] . ",
            vigente = " . $_POST["vigente"] . "
            WHERE id_producto = " . $_POST["id_producto"] . ";");

        //Return result to jTable
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        print json_encode($jTableResult);
    }
    //Deleting a record (deleteAction)
    else if($_GET["action"] == "delete") {
        //Delete from database
        $result = mysql_query("DELETE FROM producto WHERE id_producto = " . $_POST["id_producto"] . ";");

        //Return result to jTable
        $jTableResult = array();
        $jTableResult['Result'] = "OK";
        print json_encode($jTableResult);
    }

    //Close database connection
    mysql_close($con);

}
catch(Exception $ex) {
    //Return error message
    $jTableResult = array();
    $jTableResult['Result'] = "ERROR";
    $jTableResult['Message'] = $ex->getMessage();
    print json_encode($jTableResult);
}

?>