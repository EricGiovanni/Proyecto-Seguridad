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
		<form action = "Prac3p.php" method = "POST">
			<input name = "cuenta" type = "text" id = "inp" placeholder = "Escribe tu numero de cuenta" pattern = "[0-9]{9}" maxlength = "9"/><br/>
			Cifrar<input name = "cod" type = "radio" value = "0"/>
			Descifrar<input name = "cod" type = "radio" value = "1"/><br/>
			<input type = "submit" name = "Enviar"><br/>
		</form>
		<a href = "Practicas.php">Regresar</a>
	</body>
</html>