<?php
	session_start();
	$user = $_SESSION['Usuario'];
	if(!$_SESSION['Usuario'] || $_SESSION['Usuario'] == '') 
		header("Location:Login.html");
	if($_POST['Enviar'])
	{
		$cuenta = $_POST['cuenta'];
		$cod = $_POST['cod'];
		$a = preg_match("/[0-9]{9}/",$cuenta);
		if($cod == 0)
		{
			if($a)
			{
				$arr = str_split($cuenta);
				for($x = 8; $x >= 0; $x--)
				{
					echo $arr[$x];
				}
			}
			else
				header("Location:Prac3.php");
		}
		else
		{
			if($a)
			{
				$arr = str_split($cuenta);
				for($x = 8; $x >= 0; $x--)
				{
					echo $arr[$x];
				}
			}
			else
				header("Location:Prac3.php");
		}
		else
			header("Location:Prac3.php");
	}
?>