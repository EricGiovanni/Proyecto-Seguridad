<?php
	session_start();
	$user = $_SESSION['Usuario'];
	if(!$_SESSION['Usuario'] || $_SESSION['Usuario'] == '') 
		header("Location:Login.php");
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<form action = "Prac5p.php" method = "POST">
			<input name = "cuenta" type = "text"  placeholder = "Escribe una cadena"/><br/>
			<input name = "llave" type = "text" placeholder = "Llave, may&uacute;sculas o n&uacute;meros"><br/>
			Cifrar<input name = "cod" type = "radio" value = "0"/>
			Descifrar<input name = "cod" type = "radio" value = "1"/><br/>
			<input type = "submit" name = "Enviar"><br/>
		</form>
		<a href = "Practicas.php">Regresar</a>
	</body>
</html>