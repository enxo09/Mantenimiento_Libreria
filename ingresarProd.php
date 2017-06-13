<?php

  session_start();
  if($_SESSION["logueado"] == 2) {


  require 'header2.php';





?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ingresar Producto</title>
  </head>
  <body>
    <div class="form">
      <fieldset>
            <legend>Ingresar Producto</legend>
              <table border="0">
                <form class="productos" action="consultaProd.php" method="post">
                  <tr>
                    <td>Codigo:</td>
                    <td><input type="text" name="codigo" value="" required></td>
                  </tr>
                <tr>
                  <td>Nombre:</td>
                  <td><input type="text" name="nombre" value="" required></td>
                </tr>
                <tr>
                  <td>Tipo:</td>
                  <td><input type="text" name="tipo" value="" required></td>
                </tr>
                <tr>
                  <td>Precio:</td>
                  <td><input type="text" name="precio" value="" required></td>
                </tr>
                <tr>
                  <td>Cantidad:</td>
                  <td><input type="text" name="cantidad" value="" required></td>
                </tr>
                <tr>
                  <td>Tipo Contenedor:</td>
                  <td><input type="text" name="contenedor" value="" required></td>
                </tr>
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
      <?php

      include "conexion_bd.php";
      mysqli_select_db($con,"multilibrosbd");



$result=mysqli_query($con,"SELECT * FROM productos ORDER BY nombre;");

echo "<style>
#resul{color:white; width:97%; height:10px; margin:10px 10px 10px 10px; background-color:#333; border-color:skyblue; font-family:arial; font-size:14px; padding:5px; float:right; position:relative;}
a{color:skyblue;}</style>";

echo "<table id='resul' border=1 align='center'>
<tr>
<td><b>codigo</b></td>
<td><b>nombre</b></td>
<td><b>tipo</b></td>
<td><b>precio</b></td>
<td><b>cantidad</b></td>
<td><b>contenedor</b></td>

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
