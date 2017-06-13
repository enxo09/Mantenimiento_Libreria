<?php

require("var_conexion.php");

//Conexion a la base de datos.
$con=mysqli_connect($host,$user,$pass) or die("<script>alert('No se pudo conectar a la base de datos');</script>");

if ($con) {
//  echo "<script>alert('conexion exitosa a la base de datos');</script>";
}else {
  echo "<script>alert('No se pudo conectar a la base de datos');</script>";
  echo "Error: ".mysql_errno."<br />";
  echo "Debug: ".mysql_error;
}


 ?>
