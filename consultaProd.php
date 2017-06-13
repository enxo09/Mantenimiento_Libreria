<?php


require 'conexion_bd.php';


mysqli_select_db($con,'multilibrosbd');




$codigo=$_REQUEST["codigo"];
$nombre=$_REQUEST["nombre"];
$tipo=$_REQUEST["tipo"];
$precio=$_REQUEST["precio"];
$cantidad=$_REQUEST["cantidad"];
$contenedor=$_REQUEST["contenedor"];



$query="insert into productos values('$codigo','$nombre','$tipo','$precio','$cantidad','$contenedor');";
$verificar=mysqli_query($con,"select count(codigo) from produtos where codigo='$codigo';");

$fetch=mysqli_fetch_row($verificar);

if ($fetch[0]==0) {

    $execQuery=mysqli_query($con,$query);


    if ($execQuery) {



        echo "<script>alert('Datos Ingresados a la base de datos');</script>";
        //echo "<script>window.location='ingresarProd.php'</script>";



    }else {
        echo "Error al insertar datos";
        echo "<br />"."Motivo: ".mysqli_error($con);
        include "cerrarConnBD.php";
    }




}else {
    echo "<script>alert('DATO DUPLICADO');</script>";
    include "cerrarConnBD.php";
    //echo "<script>window.location='usuarios.php'</script>";

}



 ?>
