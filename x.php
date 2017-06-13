<?php



		require("conexion_bd.php");
		mysqli_select_db($con,"multilibrosbd");

			$loginNombre = trim($_POST["usuario"]);
			$loginPassword=password_hash($_POST["password"], PASSWORD_BCRYPT);
			//$loginPassword = trim($_POST["password"]);

			$consulta = "select nombre,pass from users where nombre='$loginNombre' and pass='$loginPassword';";





			if($resultado = $con->query($consulta)) {
				while($row = $resultado->fetch_array()) {

					$userok = $row["nombre"];
					$passok = $row["pass"];
				}
				$resultado->close();
			}
			$con->close();



echo "usuario ".$loginNombre."<br />";
echo "pass ".$loginPassword."<br />";
//echo "pass ".$resul."<br />";

echo "USER ".$userok."<br />";
echo "PASSWORD ".$passok;
/*
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


 ?>
