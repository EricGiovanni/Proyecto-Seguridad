<?php
session_start();
	$user = $_SESSION['Usuario'];
	if(!$_SESSION['Usuario']||$_SESSION['Usuario']=='') 
		header("Location:Login.php");
	if($_POST['Enviar'])
	{
		if(@($_POST['text']))
		{
			function arr($val)
			{
				$arr =str_split($val);	
			}
			$txt=htmlspecialchars($_POST['text']);
			$arr =str_split ($txt);
			$num =count($arr);
			$div=$num/4;
			$n=ceil($div);
			$var= $n*4;
			while($num!=$var)
			{
				array_push($arr," ");
				$num++;
			}
			$txt=implode($arr);
			$array =str_split ($txt,$n);
			$arr = $array[0];
				$arr1 = str_split($arr);
			$arr = $array[1];
				$arr2 = str_split($arr);
			$arr = $array[2];
				$arr3 = str_split($arr);
			$arr = $array[3];
				$arr4 = str_split($arr);
			for($i=0;$i<$n;$i++)
			{
				echo htmlspecialchars($arr1[$i].$arr2[$i].$arr3[$i].$arr4[$i]);
			}
		}
		else
			header("Location:Prac2.php");
	}
	else
		header("Location:Prac2.php");
?>