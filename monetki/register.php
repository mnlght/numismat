<?php

    session_start();
    if (md5($_POST['norobot']) != $_SESSION['randomnr2'])   { 
            echo "<div align='center'><p><b><font color='red' style='font-weight:900;font-size:2.5em;'>Вы неправильно ввели каптчу!</font></p></div>";
    }else{

    if ($_POST) //Условие будет выполнено, если произведен POST-запрос к скрипту.
    {
	$name = trim($_POST['user_name']);
	$sname = trim($_POST['user_surname']);
	$login = trim($_POST['login']);
	$password = trim($_POST['password']);
    $error = false;//Создаем переменную, контролирующую ошибки регистрации.
    $errortext = "<p><b><font color='red'><h3>При регистрации на сайте произошли следующие ошибки:</h3></font></p><ul>";
    if (mail("styrgia@gmail.com", "Заявка на регистрацию с сайта нумизматики.", "Имя:".$name.". Логин: ".$login ,"From: styrgia@gmail.com \r\n"))
         {     echo "Сообщение успешно отправлено!"; 
        } else { 
            echo "При отправке сообщения возникли ошибки!";
        }
if (empty($name))
{
$error = true;
$errortext .= "<li><font color='red'>Вы не заполнили поле Имя пользователя!</font></li>";
} else {
if (!preg_match("/^[a-z а-яё]{2,30}$/iu",$name))
{
$error = true;
$errortext .= "<li><font color='red'>Убедитесь что Имя содержит от 2 до 30 символов и не содержит цифр</font></li>";
}
}
if (empty($sname))
{
$error = true;
$errortext .= "<li><font color='red'>Вы не заполнели поле Имя пользователя!</font></li>";
} else {
if (!preg_match("/^[a-z а-яё]{2,30}$/iu",$sname))
{
$error = true;
$errortext .= "<li><font color='red'>Убедитесь что Имя содержит от 2 до 30 символов и не содержит цифр</font></li>";
}
}
if (empty($login))
{
$error = true;
$errortext .= "<li><font color='red'>Вы не заполнели поле Логин пользователя!</font></li>";
} else {
if (!preg_match("/^[a-z0-9]{2,20}$/i",$login))
{
$error = true;
$errortext .= "<li><font color='red'>Убедитесь что Логин содержит от 2 до 20 символов, и состоит из латинских символов и цифр</font></li>";
}
}
if (empty($password))
{
$error = true;
$errortext .= "<li><font color='red'>Вы не заполнили поле Пароль!</font></li>";
} else {
if (!preg_match("/^[a-z0-9]{3,20}$/i",$password))
{
$error = true;
$errortext .= "<li><font color='red'>Убедитесь что Пароль содержит от 3 до 20 символов, и состоит из латинских символов и цифр</font></li>";
}
}


if ($error)
{
echo($errortext);//Выводим текст ошибок.
} else {
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
	 // проверка на существование пользователя с таким же логином.
    $result = mysql_query("SELECT id FROM users WHERE login='$login'",$dbcon);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow["id"])) {
    exit ("Извините, введённый вами логин уже зарегистрирован.<a href='rega.php'> Введите другой логин</a>.");
    }
	    //Выполняем SQL-запрос записывающий данные пользователя в таблицу.
	    $sql = mysql_query("INSERT INTO users (user_name,user_surname,login,password) Values ('$name','$sname','$login','$password')", $dbcon);
		if (!$sql) {echo "Запрос не прошел. Попробуйте еще раз.";}
		if ($sql)
		{
	//Выводим сообщение об успешной регистрации.	
		exit ('<body><div align="center"><br/><br/><br/><p style="font-size:20px; font-weight: 900; color:#26acca;"> Вы зарегистрировались! Перейдите на страницу авторизации, чтобы войти
        <p><button value="Перейти"><a style="text-transform: uppercase; text-decoration: none;" href="login.php">Перейти</a></button></div></div></body>');
		}
		mysql_close($dbcon);//Закрываем соединение MySQL.
        }
			  }
}
?>