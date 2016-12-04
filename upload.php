<?php
$dir = "z7/cat/".$_COOKIE['user']."/";
	if (is_uploaded_file($_FILES['plik']['tmp_name']))
	{
		echo 'Odebrano plik: '.$_FILES['plik']['name'].'<br/>';
		move_uploaded_file($_FILES['plik']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$dir.$_FILES['plik']['name']);
	}
	else {echo 'B³¹d przy przesy³aniu danych!';}
?>