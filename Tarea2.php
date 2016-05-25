<?php
	session_start();
	$user = $_SESSION['Usuario'];
	if(!$_SESSION['Usuario'] || $_SESSION['Usuario'] == '') 
		header("Location:Login.php");
?>
<!DOCTPYE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>TARJETA VISA</title>
	</head>
	<body>
		<form action = "Tarea2p.php" method = "POST">
			N&uacute;mero de tarjeta: <input type = "text" name = "VISA" placeholder = "N&uacute;mero de tu tarjeta" pattern = "[4]{1}[0-9]{9,}" required/><br/>
			<input type = "submit" name = "Enviar" value = "Enviar"/>
		</form>
		<a href = "Practicas.php">Regresar</a>
	</body>
</html>