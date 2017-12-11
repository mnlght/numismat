<?php
	$mysqli = new mysqli("localhost","root","","numismat");
	$mysqli->query ("SET NAMES 'utf8'");
	$usd1= $_POST['USD-RUB'];
	$usd2= $_POST['UAH-RUB'];
	$usd3= $_POST['USD-UAH'];
	$mysqli->query ("UPDATE `kurs` SET `USD-RUB` = '$usd1', `UAH-RUB` = '$usd2', `USD-UAH` = '$usd3'");

	echo '<p style="font-size:20px; font-weight: 900; color:#26acca;">КУРСЫ УСПЕШНО ИЗМЕНЕНЫ</p>
										  <p><button value="Вернуться"><a style="text-transform: uppercase; text-decoration: none;" href="calc.php">Вернуться</a></button>';

	$mysqli->close();
?>

