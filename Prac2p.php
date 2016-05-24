<?php
	session_start();
	$user = $_SESSION['Usuario'];
	if(!$_SESSION['Usuario'] || $_SESSION['Usuario'] == '') 
		header("Location:Login.html");
	if(isset($_POST['Enviar']))
	{
		$num = $_POST['Fair'];
		$text = $_POST['Texto'];
		$cifr = $_POST['Numero'];
		if($num == 0)
		{
			if(preg_match('/^[A-z]{1,}$/',$text) && preg_match('/^[0-9]{1,3}$/'))
			{
				$div = str_split($text,$cifr);
				for($x = 0; $x < count($cifr); $x++)
				{
					$y = $div[$x]
				}
			}
			else
				header("Location:Prac2.html");
		}
		elseif($num == 1)
		{
			if(preg_match('/^[A-z]{1,}$/',$text) && preg_match('/^[0-9]{1,3}$/'))
			{
				$div = str_split($text,$cifr);
			}
			else
				header("Location:Prac2.html");
		}
		else
		{
			header("Location:Prac2.html");
		}
	}
	else
		header("Location:Prac2.html");
?>