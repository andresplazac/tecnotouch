-- MySQL dump 10.13  Distrib 5.5.21, for osx10.6 (i386)
--
-- Host: localhost    Database: tecnotouch
-- ------------------------------------------------------
-- Server version	5.5.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cotizacion`
--

DROP TABLE IF EXISTS `cotizacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cotizacion` (
  `id_session` varchar(40) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `ticket` varchar(20) NOT NULL,
  PRIMARY KEY (`ticket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cotizacion`
--

LOCK TABLES `cotizacion` WRITE;
/*!40000 ALTER TABLE `cotizacion` DISABLE KEYS */;
INSERT INTO `cotizacion` VALUES ('brufh3uk38qtuao61l9lghe0b1',0,''),('2',3,'23'),('1',3,'3'),('1bc069nlp138ld5o72bpqfcavr5',3,'3anjy7ja8x6'),('jv06t808e866547pv124cl6su0',399990,'93r02vdmkw'),('bc069nlp138ld5o72bpqfcavr5',16,'anjy7ja8x6'),('l1b1s6sqanfs7agmfe55j253u2',1,'gj13ymuyji'),('ncq5ico6klenth9alti5tk4du4',14,'itoc2fukt2');
/*!40000 ALTER TABLE `cotizacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `det_cotizacion`
--

DROP TABLE IF EXISTS `det_cotizacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `det_cotizacion` (
  `iddet_cotizacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) DEFAULT NULL,
  `id_cotizacion` varchar(20) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`iddet_cotizacion`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `det_cotizacion`
--

LOCK TABLES `det_cotizacion` WRITE;
/*!40000 ALTER TABLE `det_cotizacion` DISABLE KEYS */;
INSERT INTO `det_cotizacion` VALUES (4,1,'0',3),(5,7,'0',1),(6,4,'0',12),(7,1,'0',10),(11,1,'asdasd',10),(15,1,'itoc2fukt2',1),(16,3,'itoc2fukt2',2),(17,1,'itoc2fukt2',1),(18,4,'itoc2fukt2',10),(67,1,'anjy7ja8x6',3),(68,7,'anjy7ja8x6',1),(69,4,'anjy7ja8x6',12),(71,1,'gj13ymuyji',1),(72,1,'93r02vdmkw',1);
/*!40000 ALTER TABLE `det_cotizacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item` (
  `id_item` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_item`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item`
--

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` VALUES (1,'Apple',NULL),(2,'Toshiba',NULL),(3,'Dell',NULL),(4,'Acer',NULL),(5,'Compaq',NULL),(6,'Samsung',NULL),(7,'Iphone Apple',NULL),(8,'Samsung Galaxy',NULL),(9,'Apple ',NULL),(10,'Manos Libres',NULL),(11,NULL,NULL),(12,'Banda Ancha',NULL),(13,'Insumos oficina',NULL),(14,'Cargadores Notebook',NULL),(15,'Discos Externos',NULL),(16,'Discos Internos',NULL),(17,'PENDRIVE USB',NULL),(18,'Apple',NULL),(19,'Epad',NULL);
/*!40000 ALTER TABLE `item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES (1,'Notebook',NULL),(2,'Telefonía',NULL),(3,'Accesorio Telefonía',NULL),(4,'Chip Telefonía ',NULL),(5,'Accesorios Com.',NULL),(6,'Almacenamiento',NULL),(7,'Tablet',NULL);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(20) DEFAULT NULL,
  `nombre_corto` varchar(50) DEFAULT NULL,
  `nombre_largo` varchar(150) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `destacado` smallint(6) DEFAULT NULL,
  `url_imagen` varchar(100) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `vigente` int(11) DEFAULT '1',
  `imagen1` varchar(100) DEFAULT NULL,
  `imagen2` varchar(100) DEFAULT NULL,
  `imagen3` varchar(100) DEFAULT NULL,
  `imagen4` varchar(100) DEFAULT NULL,
  `imagen5` varchar(100) DEFAULT NULL,
  `caracteristicas` text,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES (1,NULL,'Iphone 5g','Iphone 5g de 16 gb',399990,1,'http://www.globalavl.com/images/stories/iphone-gps-tracker-software.jpg',4,1,'hh',NULL,NULL,NULL,NULL,'Nombre del producto: PlayStation 3 Ultra Slim <br/>CPU: Cell Broadband Engine <br/>GPU: RSX <br/>Salida de audio: LPCM 7.1ch, Dolby Digital, Dolby Digital Plus, Dolby TrueHD, DTS, DTS-HD, AAC. <br/>Memoria: 256 MB de memoria RAM principal XDR, 256 MB GDDR3 VRAM <br/> Disco duro: 2.5 Serial ATA  250 GB'),(2,'','PENDRIVE Kingston','PENDRIVE Kingston Datatraveler 101',40000,0,'http://www.globalavl.com/images/stories/iphone-gps-tracker-software.jpg',4,1,NULL,NULL,NULL,NULL,NULL,'Nombre del producto: PlayStation 3 Ultra Slim <br/>CPU: Cell Broadband Engine <br/>GPU: RSX <br/>Salida de audio: LPCM 7.1ch, Dolby Digital, Dolby Digital Plus, Dolby TrueHD, DTS, DTS-HD, AAC. <br/>Memoria: 256 MB de memoria RAM principal XDR, 256 MB GDDR3 VRAM <br/> Disco duro: 2.5 Serial ATA  250 GB'),(3,NULL,'Ipod Touch','Ipod Touch 8gb 4ta Generación',39999,0,'http://www.globalavl.com/images/stories/iphone-gps-tracker-software.jpg',10,1,NULL,NULL,NULL,NULL,NULL,'Nombre del producto: PlayStation 3 Ultra Slim <br/>CPU: Cell Broadband Engine <br/>GPU: RSX <br/>Salida de audio: LPCM 7.1ch, Dolby Digital, Dolby Digital Plus, Dolby TrueHD, DTS, DTS-HD, AAC. <br/>Memoria: 256 MB de memoria RAM principal XDR, 256 MB GDDR3 VRAM <br/> Disco duro: 2.5 Serial ATA  250 GB'),(4,NULL,'Camara Olympus','Camara Fotográfica Olympus VG - 120',23000,0,'http://www.steves-digicams.com/camera-reviews/olympus_VG120_550.jpg',12,1,NULL,NULL,NULL,NULL,NULL,'Nombre del producto: PlayStation 3 Ultra Slim <br/>CPU: Cell Broadband Engine <br/>GPU: RSX <br/>Salida de audio: LPCM 7.1ch, Dolby Digital, Dolby Digital Plus, Dolby TrueHD, DTS, DTS-HD, AAC. <br/>Memoria: 256 MB de memoria RAM principal XDR, 256 MB GDDR3 VRAM <br/> Disco duro: 2.5 Serial ATA  250 GB'),(5,NULL,'SmartCover','Funda Smartcover Marca Apple',22345,0,'http://www.globalavl.com/images/stories/iphone-gps-tracker-software.jpg',11,1,NULL,NULL,NULL,NULL,NULL,'Nombre del producto: PlayStation 3 Ultra Slim <br/>CPU: Cell Broadband Engine <br/>GPU: RSX <br/>Salida de audio: LPCM 7.1ch, Dolby Digital, Dolby Digital Plus, Dolby TrueHD, DTS, DTS-HD, AAC. <br/>Memoria: 256 MB de memoria RAM principal XDR, 256 MB GDDR3 VRAM <br/> Disco duro: 2.5 Serial ATA  250 GB'),(6,'','Receptor Azfox','Receptor fta Azfox 2S2',10000,0,'http://www.globalavl.com/images/stories/iphone-gps-tracker-software.jpg',3,0,NULL,NULL,NULL,NULL,NULL,'Nombre del producto: PlayStation 3 Ultra Slim <br/>CPU: Cell Broadband Engine <br/>GPU: RSX <br/>Salida de audio: LPCM 7.1ch, Dolby Digital, Dolby Digital Plus, Dolby TrueHD, DTS, DTS-HD, AAC. <br/>Memoria: 256 MB de memoria RAM principal XDR, 256 MB GDDR3 VRAM <br/> Disco duro: 2.5 Serial ATA  250 GB'),(7,'','Epad 2gb','Epad 2gb',1200,0,'http://www.globalavl.com/images/stories/iphone-gps-tracker-software.jpg',3,0,NULL,NULL,NULL,NULL,NULL,'Nombre del producto: PlayStation 3 Ultra Slim <br/>CPU: Cell Broadband Engine <br/>GPU: RSX <br/>Salida de audio: LPCM 7.1ch, Dolby Digital, Dolby Digital Plus, Dolby TrueHD, DTS, DTS-HD, AAC. <br/>Memoria: 256 MB de memoria RAM principal XDR, 256 MB GDDR3 VRAM <br/> Disco duro: 2.5 Serial ATA  250 GB'),(53,'','pkjhjkhjkh','p',1100,1,'IMAGEN.jpg',5,1,NULL,NULL,NULL,NULL,NULL,'Nombre del producto: PlayStation 3 Ultra Slim <br/>CPU: Cell Broadband Engine <br/>GPU: RSX <br/>Salida de audio: LPCM 7.1ch, Dolby Digital, Dolby Digital Plus, Dolby TrueHD, DTS, DTS-HD, AAC. <br/>Memoria: 256 MB de memoria RAM principal XDR, 256 MB GDDR3 VRAM <br/> Disco duro: 2.5 Serial ATA  250 GB'),(54,'','a','a',12,1,'imagen.jpg',12,1,NULL,NULL,NULL,NULL,NULL,'Nombre del producto: PlayStation 3 Ultra Slim <br/>CPU: Cell Broadband Engine <br/>GPU: RSX <br/>Salida de audio: LPCM 7.1ch, Dolby Digital, Dolby Digital Plus, Dolby TrueHD, DTS, DTS-HD, AAC. <br/>Memoria: 256 MB de memoria RAM principal XDR, 256 MB GDDR3 VRAM <br/> Disco duro: 2.5 Serial ATA  250 GB'),(55,'','a','b',10,1,'imagen.jph',12,1,NULL,NULL,NULL,NULL,NULL,'Nombre del producto: PlayStation 3 Ultra Slim <br/>CPU: Cell Broadband Engine <br/>GPU: RSX <br/>Salida de audio: LPCM 7.1ch, Dolby Digital, Dolby Digital Plus, Dolby TrueHD, DTS, DTS-HD, AAC. <br/>Memoria: 256 MB de memoria RAM principal XDR, 256 MB GDDR3 VRAM <br/> Disco duro: 2.5 Serial ATA  250 GB'),(56,'','and','n',13444,1,'h',12,1,NULL,NULL,NULL,NULL,NULL,'Nombre del producto: PlayStation 3 Ultra Slim <br/>CPU: Cell Broadband Engine <br/>GPU: RSX <br/>Salida de audio: LPCM 7.1ch, Dolby Digital, Dolby Digital Plus, Dolby TrueHD, DTS, DTS-HD, AAC. <br/>Memoria: 256 MB de memoria RAM principal XDR, 256 MB GDDR3 VRAM <br/> Disco duro: 2.5 Serial ATA  250 GB'),(57,'','b','b',12,1,'a',12,1,NULL,NULL,NULL,NULL,NULL,'Nombre del producto: PlayStation 3 Ultra Slim <br/>CPU: Cell Broadband Engine <br/>GPU: RSX <br/>Salida de audio: LPCM 7.1ch, Dolby Digital, Dolby Digital Plus, Dolby TrueHD, DTS, DTS-HD, AAC. <br/>Memoria: 256 MB de memoria RAM principal XDR, 256 MB GDDR3 VRAM <br/> Disco duro: 2.5 Serial ATA  250 GB'),(58,'','a','a',1,1,'a',1,1,NULL,NULL,NULL,NULL,NULL,'Nombre del producto: PlayStation 3 Ultra Slim <br/>CPU: Cell Broadband Engine <br/>GPU: RSX <br/>Salida de audio: LPCM 7.1ch, Dolby Digital, Dolby Digital Plus, Dolby TrueHD, DTS, DTS-HD, AAC. <br/>Memoria: 256 MB de memoria RAM principal XDR, 256 MB GDDR3 VRAM <br/> Disco duro: 2.5 Serial ATA  250 GB'),(59,'','a','a',1,0,'a',1,0,NULL,NULL,NULL,NULL,NULL,'Nombre del producto: PlayStation 3 Ultra Slim <br/>CPU: Cell Broadband Engine <br/>GPU: RSX <br/>Salida de audio: LPCM 7.1ch, Dolby Digital, Dolby Digital Plus, Dolby TrueHD, DTS, DTS-HD, AAC. <br/>Memoria: 256 MB de memoria RAM principal XDR, 256 MB GDDR3 VRAM <br/> Disco duro: 2.5 Serial ATA  250 GB'),(60,'','a','b',12,1,'a',12,0,NULL,NULL,NULL,NULL,NULL,'Nombre del producto: PlayStation 3 Ultra Slim <br/>CPU: Cell Broadband Engine <br/>GPU: RSX <br/>Salida de audio: LPCM 7.1ch, Dolby Digital, Dolby Digital Plus, Dolby TrueHD, DTS, DTS-HD, AAC. <br/>Memoria: 256 MB de memoria RAM principal XDR, 256 MB GDDR3 VRAM <br/> Disco duro: 2.5 Serial ATA  250 GB'),(61,'','a','b',12,1,'ad',12,1,NULL,NULL,NULL,NULL,NULL,'Nombre del producto: PlayStation 3 Ultra Slim <br/>CPU: Cell Broadband Engine <br/>GPU: RSX <br/>Salida de audio: LPCM 7.1ch, Dolby Digital, Dolby Digital Plus, Dolby TrueHD, DTS, DTS-HD, AAC. <br/>Memoria: 256 MB de memoria RAM principal XDR, 256 MB GDDR3 VRAM <br/> Disco duro: 2.5 Serial ATA  250 GB'),(62,'','a','a',1,1,'a',1,0,NULL,NULL,NULL,NULL,NULL,'Nombre del producto: PlayStation 3 Ultra Slim <br/>CPU: Cell Broadband Engine <br/>GPU: RSX <br/>Salida de audio: LPCM 7.1ch, Dolby Digital, Dolby Digital Plus, Dolby TrueHD, DTS, DTS-HD, AAC. <br/>Memoria: 256 MB de memoria RAM principal XDR, 256 MB GDDR3 VRAM <br/> Disco duro: 2.5 Serial ATA  250 GB'),(63,'','a','a',1,1,'1',1,1,NULL,NULL,NULL,NULL,NULL,'Nombre del producto: PlayStation 3 Ultra Slim <br/>CPU: Cell Broadband Engine <br/>GPU: RSX <br/>Salida de audio: LPCM 7.1ch, Dolby Digital, Dolby Digital Plus, Dolby TrueHD, DTS, DTS-HD, AAC. <br/>Memoria: 256 MB de memoria RAM principal XDR, 256 MB GDDR3 VRAM <br/> Disco duro: 2.5 Serial ATA  250 GB'),(64,'','a','a',1,1,'d',1,0,NULL,NULL,NULL,NULL,NULL,'Nombre del producto: PlayStation 3 Ultra Slim <br/>CPU: Cell Broadband Engine <br/>GPU: RSX <br/>Salida de audio: LPCM 7.1ch, Dolby Digital, Dolby Digital Plus, Dolby TrueHD, DTS, DTS-HD, AAC. <br/>Memoria: 256 MB de memoria RAM principal XDR, 256 MB GDDR3 VRAM <br/> Disco duro: 2.5 Serial ATA  250 GB'),(65,'','a','a',1,1,'2',1,1,NULL,NULL,NULL,NULL,NULL,'Nombre del producto: PlayStation 3 Ultra Slim <br/>CPU: Cell Broadband Engine <br/>GPU: RSX <br/>Salida de audio: LPCM 7.1ch, Dolby Digital, Dolby Digital Plus, Dolby TrueHD, DTS, DTS-HD, AAC. <br/>Memoria: 256 MB de memoria RAM principal XDR, 256 MB GDDR3 VRAM <br/> Disco duro: 2.5 Serial ATA  250 GB'),(66,'','a','a',1,1,'1',1,1,NULL,NULL,NULL,NULL,NULL,'Nombre del producto: PlayStation 3 Ultra Slim <br/>CPU: Cell Broadband Engine <br/>GPU: RSX <br/>Salida de audio: LPCM 7.1ch, Dolby Digital, Dolby Digital Plus, Dolby TrueHD, DTS, DTS-HD, AAC. <br/>Memoria: 256 MB de memoria RAM principal XDR, 256 MB GDDR3 VRAM <br/> Disco duro: 2.5 Serial ATA  250 GB'),(67,'','a','a',1,1,'1',1,1,NULL,NULL,NULL,NULL,NULL,'Nombre del producto: PlayStation 3 Ultra Slim <br/>CPU: Cell Broadband Engine <br/>GPU: RSX <br/>Salida de audio: LPCM 7.1ch, Dolby Digital, Dolby Digital Plus, Dolby TrueHD, DTS, DTS-HD, AAC. <br/>Memoria: 256 MB de memoria RAM principal XDR, 256 MB GDDR3 VRAM <br/> Disco duro: 2.5 Serial ATA  250 GB'),(68,'','a','a',1,1,'1',1,1,NULL,NULL,NULL,NULL,NULL,'Nombre del producto: PlayStation 3 Ultra Slim <br/>CPU: Cell Broadband Engine <br/>GPU: RSX <br/>Salida de audio: LPCM 7.1ch, Dolby Digital, Dolby Digital Plus, Dolby TrueHD, DTS, DTS-HD, AAC. <br/>Memoria: 256 MB de memoria RAM principal XDR, 256 MB GDDR3 VRAM <br/> Disco duro: 2.5 Serial ATA  250 GB');
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tiene_item`
--

DROP TABLE IF EXISTS `tiene_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tiene_item` (
  `id_menu` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  PRIMARY KEY (`id_menu`,`id_item`),
  KEY `id_menu_tabla_menu` (`id_menu`),
  KEY `id_item_tabla_item` (`id_item`),
  CONSTRAINT `id_item_tabla_item` FOREIGN KEY (`id_item`) REFERENCES `item` (`ID_Item`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_menu_tabla_menu` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiene_item`
--

LOCK TABLES `tiene_item` WRITE;
/*!40000 ALTER TABLE `tiene_item` DISABLE KEYS */;
INSERT INTO `tiene_item` VALUES (1,1),(1,2),(1,3),(1,4),(1,5),(1,6),(2,7),(2,8),(3,9),(3,10),(4,11),(5,12),(5,13),(5,14),(6,15),(6,16),(6,17),(7,18),(7,19);
/*!40000 ALTER TABLE `tiene_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tiene_producto`
--

DROP TABLE IF EXISTS `tiene_producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tiene_producto` (
  `id_item` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  PRIMARY KEY (`id_item`,`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiene_producto`
--

LOCK TABLES `tiene_producto` WRITE;
/*!40000 ALTER TABLE `tiene_producto` DISABLE KEYS */;
INSERT INTO `tiene_producto` VALUES (1,1),(1,2),(1,3),(1,4),(1,5),(2,1),(2,2),(2,3),(2,4),(2,5),(2,6),(2,7),(2,67),(3,30),(5,68);
/*!40000 ALTER TABLE `tiene_producto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-08-12 16:03:18
