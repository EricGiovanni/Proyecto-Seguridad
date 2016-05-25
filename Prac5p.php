<?php
	session_start();
	$user = $_SESSION['Usuario'];
	if(!$_SESSION['Usuario'] || $_SESSION['Usuario'] == '') 
		header("Location:Login.php");
	if($_POST['Enviar'])
	{
		$cuenta = $_POST['cuenta'];
		$cod = $_POST['cod'];
		$llave = $_POST['llave'];
		$a = preg_match("/[0-9]{1,}/",$llave);
		$b = preg_match("/[A-Z]{1,}/",$llave);
		$arr = str_split($cuenta);
		if($cod == 0)
		{
			if($a)
			{
				$y = count($arr);
				for($x = $y-1; $x >= 0; $x--)
				{
					echo htmlspecialchars($arr[$x]);
				}
			}
			elseif($b)
			{
				$arreglo = str_split($cuenta);
				$x = count($arreglo)/2;
				$y = ceil($x);
				$arr = str_split($cuenta,$y);
				echo htmlspecialchars($arr[1].$arr[0]);
			}
			else
				header("Location:Prac5.php");
		}
		else
		{
			if($a)
			{
				$y = count($arr);
				for($x = $y-1; $x >= 0; $x--)
				{
					echo htmlspecialchars($arr[$x]);
				}
			}
			elseif($b)
			{
				$arreglo = str_split($cuenta);
				$x = count($arreglo)/2;
				$y = ceil($x);
				$arr = str_split($cuenta,$y);
				$a = count($arreglo);
				$z = $a%2;
				if($z == 0)
				{
					$arr = str_split($cuenta,$y);
					echo htmlspecialchars($arr[1].$arr[0]);
				}
				else
				{
					$arr = str_split($cuenta,$y);
					$x = str_split($arr[0]);
					for($i = 0; $i < count($x); $i++)
						$y = $x[$i];
					$x = str_split($arr[0]);
					$z = count($x)-(count($x)*2);
					$z2 = count($x)-1;
					echo htmlspecialchars($y.$arr[1].substr($arr[0],$z,$z2));
				}
				
			}
			else
				header("Location:Prac5.php");
		}
	}
?>