<?php
include("include/db_connect.php");
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Добавление монеты | Нумизмат</title>
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
						    if( (!isset($_SESSION['login'])) || (!isset($_SESSION['id'])) || ($_SESSION['id'] != 1) ){
						        // если нет, то выводим блок с ссылками на страницу регистрации и авторизации
						        header("Location: login.php" );
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
									<li class="tab-current"><a href="#" class="icon-shop"><span>Таблица заполнения</span></a></li>
								</ul>
							</nav>
								<div class="content tab">
								<form action="planaaa.php" method="post" enctype="multipart/form-data">
									<section id="section-1" class="content-current">
									
									
										<div class="fo-top">
											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Изображение* (размер до 3 Мб)</label>
												<div class="col-sm-8 ctl">
													<div class="form-group"> <input type="file" name="filename[]"></div>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>

										<div class="fo-top">
											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Изображение #2*</label>
												<div class="col-sm-8 ctl">
													<div class="form-group"> <input type="file" name="filename[]"></div>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>

										<div class="fo-top">
											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Изображение #3*</label>
												<div class="col-sm-8 ctl">
													<div class="form-group"> <input type="file" name="filename[]"></div>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>

										<div class="fo-top">
											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Категория*</label>
												<div class="col-sm-8 ctl">
													<select id="List1" onChange="MkHouseValues(this.selectedIndex)" name="type" required>
														<option value="Царская Россия до 1917">Царская Россия до 1917 </option>
														<option value="Россия и СССР">Россия и СССР</option>
														<option value="Монеты Украины из драг. сплавов">Монеты Украины из драг. сплавов</option>
														<option value="Монеты Украины из недраг. сплавов">Монеты Украины из недраг. сплавов</option>
														<option value="Европа">Европа</option>
														<option value="Германия">Германия</option>
														<option value="Великобритания">Великобритания</option>
														<option value="США">США</option>
														<option value="Китай">Китай</option>
														<option value="Польша">Польша</option>
														<option value="Северная Америка">Северная Америка</option>
													</select>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>

										<div class="fo-top">
											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Подкатегория*</label>
												<div class="col-sm-8 ctl">
												  <select id="List2" name="brand" required></select>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>

										<div class="fo-top">
											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Название*</label>
												<div class="col-sm-8 ctl">
													<input type="text" class="form-control1" id="focusedinput" name="title" required >
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										
										<div class="fo-top">
											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Цена*</label>
												<div class="col-sm-8 ctl">
													<input type="text" class="form-control1" id="focusedinput" name="price" required>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>

										<div class="fo-top">
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">Валюта*</label>
													<div class="col-sm-8 ctl">
														<select name="valuta" required>
															<option>руб</option>
															<option>$</option>
															<option>грн</option>
														</select>
													<label>(приоритет)</label>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>

										<div class="fo-top">
											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Страна</label>
												<div class="col-sm-8 ctl">
													<input type="text" class="form-control1" id="focusedinput" name="country">
												</div>
												<div class="clearfix"></div>
											</div>
										</div>

										<div class="fo-top">
											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Период</label>
												<div class="col-sm-8 ctl">
													<input type="text" class="form-control1" id="focusedinput" name="period">
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="fo-top">
											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Вид чекана</label>
												<div class="col-sm-8 ctl">
													<input type="text" class="form-control1" id="focusedinput" name="vid_chekana" >
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										
										<div class="fo-top">
											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Номинал</label>
												<div class="col-sm-8 ctl">
													<input type="text" class="form-control1" id="focusedinput" name="nominal" >
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										
										<div class="fo-top">
											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Год</label>
												<div class="col-sm-8 ctl">
													 <form>
														<input type="text" class="form-control1" id="focusedinput" name="datetime">
													</form>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										
										<div class="fo-top">
											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Материал*</label>
												<div class="col-sm-8 ctl">
													<select name="material" required>
														<option>Ал.бронза</option>
														<option>Алюминий</option>
														<option>Биметалл</option>
														<option>Бронза</option>
														<option>Железо</option>
														<option>Золото</option>
														<option>Латунь</option>
														<option>Медно-ник.</option>
														<option>Медь</option>
														<option>Мельхиор</option>
														<option>Никелевая бронза</option>
														<option>Плакированная сталь</option>
														<option>Платина</option>
														<option>Серебро</option>
														<option>Цинк</option>
													</select>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>

										<div class="fo-top">
											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Проба</label>
												<div class="col-sm-8 ctl">
													<input type="text" class="form-control1" id="focusedinput" name="proba">
												</div>
												<div class="clearfix"></div>
											</div> 
										</div>
										
										<div class="fo-top">
											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Гурт</label>
												<div class="col-sm-8 ctl">
													<input type="text" class="form-control1" id="focusedinput" name="gurt">
												</div>
												<div class="clearfix"></div>
											</div>
										</div>

										<div class="fo-top">
											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Форма</label>
												<div class="col-sm-8 ctl">
													<input type="text" class="form-control1" id="focusedinput" name="forma">
												</div>
												<div class="clearfix"></div>
											</div>
										</div>

										<div class="fo-top">
											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Отношение авс/рев</label>
												<div class="col-sm-8 ctl">
													<input type="text" class="form-control1" id="focusedinput" name="otnoshenie">
												</div>
												<div class="clearfix"></div>
											</div>
										</div>

										<div class="fo-top">
											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Вес (г)</label>
												<div class="col-sm-8 ctl">
													<input type="text" class="form-control1" id="focusedinput" name="weight" >
												</div>
												<div class="clearfix"></div>
											</div>
										</div>

										<div class="fo-top">
											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Диаметр (мм)</label>
												<div class="col-sm-8 ctl">
													<input type="text" class="form-control1" id="focusedinput" name="diametr">
												</div>
												<div class="clearfix"></div>
											</div>
										</div>

										<div class="fo-top">
											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label">Тираж</label>
												<div class="col-sm-8 ctl">
													<input type="text" class="form-control1" id="focusedinput" name="tiraj">
												</div>
												<div class="clearfix"></div>
											</div>
										</div>

										<div class="fo-top">
											<div class="form-group">
												<label for="focusedinput" class="col-sm-2 control-label"></label>
												<div class="col-sm-8 ctl">
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										
										<div class="fo-top">
												<div class="col-sm-8 ctl">
													<div class="create_btn">
													<input type="submit" value="ОТПРАВКА" class="form-control1">
													</div>
												</div>
										</div>
										</form>
									</section>
			
																	
								</div><!-- /content -->
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

<script type="text/javascript">
// Создаем новый объект связанных списков
var syncList1 = new syncList;

// Определяем значения подчиненных списков (2 и 3 селектов)
syncList1.dataList = {

/* Определяем элементы второго списка в зависимости 
от выбранного значения в первом списке */

  'Царская Россия до 1917':{
      'Монеты до 1700 года':'Монеты до 1700 года',
      '1700-1762 года':'1700-1762 года',
      '1762-1796 (Екатерина ||)':'1762-1796 (Екатерина ||)',
      '1796-1801 (Павел |) ':'1796-1801 (Павел |) ',
      '1801-1825 (Александр |)':'1801-1825 (Александр |)',
      '1825-1855 (Николай |)':'1825-1855 (Николай |)',
      '1855-1881 (Александр ||)':'1855-1881 (Александр ||)',
      '1881-1894 (Александр |||)':'1881-1894 (Александр |||)',
      'Монеты эпохи Николая ||':'Монеты эпохи Николая ||'
  },
  
  'Россия и СССР':{
      '1921-1923':'1921-1923',
      '1924-1936':'1924-1936',
      '1937-1946':'1937-1946',
      '1947-1958':'1947-1958',
      '1961-1991':'1961-1991',
      'После 1991':'После 1991',
      'Юбилейные монеты и банковские наборы':'Юбилейные монеты и банковские наборы',
  },

	'Монеты Украины из драг. сплавов':{ 
			' ':' '
		},

  'Монеты Украины из недраг. сплавов':{
      'Памятные и юбилейные':'Памятные и юбилейные',
      'Обиходные':'Обиходные',
  },
  'Европа':{
		  'Австрия':'Австрия',
		  'Австро-Венгрия':'Австро-Венгрия',
		  'Беларусь':'Беларусь',
		  'Молдова':'Молдова',
		  'Приднестровье':'Приднестровье',
		  'Франция':'Франция',
		  'Италия и Ватикан':'Италия и Ватикан',
		  'Албания':'Албания',
		  'Бельгия':'Бельгия',
		  'Болгария':'Болгария',
		  'Венгрия':'Венгрия',
		  'Греция':'Греция',
		  'Дания':'Дания',
		  'Ирландия':'Ирландия',
		  'Исландия':'Исландия',
		  'Литва':'Литва',
		  'Люксембург':'Люксембург',
		  'Мальта':'Мальта',
		  'Нидерланды':'Нидерланды',
		  'Португалия':'Португалия',
		  'Румыния':'Румыния',
		  'Сан-Марино':'Сан-Марино',
		  'Сербия':'Сербия',
		  'Словакия':'Словакия',
		  'Словения':'Словения',
		  'Хорватия':'Хорватия',
		  'Чехия':'Чехия',
		  'Чехословакия':'Чехословакия',
		  'Швейцария':'Швейцария',
		  'Швеция':'Швеция',
		  'Эстония':'Эстония',
		  'Югославия':'Югославия',
		  'Кипр':'Кипр',
		  'Латвия':'Латвия',
		  'Монако':'Монако',
		  'Норвегия':'Норвегия',
		  'Финляндия':'Финляндия',
		  'Босния и Герцоговиня':'Босния и Герцоговиня',
  },
  'Германия':{
  		'Германия до 1871 года':'Германия до 1871 года',
  		'Германская империя (1871-1918)':'Германская империя (1871-1918)',
  		'Веймарская республика (1918-1932)':'Веймарская республика (1918-1932)',
  		'Третий рейх (1933-1945)':'Третий рейх (1933-1945)',
  		'ГДР, ФРГ':'ГДР, ФРГ',
  		'Современные с 1990 года':'Современные с 1990 года',
  		'Другое':'Другое',
  },
	'Великобритания':{  	
		'Англия до 1837 года':'Англия до 1837 года',
		'Виктория (1837-1901)':'Виктория (1837-1901)',
		'Эдуард VII (1902-1910)':'Эдуард VII (1902-1910)',
		'Георг V (1911-1936)':'Георг V (1911-1936)',
		'Георг VI (1937-1952)':'Георг VI (1937-1952)',
		'Елизавета II (до 1970)':'Елизавета II (до 1970)',
		'Елизавета II (после 1968)':'Елизавета II (после 1968)',
		'Джерси, Гернси, Мэн, Гибралтар':'Джерси, Гернси, Мэн, Гибралтар',
		'Британские колонии':'Британские колонии',
		'Другое':'Другое',
		},
		'США':{ 
			'Памятные, юбилейные и инвестиционные':'Памятные, юбилейные и инвестиционные',
			'Обиходные':'Обиходные',
			'Банковские наборы':'Банковские наборы',
		},
		'Китай':{ 
			' ':' '
		},
		'Польша':{ 
			' ':' '
		},
		'Северная Америка':{
			'Канада':'Канада',
			'Мексика':'Мексика',
		},
  
};

// Включаем синхронизацию связанных списков
syncList1.sync("List1","List2");
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