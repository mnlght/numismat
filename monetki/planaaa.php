<?php

// connect to the "tests" database
$conn = new mysqli('localhost', 'root', '', 'numismat');
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}
							if($_FILES["filename"]["size"][0] > 1024*3*1024){
							  if($_FILES["filename"]["size"][1] > 1024*3*1024){
							   	if($_FILES["filename"]["size"][2] > 1024*3*1024){
											     echo ("Размер файла превышает три мегабайта");
											     exit;
									}
								}		   
							}
							   // Проверяем загружен ли файл
							   if((is_uploaded_file($_FILES["filename"]["tmp_name"][0])) AND (is_uploaded_file($_FILES["filename"]["tmp_name"][1])) || (is_uploaded_file($_FILES["filename"]["tmp_name"][2])))
							   {
							     // Если файл загружен успешно, перемещаем его
							     // из временной директории в конечную
							     move_uploaded_file($_FILES["filename"]["tmp_name"][0], "img/product/mediam/".$_FILES["filename"]["name"][0]);
							     move_uploaded_file($_FILES["filename"]["tmp_name"][1], "img/product/mediam/".$_FILES["filename"]["name"][1]);
							     move_uploaded_file($_FILES["filename"]["tmp_name"][2], "img/product/mediam/".$_FILES["filename"]["name"][2]);
							     $filename = $_FILES["filename"]["name"][0];
							     $filename2 = $_FILES["filename"]["name"][1];
							     $filename3 = $_FILES["filename"]["name"][2];
							     
										$sql = "insert INTO `table_products`(`type`,`brand`,`title`,`price`, `country`, `period`, `vid_chekana`, `gurt`, `forma`, `otnoshenie`, `weight`, `diametr`, `tiraj`, `nominal`, `material`, `proba`, `image`, `image2`, `image3`, `valuta`, `datetime`)
										 VALUES ('".$_POST["type"]."','".$_POST["brand"]."','".$_POST["title"]."', '".$_POST["price"]."', '".$_POST["country"]."', '".$_POST["period"]."', '".$_POST["vid_chekana"]."', '".$_POST["gurt"]."', '".$_POST["forma"]."', '".$_POST["otnoshenie"]."', '".$_POST["weight"]."', '".$_POST["diametr"]."', '".$_POST["tiraj"]."', '".$_POST["nominal"]."', '".$_POST["material"]."', '".$_POST["proba"]."', '".$filename."', '".$filename2."', '".$filename3."', '".$_POST["valuta"]."', '".$_POST["datetime"]."')" ;
										// Performs the $sql query on the server to insert the values
										if ($conn->query($sql) === TRUE) {
										  echo '<p style="font-size:20px; font-weight: 900; color:#26acca;">МОНЕТА УСПЕШНО ЗАГРУЖЕНА</p>
										  <p><button value="Вернуться"><a style="text-transform: uppercase; text-decoration: none;" href="catalog.php">Вернуться</a></button>';
										 
										}
										else {
										 echo 'Error: '. $conn->error;
										}
							   } else {
							      echo '<p style="font-size:20px; font-weight: 900; color:#26acca;">Ошибка загрузки файла изображения!</p>';
							   }


$conn->close();
 
?>