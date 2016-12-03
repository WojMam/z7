<?php
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	//$checked = FALSE;
	$ip = $_SERVER["REMOTE_ADDR"];
	
	$link = mysqli_connect("serwer1615599.home.pl/sql", "21746911_z6","lab19936", "21746911_z6");
	if(!$link) 
	{ 
		echo"Błąd: ". mysqli_connect_errno()." ".mysqli_connect_error();
	}
	
	$result = mysqli_query($link, "SELECT * FROM klienci WHERE user='$user'");
	$rekord = mysqli_fetch_array($result);
	while(true)
	{
		if(!$rekord)
		{
			break; 
		}
		else
		{
			if($rekord['pass']==$pass)
			{
				// $_SESSION ["user"] = $rekord['user'];
				// $_SESSION ["imie"] = $rekord['imie'];
				// $_SESSION ["nazwisko"] = $rekord['nazwisko'];
				// $_SESSION ["id"] = $rekord['id'];
				// $_SESSION ["logged"] = TRUE;
				// $checked = TRUE;
				// $user_type = "customer";
				// $add_info = "INSERT INTO logowanie_klienci (imie, nazwisko, ip) VALUES ('".$rekord['imie']."', '".$rekord['nazwisko']."', '".$ip."')";
				// mysqli_query($link, $add_info);
				setcookie("user", $login, time()+(60*60*1));
				setcookie("pass", $pass, time()+(60*60*1));
				header('Location: http://serwer1615599.home.pl/z6/panel_klienta.php');
				exit();
			}
			else
			{
				break;
			}
		}
	break;
	}
?>