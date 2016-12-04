<?php
	$user = $_COOKIE['user'];
	
	$link = mysqli_connect("serwer1615599.home.pl/sql", "21746911_z7","lab19937", "21746911_z7");

	$add_info = "INSERT INTO logi (user, status) VALUES ('".$user."', 'Nieudane')";
	mysqli_query($link, $add_info);

	header('Location: http://serwer1615599.home.pl/z7/panel.php');
	exit();
?>