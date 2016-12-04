<?php
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$logged_in = FALSE;
	
	$link = mysqli_connect("serwer1615599.home.pl/sql", "21746911_z7","lab19937", "21746911_z7");
	if(!$link) 
	{ 
		echo"Błąd: ". mysqli_connect_errno()." ".mysqli_connect_error();
	}
	
	$result = mysqli_query($link, "SELECT * FROM users WHERE user='$user'");
	$rekord = mysqli_fetch_array($result);
	while(true)
	{
		if(!$rekord)
		{
			header('Location: http://serwer1615599.home.pl/z7/fail.php');
			exit();
			//break; 
		}
		else
		{
			if($rekord['pass']==$pass)
			{
				$logged_in = TRUE;
				// $add_info = "INSERT INTO logowanie_klienci (imie, nazwisko, ip) VALUES ('".$rekord['imie']."', '".$rekord['nazwisko']."', '".$ip."')";
				// mysqli_query($link, $add_info);
				setcookie("logged_in", $logged_in, time()+(60*60*1));
				setcookie("user", $user, time()+(60*60*1));
				setcookie("pass", $pass, time()+(60*60*1));
				header('Location: http://serwer1615599.home.pl/z7/add_info.php');
				exit();
			}
			else
			{
				header('Location: http://serwer1615599.home.pl/z7/add_fail.php');
				exit();
				//break;
			}
		}
	break;
	}
?>