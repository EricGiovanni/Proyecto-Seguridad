<?php
	session_start();
	if(isset($_POST['Inicia']))
	{
		if(!isset($_POST['user']) || !isset($_POST['pass']))
			echo '<script>location.href="Login.html"</script>';
		$conexion = mysqli_connect("localhost","Eric","2324020919992015","Login");
		if(!$conexion)
			echo 'No se pudo conectar'.mysqli_connect_error();
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$consul = 'SELECT * FROM Usuarios WHERE User = "'.mysqli_real_escape_string($conexion,$user).'"';
		$query = mysqli_query($conexion,$consul);
		if($row = mysqli_fetch_array($query))
		{
			$dbhash = $row['Pass'];
			$hash = crypt($pass,$dbhash);
			if($hash == $dbhash)
			{
				$_SESSION['Usuario'] = $row['User'];
				$user = $_SESSION['Usuario'];
				echo '<script>location.href="Practicas.php"</script>';
				mysqli_close($conexion);
			}
			else
			{
				echo '<script>alert("Contraseña incorrecta")</script>';
				echo '<script>location.href="Login.html"</script>';
				mysqli_close($conexion);
			}
		}
		else
		{
			echo '<script>alert("Error");
			location.href="Login.html";
			  </script>';
			mysqli_close($conexion);
		}
	}
	else
		echo '<script>location.href="Login.html"</script>';
?>