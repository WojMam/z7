<?php
$cat_name=$_POST['new_cat'];
$dir = "cat/".$_COOKIE['user']."/".$cat_name;
mkdir($dir, 0700);

header('Location: http://serwer1615599.home.pl/z7/index.html');
exit();
?>