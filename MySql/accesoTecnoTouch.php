<?php

include 'mySql.php';

class accesoTecnoTouch {


    public function obtenerItems() {
        $db = mySql::getInstance();
        $db->setQuery("SELECT * FROM item");
        return $db->loadObjectList();

    }

    public function obtenerProductosDestacados() {

        $db = mySql::getInstance();
        $db->setQuery("SELECT * FROM producto where destacado = 1");
        return $db->loadObjectList();
    }

    public function obtenerMenu() {
        $db = mysql::getInstance();
        $db->setQuery("select id_menu, nombre from menu");
        return $db->loadObjectList();
    }
    

    public function obtenerItemPorIdMenu($idMenu) {
        $db = mysql::getInstance();
        $db->setQuery("select i.id_item, i.nombre as nombre from tiene_item ti
                        inner join item i on i.id_item = ti.id_item
                        where ti.id_menu = $idMenu");
        return $db->loadObjectList();
    }

    public function obtenerProductosPorIdItem($idItem) {
        $db = mysql::getInstance();
        $db->setQuery("select tp.id_item, p.* from tiene_producto tp
                        inner join producto p on p.id_producto = tp.id_producto
                        where tp.id_item =$idItem");
        return $db->loadObjectList();
    }

    public function obtenerProductoPorID($idProd) {
        $db = mySql::getInstance();
        $db->setQuery("SELECT * FROM producto where id_producto = $idProd");
        return $db->loadObject();
    }


    public function insertarDetCotizacion($idProd, $idCot, $cantidad) {
        $db = mySql::getInstance();
        $db->setQuery("insert into det_cotizacion (`id_producto`,`id_cotizacion`, `cantidad`) values ($idProd,'$idCot',$cantidad)");
        return $db->execute();
    }

    public function insertarCotizacion($idSession,$total,$ticket) {
        $db = mySql::getInstance();
        $db->setQuery("INSERT INTO cotizacion (`id_session`, `total`, `ticket`) VALUES ('$idSession', $total, '$ticket')
                        ON DUPLICATE KEY UPDATE id_session='$idSession', total=$total");
        return $db->execute();

    }

    public function borrarDetCotizacion($idTicket) {
        $db = mySql::getInstance();
        $db->setQuery("delete from det_cotizacion where id_cotizacion = '$idTicket'");
        return $db->execute();
    }


}
?>
