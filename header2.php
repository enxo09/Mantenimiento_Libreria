<?php

//include 'otras_var.php';
 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Bienvenido a multilibros</title>
  </head>
  <body>
    <div class="cuerpo">
      <div class="header">
        <div class="banner">
        </div>
          <div class="menu">
            <ul>
  <li><a href="ingresarProd.php">PRODUCTOS</a></li>
  <li class="dropdown">
    <a href="VISTAS" class="dropbtn">VISTAS</a>
    <div class="dropdown-content">
      <a href="#">BODEGAS</a>
      <a href="#">PROVEEDORES</a>
      <a href="#">STOCK</a>
      </div>
      </li>
  <li style="float:right"><a href="salir.php">SALIR</a></li>
  <?php
  echo "<li style='float:right'><a  class='active' href=''>Logueado</a></li>";
    ?>
  </ul>
</div>
      </div>
    </div>
  </body>
</html>
<?php
