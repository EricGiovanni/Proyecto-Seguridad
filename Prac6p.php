<?php
	session_start();
	$user = $_SESSION['Usuario'];
	if(!$_SESSION['Usuario'] || $_SESSION['Usuario'] == '') 
		header("Location:Login.php");
	if($_POST['enviar'])
	{
		$cuenta = $_POST['cuenta'];
		$cod = $_POST['cod'];
		$llave = $_POST['llave'];
		if($cod == 0)
		{
			$mit = str_split($llave,3);
			$mitad1 = str_split($mit[0]);
			$mitad2 = str_split($mit[1]);
			for($x = 2; $x >= 0; $x--) 
			{
				$alr[] = $mitad1[$x];
				$alr2[] = $mitad2[$x];
			}
			$all = $alr[0].$alr[1].$alr[2].$alr2[0].$alr2[1].$alr2[2];
			if($all == 'pomada')
			{
				$arr = str_split($cuenta);
				$y = count($arr);
				for($x = $y-1; $x >= 0; $x--)
					echo $arr[$x];
			}
			else
				header("Location:Prac6.php");
		}
		elseif($cod == 1)
		{
			if($llave == 'pomada')
			{
				$arr = str_split($cuenta);
				$y = count($arr);
				for($x = $y-1; $x >= 0; $x--)
				{
					echo $arr[$x];
				}
			}
		}
		else
			header("Location:Prac6.php");
	}
?>