<?php
		include("include/db_connect.php");
		include("functions/checked.php");
		session_start();
		$us=$_GET["us"];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Привилегии <?=$us;?> | Нумизмат</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- favicon
		============================================ -->		
 <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/admin-style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.min.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/linkedselect.js"></script>

</head> 
<body>
								<?php
						    //Проверяем авторизован ли пользователь
						    if( (!isset($_SESSION['login'])) || (!isset($_SESSION['id'])) || ($_SESSION['id'] != 1) ){header("Location: login.php");
						    }else{
								?>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->

			<div class="header-section">
				<!-- /top_bg -->
				<div class="fo-top" style="float:right;">
					<div class="form-group">
						<div class="create_btn">
								<a href="priorities.php">Назад</a>
						</div>
				</div>
				</div>
			</div>
				<!--content-->
			<div class="content">
<div class="women_main">
	<!-- start content -->
	<div class="catalog">				
			<div id="tabs" class="tabs">
						<div class="graph">
							<nav>
								<ul>
									<li class="tab-current"><a href="#" class="icon-shop"><span>Привилегии пользователей</span></a></li>
								</ul>
							</nav>
							<form action="priora_update.php?us=<?=$us;?>" method="POST" style="width:40%;" >
																						<table >
																					  
																						<?php
																						$query = mysql_query("SET NAMES utf8");

																						$result = mysql_query("SELECT * FROM users WHERE id = $us",$link);

																						if (mysql_num_rows($result) > 0)
																						{
																						$row = mysql_fetch_array($result);

																						do
																						{
																							echo '
    																					<tr><th>Логин</th><td><a href="priorities.php?us='.$row["id"].'">'.$row["login"].'</a></td></tr>
    																					<tr><th>Пароль</th><td><input type="text" placeholder="'.$row["password"].'"></td></tr>
    																					<tr><th>Имя</th><td>'.$row["user_name"].'</td></tr>
    																					<tr><th>Фамилия</th><td>'.$row["user_surname"].'</td></tr>
    																					<tr><th>Царская россия до 1917</th><td><div class="switch1">
																							    <input type="checkbox" id="elem1" name="cat1" '.checked($row["cat1"]).' >
																							    <label><i></i></label>
																							</div></td></tr>
    																					<tr><th>Россия и СССР</th><td><div class="switch1">
																							    <input type="checkbox" id="'.$row["id"].'" name="cat2" '.checked($row["cat2"]).'>
																							    <label><i></i></label>
																							</div></td></tr>
																							<tr><th>Монеты Украины из драг. сплавов</th><td><div class="switch1">
																							    <input type="checkbox" id="'.$row["id"].'" name="cat3" '.checked($row["cat3"]).'>
																							    <label><i></i></label>
																							</div></td></tr>
																							<tr><th>Монеты Украины из недраг. сплавов</th><td><div class="switch1">
																							    <input type="checkbox" id="'.$row["id"].'" name="cat4" '.checked($row["cat4"]).'>
																							    <label><i></i></label>
																							</div></td></tr>
																							<tr><th>Европа</th><td><div class="switch1">
																							    <input type="checkbox" id="'.$row["id"].'" name="cat5" '.checked($row["cat5"]).'>
																							    <label><i></i></label>
																							</div></td></tr>
																							<tr><tr><th>Германия</th><td><div class="switch1">
																							    <input type="checkbox" id="'.$row["id"].'" name="cat6" '.checked($row["cat6"]).'>
																							    <label><i></i></label>
																							</div></td></tr>
																							<tr><th>Великобритания</th><td><div class="switch1">
																							    <input type="checkbox" id="'.$row["id"].'" name="cat7" '.checked($row["cat7"]).'>
																							    <label><i></i></label>
																							</div></td></tr>
																							<tr><th>США</th><td><div class="switch1">
																							    <input type="checkbox" id="'.$row["id"].'" name="cat8" '.checked($row["cat8"]).'>
																							    <label><i></i></label>
																							</div></td></tr>
																							<tr><th>Китай</th><td><div class="switch1">
																							    <input type="checkbox" id="'.$row["id"].'" name="cat9" '.checked($row["cat9"]).'>
																							    <label><i></i></label>
																							</div></td></tr>
																							<tr><th>Польша</th><td><div class="switch1">
																							    <input type="checkbox" id="'.$row["id"].'" name="cat10" '.checked($row["cat10"]).'>
																							    <label><i></i></label>
																							</div></td></tr>
																							<tr><th>Северная Америка</th><td><div class="switch1">
																							    <input type="checkbox" id="'.$row["id"].'" name="cat11" '.checked($row["cat11"]).'>
																							    <label><i></i></label>
																							</div></td></tr>
																							<tr><th>Цена</th><td><div class="switch1">
																							    <input type="checkbox" id="'.$row["id"].'" name="price" '.checked($row["price"]).'>
																							    <label><i></i></label>
																							</div></td></tr>
																														';
																						}
																							while($row = mysql_fetch_array($result));
																						}
																						?>
																						</table>
																						<div class="fo-top" style="margin-left:30%;width:500px;">
																						<div class="form-group">
																							<div class="create_btn">
																								<input type="submit" value="Изменить"  class="form-control1">
																							</div>
																						</div>
																						</div>
																						
							</form>											
						</div>									
												<!-- /tabs -->
											</div>	
<script src="js/cbpFWTabs.js"></script>
<script>
	new CBPFWTabs( document.getElementById( 'tabs' ) );
</script>
	</div>
</div>
</div>
			<!--content-->
		</div>
</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                  <div class="menu">
									<ul id="menu" >
									<li><a href="main.php"><i class="fa fa-tachometer"></i> <span>Главная</span></a></li>
									<li id="menu-academico" ><a href="catalog.php"><i class="fa fa-plus-circle"></i><span>Добавление монеты</span></a></li>
									<li id="menu-academico" ><a href="priorities.php"><i class="fa fa-file-text-o"></i><span>Привилегии</span></a></li>
									<li><a href="calc.php"><i class="lnr lnr-chart-bars"></i> <span>Курсы валют</span></a></li>
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
<script>
							var toggle = true;
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->
   <!-- real-time -->
<script language="javascript" type="text/javascript" src="js/jquery.flot.js"></script>
<!-- /real-time -->
<script src="js/jquery.fn.gantt.js"></script>
<script src="js/menu_jquery.js"></script>
 <?php
				}
				?>
<script>

$("input:checkbox").click(function()
{
	if  ($(this).prop('checked')){
	$(this).val(1);
		} else {
	$(this).val(0);
		}
});
</script>
</body>
</html>