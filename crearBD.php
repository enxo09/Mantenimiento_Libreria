<?php

  require 'conexion_bd.php';

  $query="drop database if exists multilibrosbd;";
  $execQuery=mysqli_query($con,$query);

    $query="create database multilibrosbd;";
    $execQuery=mysqli_query($con,$query);

    $query="DROP TABLE IF EXISTS `productos`;
    /*!40101 SET @saved_cs_client     = @@character_set_client */;
    /*!40101 SET character_set_client = utf8 */;
    CREATE TABLE `productos` (
      `codigo` int(11) NOT NULL,
      `nombre` varchar(25) DEFAULT NULL,
      `tipo` varchar(25) DEFAULT NULL,
      `precio` decimal(10,2) DEFAULT NULL,
      `cantidad` int(11) DEFAULT NULL,
      `contenedor` varchar(25) DEFAULT NULL,
      PRIMARY KEY (`codigo`)
    )ENGINE=InnoDB DEFAULT CHARSET=latin1;";
    $execQuery=mysqli_query($con,$query);


    $query="INSERT INTO `productos` VALUES (6464,'pan','harinas',2.00,50,'bolsa'),(9899,'dulce de leche','dulces',0.25,250,'unidades'),(12354,'jugo de naranja','bebidas',0.35,65,'botella'),(12548,'sal','sales',0.40,50,'bolsa'),(21254,'detergente','detergentes',0.25,200,'bolsa'),(25897,'aceite','aceites',2.50,40,'botella'),(45468,'frijoles','granos',2.60,62,'bolsa'),(55464,'jalea','mermeladas',0.85,40,'lata'),(55648,'jabon','detergentes',0.15,140,'caja'),(65651,'margarina','aceites',0.50,50,'barra'),(78452,'coca cola','bebidas',0.85,75,'botella'),(357895,'salsa tomate','salsas',0.75,54,'bolsa'),(953231,'leche','lacteo',1.28,100,'botella');";
    $execQuery=mysqli_query($con,$query);


    $query="DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `dui` int(11) NOT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `apellido` varchar(15) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `pass` varchar(25) DEFAULT NULL,
  `departamento` varchar(25) DEFAULT NULL,
  `rol` int(11) DEFAULT NULL,
  `gen` char(1) DEFAULT NULL,
  PRIMARY KEY (`dui`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
    $execQuery=mysqli_query($con,$query);

    $query="INSERT INTO `users` VALUES (123456,'enzo','escalante','enzo@gmail.com','123456','123456','santa ana',1,'m'),(654321,'jose','hernandez','jose.hernan@gmail.com','99999999','josehernandez','2',1,'m'),(5565161,'ana','gutierrez','gc333@gmail.com','97894561','25879','Central',1,'f'),(9841651,'maria','campos','campos099@gmail.com','98745621','mariacampos','2',2,'m'),(54646564,'juan','gomez','gomez553@gmail.com','61561611611','123','Central',2,'m');";
    $execQuery=mysqli_query($con,$query);

 ?>
