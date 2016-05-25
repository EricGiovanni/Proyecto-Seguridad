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
		$app = $_POST['Apellido'];
		$apm = $_POST['Apellido2'];
		$nom = $_POST['Nombre'];
		$sex = $_POST['Sexo'];
		$dia = $_POST['dia'];
		$mes = $_POST['mes'];
		$ano = $_POST['ano'];
		$ent = $_POST['ent'];
		$val1 = preg_match('/[A-z]{1,}/',$app);
		$val2 = preg_match('/[A-z]{1,}/',$apm);
		$val3 = preg_match('/[A-z]{1,}/',$nom);
		$val4 = preg_match('/[1-9]{4}/',$ano);
		if($val1 && $val2 && $val3 && $val4)
		{
			$appat = str_split($app,2);
			$appat2 = str_split($app);
			$apmad = str_split($apm);
			$nombre = str_split($nom);
			$anoc = str_split($ano,2);
			if($mes < 10)
				$mesc = '0'.$mes;
			else
				$mesc = $mes;
			if($ano < 2000)
				$anoc2 = '0';
			else
				$anoc2 = 'A';
			$pru = $appat[0].$apmad[0].$nombre[0].$anoc[1].$mesc.$dia.$sex.$ent.$appat2[2].$apmad[2].$nombre[1].$anoc2;
			strtoupper($pru);
			$valores = array(
				'0' => 0,
				'1' => 1,
				'2' => 2,
				'3' => 3,
				'4' => 4,
				'5' => 5,
				'6' => 6,
				'7' => 7,
				'8' => 8,
				'9' => 9,
				'A' => 10,
				'B' => 11,
				'C' => 12,
				'D' => 13,
				'E' => 14,
				'F' => 15,
				'G' => 16,
				'H' => 17,
				'I' => 18,
				'J' => 19,
				'K' => 20,
				'L' => 21,
				'M' => 22,
				'N' => 23,
				'Ñ' => 24,
				'O' => 25,
				'P' => 26,
				'Q' => 27,
				'R' => 28,
				'S' => 29,
				'T' => 30,
				'U' => 31,
				'V' => 32,
				'W' => 33,
				'X' => 34,
				'Y' => 35,
				'Z' => 36
			);
			$pru2 = str_split($pru);
			$arr = (18)*($valores[$pru2[0]]);
			$i = 18;
			for($x = 1; $x < 16; $x++)
			{
				$i--;
				$arr = $arr + (($i)*($valores[$pru2[$x]]));
			}
			$fin = modu($arr,10);
			$curp = $pru.$fin;
			echo htmlspecialchars($curp);
		}
		else
			header("Location:Tarea1.php");
	}
	else
		header("Location:Tarea1.php");
?>