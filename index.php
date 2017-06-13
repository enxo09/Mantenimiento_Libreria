<?php

if(isset($_GET["error"]) && $_GET["error"] != "login") {
		header("Location: index.php");
	}



 ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Bienvenido a Multilibros</title>



      <link rel="stylesheet" href="css/style.css">


</head>

<body>
  <style media="screen">
    h1{

      font-size: 28px;
      margin-bottom: 8px;
      font-family: "impact";
    }
  </style>
  <div id="clouds">
	<div class="cloud x1"></div>
	<!-- Time for multiple clouds to dance around -->
	<div class="cloud x2"></div>
	<div class="cloud x3"></div>
	<div class="cloud x4"></div>
	<div class="cloud x5"></div>
</div>

 <div class="container">
   <h1 align="center"><b>INGRESO A MULTILIBROS</b></h1>
      <div id="login">

        <form method="post" action="login.php">

          <fieldset class="clearfix">

            <p><span class="fontawesome-user"></span><input type="text" name="usuario" placeholder="usuario" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="password" name="password" placeholder="contraseña"  required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" value="ACCEDER" name="enviar"></p>

          </fieldset>

        </form>



      </div> <!-- end login -->

    </div>



</body>
</html>
