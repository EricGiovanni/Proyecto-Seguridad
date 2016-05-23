<?php
	if(isset($_POST['Register']))
	{
		function hash_password($pass, $sal) 
		{
			$hash = hash_hmac('SHA512', $password, $salt);
			for ($i = 0; $i < 5000; $i++) 
			{
				$hash = hash_hmac('SHA512', $hash, $salt);
			}
			return $hash;
		}
		$user = $_POST['User'];
		$pass = $_POST['Pass'];
		$confirm = $_POST['Confirm'];
		if($pass == $confirm)
		{
			if(preg_match('/[A-z]{1,15}/',$user) && $user != '')
			{
				if(preg_match('/^(?=.*[A-z])(?=.*\d).{6,15}$/',$pass) && $pass != '')
				{
					$conexion = mysqli_connect("localhost","Eric","2324020919992015","Login");
					if(!$conexion)
						echo 'No se pudo conectar'.mysqli_connect_error();
					$con = 'SELECT * FROM Usuarios WHERE User = "'.mysqli_real_escape_string($conexion,$user).'"';
					$query = mysqli_query($conexion,$con);
					$num = mysqli_num_rows($query);
					$sal = substr(base64_encode(openssl_random_pseudo_bytes('22')), 0, 22);
					$sal = strtr($sal, array('+' => '.')); 
					$hash = crypt($pass,$sal);
					if($num == 0)
					{
						$insert = "INSERT INTO usuarios VALUES('','".mysqli_real_escape_string($conexion,$user)."','".mysqli_real_escape_string($conexion,$hash)."')";
						mysqli_query($conexion,$insert);
						echo '<script>alert("Usuario registrado");</script>';
						echo '<script>location.href="Login.html"</script>';
						mysqli_close($conexion);
					}
					else
					{
						echo '<script>alert("Ya existe el nombre de usuario que introduciste");</script>';
						echo '<script>location.href="Login.html"</script>';
						mysqli_close($conexion);
					}
				}
				else
				{
					echo '<script>alert("No ingresaste una contraseña correcto")</script>';
					echo '<script>location.href="Login.html"</script>';;
					mysqli_close($conexion);
				}
			}
			else
			{
				echo '<script>alert("No ingresaste un usuario correcto")</script>';
				echo '<script>location.href="Login.html"</script>';
			}
		}
		else
		{
			echo '<script>alert("Las Contrase&ntilde;as no coinciden")</script>';
			echo '<script>location.href="Login.html"</script>';
		}
	}
?>