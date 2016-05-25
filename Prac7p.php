<!DOCTPYE html>
<html>
	<head>
		<meta charset = "UTF8">
		<title>Hora de perder información</title>
	</head>
	<body>
		<?php
			session_start();
			$user = $_SESSION['Usuario'];
			if(!$_SESSION['Usuario'] || $_SESSION['Usuario'] == '') 
				header("Location:Login.php");
			if($_POST['Enviar'])
			{
				$p = $_POST['Pierde'];
				$x = str_split($p,2);
				
				$x[2] = "<<";
				$x[0] = ">>";
				$l = count($x);
				for($y = 0; $y < $l; $y++)
					echo htmlspecialchars($x[$y]);
			}
			else
				header("Location:Prac7.php");
		?>
	</body>
</html>