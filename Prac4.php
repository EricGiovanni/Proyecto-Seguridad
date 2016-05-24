<?php
	session_start();
	$user = $_SESSION['Usuario'];
	if(!$_SESSION['Usuario'] || $_SESSION['Usuario'] == '') 
		header("Location:Login.html");
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<form action = "Prac4p.php" method = "POST">
			<input name = "cuenta" type = "text" placeholder = "Escribe una cadena de texto"/><br/>
			Cifrar<input name = "cod" type = "radio" value = "0"/>
			Descifrar<input name = "cod" type = "radio" value = "1"/><br/>
			<input type = "submit" name = "Enviar">
		</form>
	</body>
</html>