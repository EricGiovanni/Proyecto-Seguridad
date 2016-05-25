<?php
	session_start();
	$user = $_SESSION['Usuario'];
	if(!$_SESSION['Usuario'] || $_SESSION['Usuario'] == '') 
		header("Location:Login.php");
	if($_POST['Enviar'])
	{
		$p = $_POST['Pierde'];
		$x = str_split($p);
		$valor = ord($x[0]);
		for($i = 1; $i < count($x); $i++)
		{
			$y[$i] = ord($x[$i]);
			$valor = $valor + $y[$i];
		}
		echo htmlspecialchars($valor);
	}
	else
		header("Location:Prac8.php");
?>