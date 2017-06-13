
<?php
	//session_start();

	if(isset($_POST["enviar"])) {



		require("conexion_bd.php");
		mysqli_select_db($con,"multilibrosbd");

		$loginNombre = trim($_POST["usuario"]);
		$loginPassword = trim($_POST["password"]);

		password_hash($loginPassword, PASSWORD_BCRYPT);

		$consulta = "select nombre,pass,rol from users where nombre='$loginNombre' and pass='$loginPassword';";

		if($resultado = $con->query($consulta)) {
			while($row = $resultado->fetch_array()) {

				$userok = $row["nombre"];
				$passok = $row["pass"];
				$rol= $row["rol"];
			}
			$resultado->close();
		}
		$con->close();





/*

			$loginNombre = trim($_POST["usuario"]);
			$loginPassword = md5(trim($_POST["password"]));


			$consulta = "select nombre,pass from users where nombre='$loginNombre' and pass='$loginPassword';";

			if($resultado = $con->query($consulta)) {
				while($row = $resultado->fetch_array()) {

					$userok = $row["usuario"];
					$passok = $row["password"];
				}
				$resultado->close();
			}
			$con->close();

*/


			if(isset($loginNombre) && isset($loginPassword)) {

				if($loginNombre == $userok && $loginPassword == $passok) {

					if ($rol=='1') {

						session_start();
						$_SESSION["logueado"] = $rol;
						header("Location: usuarios.php");

						exit();
					}
					else{

							session_start();
							$_SESSION["logueado"] = $rol;
							header("Location: ingresarProd.php");
							exit();
						}



				}
				else {
					Header("Location: index.php?error=login");


				}

			}

		} else {
				header("Location: index.php");

		}

 ?>
