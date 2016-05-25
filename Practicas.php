<?php
	session_start();
	$user = $_SESSION['Usuario'];
	if(!$_SESSION['Usuario'] || $_SESSION['Usuario'] == '') 
		header("Location:Login.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Practicas</title>
	</head>
	<body>
		<?php 
			echo '<p>Bienvenido '.$user.'</p>'; 
		?>
		<a href = "Prac1.php">Práctica 1</a><br/>
		<a href = "Prac2.php">Práctica 2</a><br/>
		<a href = "Prac3.php">Práctica 3</a><br/>
		<a href = "Prac4.php">Práctica 4</a><br/>
		<a href = "Prac5.php">Práctica 5</a><br/>
		<a href = "Prac6.php">Práctica 6</a><br/>
		<a href = "Prac7.php">Práctica 7</a><br/>
		<a href = "Prac8.php">Práctica 8</a><br/>
		<a href = "Prac9.php">Práctica 9</a><br/>
		<a href = "Tarea1.php">Tarea 1</a><br/>
		<a href = "Tarea2.php">Tarea 2</a><br/>
		<form action = "Cierra.php">
			<input type = "submit" value = "Cerrar Sesión" name = "Cerrar"/>
		</form>
	</body>
</html>