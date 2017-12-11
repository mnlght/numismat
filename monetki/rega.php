<?php
    //Стартуем сессии

 header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Регистрация | Нумизматика</title>
	<link rel="stylesheet" href="css/style-login.css">
  <!-- Font awesome CSS
    ============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <script src="js/jquery-1.11.3.min.js"></script>
</head>
<body>
  
  <?php
// Проверяем, пусты ли переменные логина и id пользователя
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
  ?>
  <section class="container">
    <div class="login1">
      <img src="img/log.png" alt="Numismat">
    </div>
    <div style="text-align: center; width: 100%; font-size: 70px;">
      <i class="fa fa-lock"></i> 
    </div>
    <div class="login" style="margin:10% auto ;">
      <h1>Зарегистрироваться </h1>
      <form method="post" action="register.php">
        <p><input type="text" name="user_name" value="" placeholder="Имя"></p>
        <input type="text" name="user_surname" value="" placeholder="Фамилия">
        <p><input type="text" name="login" value="" placeholder="Введите Логин"></p>
        <input type="password" name="password" value="" placeholder="Пароль">
        <img src="captcha.php" />
        <input type = "text" id="vvod" name = "norobot" placeholder="Введите капчу" /><span id="errmsg"></span>
        <p class="submit"><input type="submit" value="Отправить"></p>
      </form>
    </div>
  </section>
  <?php
    }
    else  //Иначе. 
    {
     $login=$_SESSION['login'];
     //Подключаемся к базе данных.
    $dbcon = mysql_connect("localhost", "root", ""); 
    mysql_select_db("numismat", $dbcon);
    if (!$dbcon)
    {
      echo "<p>Произошла ошибка при подсоединении к MySQL!</p>".mysql_error(); exit();
      } else {
      if (!mysql_select_db("numismat", $dbcon))
      {
      echo("<p>Выбранной базы данных не существует!</p>");
      }
    }
  //Формирование оператора SQL SELECT 
      }
      ?> 
<script>
/*var a = "<?php echo $_SESSION['rand_code'];?>";*/
alert('<?php echo $string;?>');
$('#vvod').keyup(function(){
  var Value = $('#vvod').val();
  $('#errmsg').empty();
  $('#errmsg').text(Value);
}); 


$("input:submit").click(function()
{
 if (($('#errmsg').text()) != a){alert('Вы неправильно ввели капчу');}
});

</script>

</body>
</html>
