<?php
include "conexion_bd.php";
$accion=$_REQUEST[accion];
if (!isset($accion))
{
  $dni=$_REQUEST[dni];
  $result=mysql_query("SELECT * FROM users WHERE dui='$dui'",$conexion);
  $row=mysql_fetch_row($result);
  echo"
  <html>
    <head>
      <title>Borrar Usuario</title>
      <script language=\"javascript\">
        function cancelar()
        {
          window.open(\"usuarios.php\",\"_parent\");
        }
      </script>
    </head>
    <body>
      <h3>Borrar Usuario</h3>
      <form action=\"borrar.php?accion=guardar\" method=\"POST\">
        Nombre:<br>
        <input type=\"text\" value=\"$row[0]\" name=\"nombre\" readonly=\"readonly\"><br>
        Apellido:<br>
        <input type=\"text\" value=\"$row[1]\" name=\"apellido\" readonly=\"readonly\"><br>
        DNI:<br>
        <input type=\"text\" value=\"$row[2]\" name=\"dni\" readonly=\"readonly\"><br>
        <input type=\"submit\" value=\"Borrar\">
        <input type=\"button\" value=\"Cancelar\" onclick=\"cancelar()\" />
      </form>
    </body>
  </html>";
}elseif($accion=="guardar")
{
  $dni=$_REQUEST[dni];
  $result=mysql_query("DELETE FROM usuarios WHERE dni = ".$dni,$conexion);
  echo"
  <html>
    <head>
      <title>Borrar Usuario</title>
    </head>
    <body>
      <h3>El registro se ha borrado</h3>
      <a href=\"ver.php\">Ir a listado</a>
    </body>
  </html>";
}
include "cerrar_conexion.php";
?>
