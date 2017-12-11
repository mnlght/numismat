<?php
		include("include/db_connect.php");
		include("functions/checked.php");
		session_start();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Привилегии | Нумизмат</title>
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
					<div class="clearfix"></div>
				<!-- /top_bg -->
				</div>
				<div class="header_bg">
							<div class="header">
								<div class="head-t">
									<div class="logo">
										<a href="main.php"><img src="#" class="img-responsive" alt=""> </a>
									</div>
										<!-- start header_right -->
									<div class="header_right">
										<div class="rgt-bottom">
										<div class="create_btn">
											<a href="exit.php"><i class="fa fa-unlock-alt"></i> Выйти</a>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="search">
										<form method="get" action="search.php?q=">
			                    			<input type="text" name="q" placeholder="Поиск">
			                    			<button type="submit"><i class="fa fa-search"></i></button>
		                </form>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					
				</div>
					<!-- //header-ends -->
				
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
																						<table>
																						<tr>
																					  <th>Логин</th>
																					  <th>Пароль</th>
																					  <th>Имя</th>
																					  <th>Фамилия</th>
																					  <th>Царская россия до 1917</th>
																					  <th>Россия и СССР</th>
																					  <th>Монеты Украины из драг. сплавов</th>
																					  <th>Монеты Украины из недраг. сплавов</th>
																					  <th>Европа</th>
																					  <th>Германия</th>
																					  <th>Великобритания</th>
																					  <th>США</th>
																					  <th>Китай</th>
																					  <th>Польша</th>
																					  <th>Северная Америка</th>
																					  <th>Цена</th>
																					  </tr>
																						<?php
																						$query = mysql_query("SET NAMES utf8");

																						$result = mysql_query("SELECT * FROM users ",$link);

																						if (mysql_num_rows($result) > 0)
																						{
																						$row = mysql_fetch_array($result);

																						do
																						{
																							echo '
    																					<tr>
    																					<td><a href="us_priorities.php?us='.$row["id"].'">'.$row["login"].'</a></td>
    																					<td>'.$row["password"].'</td>
    																					<td>'.$row["user_name"].'</td>
    																					<td>'.$row["user_surname"].'</td>
    																					<td><div class="switch">
																							    <input type="checkbox" id="elem'.$row["id"].'" name="cat1" value="" '.checked($row["cat1"]).' >
																							    <label><i></i></label>
																							</div></td>
    																					<td><div class="switch">
																							    <input type="checkbox" id="'.$row["id"].'" name="cat2" value="" '.checked($row["cat2"]).'>
																							    <label><i></i></label>
																							</div></td>
																							<td><div class="switch">
																							    <input type="checkbox" id="'.$row["id"].'" name="cat3" value="" '.checked($row["cat3"]).'>
																							    <label><i></i></label>
																							</div></td>
																							<td><div class="switch">
																							    <input type="checkbox" id="'.$row["id"].'" name="cat4" value="" '.checked($row["cat4"]).'>
																							    <label><i></i></label>
																							</div></td>
																							<td><div class="switch">
																							    <input type="checkbox" id="'.$row["id"].'" name="cat5" value="" '.checked($row["cat5"]).'>
																							    <label><i></i></label>
																							</div></td>
																							<td><div class="switch">
																							    <input type="checkbox" id="'.$row["id"].'" name="cat6" '.checked($row["cat6"]).'>
																							    <label><i></i></label>
																							</div></td>
																							<td><div class="switch">
																							    <input type="checkbox" id="'.$row["id"].'" name="cat7" '.checked($row["cat7"]).'>
																							    <label><i></i></label>
																							</div></td>
																							<td><div class="switch">
																							    <input type="checkbox" id="'.$row["id"].'" name="cat8" '.checked($row["cat8"]).'>
																							    <label><i></i></label>
																							</div></td>
																							<td><div class="switch">
																							    <input type="checkbox" id="'.$row["id"].'" name="cat9" '.checked($row["cat9"]).'>
																							    <label><i></i></label>
																							</div></td>
																							<td><div class="switch">
																							    <input type="checkbox" id="'.$row["id"].'" name="cat10" '.checked($row["cat10"]).'>
																							    <label><i></i></label>
																							</div></td>
																							<td><div class="switch">
																							    <input type="checkbox" id="'.$row["id"].'" name="cat11" '.checked($row["cat11"]).'>
																							    <label><i></i></label>
																							</div></td>
																							<td><div class="switch">
																							    <input type="checkbox" id="'.$row["id"].'" name="price" '.checked($row["price"]).'>
																							    <label><i></i></label>
																							</div></td>
    																					</tr>
    
																														';
																						}
																							while($row = mysql_fetch_array($result));
																						}
																						?>
																						</table>
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
									<li id="menu-academico" ><a href="catalog.php"><i class="fa fa-plus-circle"></i> <span>Добавление монеты</span></a></li>
									<li id="menu-academico" ><a href="priorities.php"><i class="fa fa-file-text-o"></i> <span>Привилегии</span></a></li>
									<li><a href="calc.php"><i class="lnr lnr-chart-bars"></i> <span>Курсы валют</span> </a></li>
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
</body>
</html>