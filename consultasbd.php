
<?php


require 'conexion_bd.php';


mysqli_select_db($con,'multilibrosbd');




$dui=$_REQUEST["dui"];
$nombre=$_REQUEST["nombre"];
$apellido=$_REQUEST["apellido"];
$email=$_REQUEST["mail"];
$telefono=$_REQUEST["telefono"];
$pass=$_REQUEST["pass"];
$departamento=$_REQUEST["dep"];
$rol=$_REQUEST["rol"];
$gen=$_REQUEST['gen'];



$query="insert into users values('$dui','$nombre','$apellido','$email','$telefono','$pass','$departamento','$rol','$gen');";
$verificar=mysqli_query($con,"select count(dui) from users where dui='$dui';");

$fetch=mysqli_fetch_row($verificar);

if ($fetch[0]==0) {

    $execQuery=mysqli_query($con,$query);


    if ($execQuery) {



        echo "<script>alert('Datos Ingresados a la base de datos');</script>";
        echo "<script>window.location='usuarios.php'</script>";



    }else {
        echo "Error al insertar datos";
        echo "<br />"."Motivo: ".mysqli_error($con);
    }
     include "cerrarConnBD.php";



}else {
    echo "<script>alert('DATO DUPLICADO EN CAMPO DUI, NO SE INGRESARON DATOS');</script>";
    echo "<script>window.location='usuarios.php'</script>";
    include "cerrarConnBD";
}



 ?>
