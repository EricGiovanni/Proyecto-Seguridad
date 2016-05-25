<?php
	session_start();
	$user = $_SESSION['Usuario'];
	if(!$_SESSION['Usuario'] || $_SESSION['Usuario'] == '') 
		header("Location:Login.php");
	function modu($x,$y)
	{
		$z = $x/$y;
		$o = floor($z);
		$r = $x-($o*$y);
		return $r;
	}
	if($_POST['Enviar'])
	{
		$visa = $_POST['VISA'];
		if(preg_match('/[4]{1}[0-9]{9,}/',$visa))
		{
			$arr = str_split($visa);
			$cont = count($arr);
			$par = $arr[0]*2;
			$impar = $arr[1];
			if($cont >= 10)
			{
				for($x = 2; $x < $cont-1; $x+=2)
					$par = $par + ((2)*($arr[$x]));
				for($x = 3; $x < $cont; $x+=2)
					$impar = $impar + $arr[$x];
				$fin = -$par-$impar-$cont;
				$fin2 = -$fin;
				$fin3 = modu($fin2,10);
				$val = $cont-1;
				if($visa[$val] == $fin3)
					echo htmlspecialchars($visa);
			}
			else
				header("Location:Tarea2.php");
		}
		else
			header("Location:Tarea2.php");
	}
	else
		header("Location:Tarea2.php");
?>