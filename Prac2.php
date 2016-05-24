<?php
	session_start();
	$user = $_SESSION['Usuario'];
	if(!$_SESSION['Usuario'] || $_SESSION['Usuario'] == '') 
		header("Location:Login.html");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Playfair-n</title>
	</head>
	<body>
		<h1>Cifrar o descifrar</h1>
		<form action = "Prac2p.php" method = "POST">
			<input type = "text" placeholder = "Texto a cifrar o descifrar" name = "Texto" pattern = "^[A-z]{1,}$" maxlength = "100"/><br/>
			<input type = "text" placeholder = "Número" name = "Numero" pattern = "^[0-9]{1,3}$" maxlength  = "3"/><br/>
			<input type = "radio" name = "Fair" value = "0">Cifrar
			<input type = "radio" name = "Fair" value = "1">Descifrar<br/>
			<input type = "submit" name = "Enviar"/><br/>
		</form>
	</body>
</html>