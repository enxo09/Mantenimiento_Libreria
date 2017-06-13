<?php
session_start();
  if($_SESSION["logueado"] == TRUE) {

    require 'header2.php';
 ?>

<!DOCTYPE html>
<html>
  <head>
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
              <td>Departamento:</td>
              <td><select class="" name="dep">
                <option value="1">Santa Ana</option>
                <option value="2">San Salvador</option>
                <option value="3">San Miguel</option>
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

    </div>
    <footer>Plataforma Desarrollo Web - Derechos Reservados 2017</footer>
  </body>
</html>
<?php
} else {
  header("Location: index.php");
}

?>
