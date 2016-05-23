<?php
	session_start();
	$user = $_SESSION['Usuario'];
	if(!$_SESSION['Usuario'] || $_SESSION['Usuario'] == '') 
		header("Location:Login.html");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Practicas</title>
	</head>
	<body>
		<?php 
			echo '<script>alert("Bienvenido '.$user.'")</script>'; 
		?>
		<a href = "Prac1.html">Práctica 1</a><br/>
		<a href = "Prac2.html">Práctica 2</a><br/>
		<a href = "Prac3.html">Práctica 3</a><br/>
		<a href = "Prac4.html">Práctica 4</a><br/>
		<a href = "Prac5.html">Práctica 5</a><br/>
		<a href = "Prac6.html">Práctica 6</a><br/>
		<a href = "Prac7.html">Práctica 7</a><br/>
		<a href = "Prac8.html">Práctica 8</a><br/>
		<a href = "Prac9.html">Práctica 9</a><br/>
		<a href = "Tarea1.html">Tarea 1</a><br/>
		<a href = "Tarea2.html">Tarea 2</a><br/>
		<a href = "Tarea3.html">Tarea 3(Extra)</a><br/>
		<form action = "Cierra.php">
			<input type = "submit" value = "Cerrar Sesión" name = "Cerrar"/>
		</form>
	</body>
</html>