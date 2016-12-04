<?php
$user = $_COOKIE['user'];
$pass =$_COOKIE['pass'];
//$logged_in =$_COOKIE['logged_in'];
$cur_dir =$_COOKIE['cur_dir'];

if(!isset($_COOKIE['logged_in']))
{
		header('Location: http://serwer1615599.home.pl/z7/index.html');
		exit();
}
else
{
	if(!isset($_COOKIE['cur_dir']))
	{
		$cur_dir    = 'cat/'.$user;
	}
	
	//$files1 = scandir($cur_dir);
	//$scanned_directory = array_diff(scandir($cur_dir), array('..', '.'));
	
	
	$scan = scandir($cur_dir);
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
					Wyślij plik <br><br>
					<form action="upload.php" method="POST" ENCTYPE="multipart/form-data">
						<input type="file" name="plik"/>
						<input type="submit" value="Wyślij"/>
					</form>
				</div>
			</div>
			
			<div class="flex-container">
				<div class="flex-item" style="width: 20%;">
					Utwórz katalog (max 15 znaków): <br><br>
					<form method="post" action="add_cat.php">
						Nazwa katalogu: <input type="text" name="new_cat" maxlength="15" size="20"><br>
						<br><input type="submit" value="Utwórz"/>
					</form>
				</div>
			</div>
			
			<div class="flex-container">
				<div class="flex-item"  style="width: 90%;">
					Twoje pliki: <br><br>
					<?php 
						foreach($scan as $file)
						{
							if (!is_dir($cur_dir."/$file"))
							{
								echo $file."<br>";
							}
						}
						// echo '<pre>';
						// print_r($scanned_directory);
						// echo '</pre>';
					?>
				</div>
			</div>
			
			<div class="flex-container">
				<div class="flex-item"  style="width: 90%;">
					Twoje katalogi: <br><br>
					<?php 
						foreach($scan as $file)
						{
							if (is_dir($cur_dir."/$file"))
							{
								echo $file."<br>";
							}
						}
						// echo '<pre>';
						// print_r($scanned_directory);
						// echo '</pre>';
					?>
				</div>
			</div>
			
		</BODY>
		
	</HTML>

<?php } ?>

