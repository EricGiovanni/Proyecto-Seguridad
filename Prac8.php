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
		<title>Hora de perder información</title>
	</head>
	<body>
		<form action = "Prac8p.php" method = "POST">
			<input type = "text" placeholder = "Ingresa lo que desees perder" name = "Pierde">
			<input type = "submit" value = "Pierdelo ahora" name = "Enviar"><br/>
		</form>
		<a href = "Practicas.php">Regresar</a>
	</body>
</html>