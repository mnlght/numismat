<?php
		include("include/db_connect.php");
		$kurs = mysql_query("SELECT * FROM kurs");
		$row1 = mysql_fetch_row($kurs);
		session_start();

?>
<!DOCTYPE HTML>
<html>
<head> 
<title>Курсы валют | Нумизмат</title>
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
									<li class="tab-current"><a href="#" class="icon-shop"><span>Курсы валют</span></a></li>
								</ul>
								<div class="content tab">
										<!--Currency Converter widget by FreeCurrencyRates.com -->
										<div id='gcw_mainFBU9OSfAZ' class='gcw_mainFBU9OSfAZ'></div>
										<a id='gcw_siteFBU9OSfAZ' href='https://freecurrencyrates.com/ru/'>FreeCurrencyRates.com</a>
										<script>function reloadFBU9OSfAZ(){ var sc = document.getElementById('scFBU9OSfAZ');if (sc) sc.parentNode.removeChild(sc);sc = document.createElement('script');sc.type = 'text/javascript';sc.charset = 'UTF-8';sc.async = true;sc.id='scFBU9OSfAZ';sc.src = 'https://freecurrencyrates.com/ru/widget-vertical?iso=USDRUBUAH&df=1&p=FBU9OSfAZ&v=fits&source=cbr&width=400&width_title=0&firstrowvalue=1&thm=A6C9E2,FCFDFD,4297D7,5C9CCC,FFFFFF,C5DBEC,FCFDFD,2E6E9E,000000&title=%D0%9A%D0%BE%D0%BD%D0%B2%D0%B5%D1%80%D1%82%D0%B5%D1%80%20%D0%B2%D0%B0%D0%BB%D1%8E%D1%82&tzo=-180';var div = document.getElementById('gcw_mainFBU9OSfAZ');div.parentNode.insertBefore(sc, div);} reloadFBU9OSfAZ(); </script>
										<!-- put custom styles here: .gcw_mainFBU9OSfAZ{}, .gcw_headerFBU9OSfAZ{}, .gcw_ratesFBU9OSfAZ{}, .gcw_sourceFBU9OSfAZ{} -->
										<!--End of Currency Converter widget by FreeCurrencyRates.com -->
								</div><!-- /content --> 
							</nav>
							<form action="kurs.php" method="post" enctype="multipart/form-data" >
								
								<div class="fo-top">
											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Курс USD -> RUB</label>
												<div class="col-sm-2 ctl">
													<input type="text" class="form-control1" id="focusedinput" name="USD-RUB" placeholder="<?=$row1[1];?>" />
												</div>
											</div>
											<div class="clearfix"></div>
								</div>
								<div class="fo-top">
											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Курс UAH -> RUB</label>
												<div class="col-sm-2 ctl">
													<input type="text" class="form-control1" id="focusedinput" name="UAH-RUB" placeholder="<?=$row1[2];?>" />
												</div>
											</div>
											<div class="clearfix"></div>
								</div>
								<div class="fo-top">
											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Курс USD -> UAH</label>
												<div class="col-sm-2 ctl">
													<input type="text" class="form-control1" id="focusedinput" name="USD-UAH" placeholder="<?=$row1[3];?>"/>
												</div>
											</div>
											<div class="clearfix"></div>
								</div>
								<div class="fo-top">
											<div class="form-group">
												<div class="create_btn">
													<input type="submit" value="Изменить" class="form-control1">
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