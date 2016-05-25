<?php
session_start();
	$user = $_SESSION['Usuario'];
	if(!$_SESSION['Usuario']||$_SESSION['Usuario']=='') 
		header("Location:Sesion.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Practicas</title>
	</head>
	<body>
		<form action="Prac2p.php" method="POST">
			Ingrese texto: <input name="text" type="text" placeholder = "Texto"/><br/>
			<input type="submit" name="Enviar" value="Enviar">
		</form>
		<a href = "Practicas.php">Regresar</a>
	</body>
</html>