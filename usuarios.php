<?php
  session_start();
  if($_SESSION["logueado"] == 1) {

    require 'header.php';
 ?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="js/jqueryMessage/src/main/resources/css/jquery.toastmessage.css">
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/jqueryMessage/src/main/javascript/jquery.toastmessage.js"></script>
    <meta charset="utf-8">
    <title>Administracion</title>
  </head>
  <body>
    <div class="form">
      <fieldset>
        <legend>Ingresar Cliente/Usuario</legend>
          <table border="0">
            <form class="datosPersonales" action="consultasbd.php" method="post">
              <tr>
                <td>DUI:</td>
                <td><input type="text" name="dui" value="" required></td>
              </tr>
            <tr>
              <td>Nombre:</td>
              <td><input type="text" name="nombre" value="" required></td>
            </tr>
            <tr>
              <td>Apellido:</td>
              <td><input type="text" name="apellido" value="" required></td>
            </tr>
            <tr>
              <td>E-mail:</td>
              <td><input type="mail" name="mail" value="" required></td>
            </tr>
            <tr>
              <td>Telefono:</td>
              <td><input type="text" name="telefono" value="" required></td>
            </tr>
            <tr>
              <td>password login:</td>
              <td><input type="password" name="pass" value="" required></td>
            </tr>
            <tr>
              <td>Zona Pais:</td>
              <td><select class="" name="dep">
                <option value="Occidental">Occidental</option>
                <option value="Central">Central</option>
                <option value="Oriental">Oriental</option>
              </select></td>
            </tr>
            <tr>
              <td>Seleccione rol:</td>
              <td><select class="" name="rol">
                  <option value="1">Administrador</option>
                  <option value="2">Vendedor</option>
            </select>
            </td>
            </tr>
            <tr>
              <td>Genero:</td>
              <td>Masculino&nbsp;<input type="checkbox" name="gen" value="m"></td>
            </tr>
            <tr>
              <td></td>
              <td>Femenino&nbsp;<input type="checkbox" name="gen" value="f"></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="reset" name="Limpiar" value="Limpiar" onclick="showMessage()">&nbsp;&nbsp;&nbsp;<input type="submit" name="Enviar" value="Enviar" onclick="mensaje()"></td>
            </tr>
            </form>
          </table>
      </fieldset>
    </div>
    <div class="form2">
      <div class="otro">

      </div>
      <h2 align="center">Clientes Registrados</h2>
      <?php

      include "conexion_bd.php";
      mysqli_select_db($con,"multilibrosbd");



$result=mysqli_query($con,"SELECT dui,nombre,apellido,email,telefono,gen FROM users ORDER BY nombre");
echo "<style>
#resul{color:white; width:97%; height:10px; margin:10px 10px 10px 10px; background-color:#333; border-color:skyblue; font-family:arial; font-size:14px; padding:5px; float:right; position:relative;}
a{color:skyblue;}</style>";
echo "<table border='1' id='resul'>
<tr>
<td><b>DUI</b></td>
<td><b>Nombre</b></td>
<td><b>Apellido</b></td>
<td><b>Email</b></td>
<td><b>Telefono</b></td>
<td><b>Genero</b></td>
<td><b>Mantenimiento</b></td>


</tr>";
while($row=mysqli_fetch_row($result))
{
echo "<tr>
<td>$row[0]</td>
<td>$row[1]</td>
<td>$row[2]</td>
<td>$row[3]</td>
<td>$row[4]</td>
<td>$row[5]</td>
<td><a href=\"actualizar.php?dni=$row[2]\">Actualizar</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href=\"borraruser.php?dni=$row[2]\">Eliminar</a></td>
</tr>";
}
echo"</table>";
include "cerrarConnBD.php";



       ?>
    </div>
    <footer>Plataforma Desarrollo Web - Derechos Reservados 2017</footer>
  </body>
</html>
<?php
} else {
  header("Location: errorUser.php");
}

?>
