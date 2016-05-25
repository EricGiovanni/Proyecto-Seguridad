<?php
	session_start();
	$user = $_SESSION['Usuario'];
	if(!$_SESSION['Usuario'] || $_SESSION['Usuario'] == '') 
		header("Location:Login.php");
?>
<!DOCTPYE html>
<html>
	<head>
		<meta charset = "UTF8">
		<title>ISBN</title>
	</head>
	<body>
		<form action = "Prac9p.php" method = "POST">
			<input type = "text" placeholder = "Ingresa un ISBN" name = "ISBN" maxlength = "13" pattern = "^[0-9]${10,13}"/><br/>
			ISBN-10<input name = "cod" type = "radio" value = "0"/>
			ISBN-13<input name = "cod" type = "radio" value = "1"/><br/>
			<input type = "submit" value = "Enviar" name = "Enviar"/><br/>
		</form>
		<a href = "Practicas.php">Regresar</a>
	</body>
</html>