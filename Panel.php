<?php
$user = $_COOKIE['user'];
$pass =$_COOKIE['pass'];
$logged_in =$_COOKIE['logged_in'];

if($logged_in = FALSE)
{
		header('Location: http://serwer1615599.home.pl/z7/index.html');
		exit();
}
?>

<HTML>

	<HEAD>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Wojciech Mamys</title>
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Lato&subset=latin-ext" rel="stylesheet">
	</HEAD>
	
	<BODY>
	
		<div class="flex-container">
			Zalogowano jako <?php echo $user ?><br>
			<br><form action="logout.php">
				<input type="submit" value="Wyloguj" />
			</form>
		</div>

		<div class="flex-container">
			<div class="flex-item" style="width: 20%;">
				Wyœlij plik <br>
				
			</div>
		</div>
		
		<div class="flex-container">
			<div class="flex-item"  style="width: 90%;">
				Twoje pliki: <br>
				
			</div>
		</div>
		
	</BODY>
	
</HTML>