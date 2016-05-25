<!DOCTYPE html>
<html>
	<head>
		<title>Iniciar Sesión</title>
		<meta charset = "UTF-8"/>
		<?php
			session_start();
			if(isset($_SESSION['Usuario'])) 
				header("Location:Practicas.php");
			$_SESSION['clave'] = md5(uniqid(mt_rand(),true));
		?>
	</head>
	<body>
		<h1>Iniciar Sesión</h1>
		<form action = "Inicia.php" method = "POST">
			Usuario: <input type = "text" name = "user" placeholder = "Usuario"><br/>
			Contraseña: <input type = "password" name = "pass" placeholder = "Contraseña"><br/>
			<input type = "hidden" name = "csrf" value = "<?php echo $_SESSION['clave']; ?>">
			<input type = "submit" value = "Enviar" name = "Inicia"/>
		</form><br/><br/><br/>
		
		<h1>Registro</h1>
		<form action = "Registro.php" method = "POST">
			Usuario: <input type = "text" name = "User" required placeholder = "Usuario" maxlength = "15" pattern = "[A-z]{1,15}"> Solo debe contener letras<br/>
			Contraseña: <input type = "password" name = "Pass" required placeholder = "Contraseña" maxlength = "15" pattern = "^(?=.*[A-z])(?=.*\d).{6,15}$">
			Debe contener letras y números. Mínimo 6 carácteres<br/>
			Confirmar contraseña: <input type = "password" name = "Confirm" required placeholder = "Contraseña" maxlength = "15"><br/>
			<input type="hidden" name="csrf" value= "<?php echo $_SESSION['clave']; ?>">
			<input type = "submit" value = "Enviar" name = "Register">
		</form>
	</body>
</html>