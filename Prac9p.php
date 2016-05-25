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
		$cod = $_POST['cod'];
		$isbn = $_POST['ISBN'];
		$a = preg_match('/[0-9]{9,13}/',$isbn);
		if($cod == 0)
		{
			if($a)
			{
				//ISBN-10. x10 = (x1 + 2x2 + 3x3 + 4x4 + 5x5 + 6x6 + 7x7 + 8x8 + 9x9)%11
				$div = str_split($isbn);
				$cont = count($div);
				$value = $div[0];
				if($cont == 10 || $cont == 11)
				{
					for($x = 1; $x < $cont-1; $x++)
						$value = $value + (($x+1)*$div[$x]);
					$value2 = $value-1;
					$resul = (modu($value2,11))+1;
					if($cont == 10)
					{
						if($resul == $div[9])
							echo htmlspecialchars($isbn);
					}
					elseif($cont == 11)
					{
						if($value2 == $div[10])
							echo htmlspecialchars($isbn);
					}
					else
						header("Location:Prac9.php");
				}
				else
					header("Location:Prac9.php");
			}
			else
				header("Location:Prac9.php");
		}
		elseif($cod == 1)
		{
			if($a)
			{
				$div = str_split($isbn);
				$cont = count($div);
				$impar = $div[0];
				$par = $div[1]*3;
				if($cont == 13)
				{
					for($x = 3; $x < $cont-1; $x+=2)
						$par = $par + ((3)*($div[$x]));
					for($x = 2; $x < $cont-1; $x+=2)
						$impar = $impar + $div[$x];
					$fin = 10-($par+$impar);
					$fin2 = modu($fin,10);
					if($fin2 == $div[12])
						echo htmlspecialchars($isbn);
				}
				else
					header("Location:Prac9.php");
			}
			else
				header("Location:Prac9.php");
		}
		else
			header("Location:Prac9.php");
	}
	else
		header("Location:Prac9.php");
?>