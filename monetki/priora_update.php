<?php
	error_reporting( E_ERROR );
	$us=$_GET["us"];
	$mysqli = new mysqli("localhost","root","","numismat");
	$mysqli->query ("SET NAMES 'utf8'");
	$cat1= $_POST['cat1'];
	$cat2= $_POST['cat2'];
	$cat3= $_POST['cat3'];
	$cat4= $_POST['cat4'];
	$cat5= $_POST['cat5'];
	$cat6= $_POST['cat6'];
	$cat7= $_POST['cat7'];
	$cat8= $_POST['cat8'];
	$cat9= $_POST['cat9'];
	$cat10= $_POST['cat10'];
	$cat11= $_POST['cat11'];
	$price= $_POST['price'];
	$mysqli->query ("UPDATE `users` SET `cat1` = '$cat1', `cat2` = '$cat2', `cat3` = '$cat3', `cat4` = '$cat4', `cat5` = '$cat5', `cat6` = '$cat6', `cat7` = '$cat7', `cat8` = '$cat8', `cat9` = '$cat9', `cat10` = '$cat10', `cat11` = '$cat11', `price` = '$price' WHERE id = $us ");

	echo '<div align="center"><br/><br/><br/><p style="font-size:20px; font-weight: 900; color:#26acca;">ПРИВИЛЕГИИ УСПЕШНО ИЗМЕНЕНЫ</p>
										  <p><button value="Вернуться"><a style="text-transform: uppercase; text-decoration: none;" href="priorities.php">Вернуться</a></button></div>';

	$mysqli->close();
?>

