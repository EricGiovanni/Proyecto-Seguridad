<?php
	session_start();
	$user = $_SESSION['Usuario'];
	if(!$_SESSION['Usuario'] || $_SESSION['Usuario'] == '') 
		header("Location:Login.php");
	$arr = array("Hola mundo","Hola niño","Hola adulto","Hola","Hi","Hello","How are you?","Welcome","Bienvenido","Te amo");
	$a = rand(0,9);
	echo htmlspecialchars($arr[$a]);
	echo '<br/><a href = "Practicas.php">Regresar</a>';
?>