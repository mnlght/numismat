
<?php
	$mysqli = new mysqli("localhost","root","","numismat");
	$mysqli->query ("SET NAMES 'utf8'");
	$id = $_GET["id"];

$mysqli->query("DELETE FROM `table_products` WHERE `products_id` = '$id'");

	echo '<p style="font-size:20px; font-weight: 900; color:#26acca;">Монета удалена!</p>
										  <p><button value="Вернуться"><a style="text-transform: uppercase; text-decoration: none;" href="main.php">Вернуться</a></button>';
	
	$mysqli->close();

?>