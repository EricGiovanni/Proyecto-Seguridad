<?php
	session_start();
	$user = $_SESSION['Usuario'];
	if(!$_SESSION['Usuario'] || $_SESSION['Usuario'] == '') 
		header("Location:Login.php");
	if($_POST['Enviar'])
	{
		$text = $_POST['cuenta'];
		$cod = $_POST['cod'];
		$a = preg_match("/[A-Z]{1,}/",$text);
		if($cod == 0)
		{
			if($a)
			{
				$arr = str_split($text);
				$priv[0] = 'f';
				$a = ord($priv[0]);
				for($x = 0; $x < count($arr); $x++)
				{
					$y = ord($arr[$x]);
					$z = $y^$a;
					//echo 
					$z1 = str_split($z,3);
					$z2 = chr($z1[0]);
					for($b = 0; $b < count($z1);$b++)
					{
						echo htmlspecialchars($z2[$b]);
					}
				}
			}
			else
				header("Location:Prac4.php");
		}
		else
		{
			$arr = str_split($text);
			$priv[0] = 'f';
			$a = ord($priv[0]);
			for($x = 0; $x < count($arr); $x++)
			{
				$y = ord($arr[$x]);
				$z = $a^$y;
				//echo 
				$z1 = str_split($z,3);
				$z2 = chr($z1[0]);
				for($b = 0; $b < count($z1);$b++)
				{
					echo htmlspecialchars($z2[$b]);
				}
			}
		}
	}
?>