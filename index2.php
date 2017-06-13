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


  <link rel="stylesheet prefetch" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

      <link rel="stylesheet" href="css/style.css">
<!--class="form-control" placeholder="usuario" id="UserName"-->
<!--class="form-control" placeholder="contraseña" id="Passwod"-->

</head>

<body>
  <div class="login-form">
     <h1>Multilibros</h1>
     <h2>ingreso al sistema</h2>
     <form name="formulario" class="" action="login.php" method="post">
     <div class="form-group ">
       <input type="text" class="form-control" placeholder="usuario" id="UserName" name="usuario">
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group log-status">
       <input type="text" class="form-control" placeholder="contraseña" id="Passwod" name="password">
       <i class="fa fa-lock"></i>
     </div>
      <span class="alert">Usuario/Contraseña invalidos</span>
      <a class="link" href="#"></a>
     <input type="submit" class="log-btn" name="enviar"></input>


   </div>
   <?php

    ?>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/index.js"></script>
</form>
</body>
</html>
