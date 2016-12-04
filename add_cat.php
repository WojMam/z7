<?php
	$cat_name=$_POST['new_cat'];
	$dir = "cat/".$_COOKIE['user']."/".$cat_name;
	mkdir($dir, 0700);
?>