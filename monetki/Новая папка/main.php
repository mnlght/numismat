<?php
		include("include/db_connect.php");
		include("functions/forex.php");
		include("functions/znachok.php");
		session_start();
		if (!empty($_GET["sort"])) {
		$sorting = $_GET["sort"];
		switch($sorting)
		{
			case 'price-asc';
			$sorting = 'price ASC';
			$sort_name = 'Цена по возрастанию';
			break;

			case 'price-desc';
			$sorting = 'price DESC';
			$sort_name = 'Цена по убыванию';
			break;

			case 'name';
			$sorting = 'title';
			$sort_name = 'Название';
			break;

			case 'data';
			$sorting = 'datetime DESC';
			$sort_name = 'Дата';
			break;

			case 'nominal';
			$sorting = 'nominal ASC';
			$sort_name = 'Номинал';
			break;
		}
	} 
	else {
		$sorting = 'products_id DESC';
		$sort_name = 'Без сортировки';
	}

?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Главная | Нумизматика</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		<!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
		<!-- Google Fonts
		============================================ -->		
			 <link href="https://fonts.googleapis.com/css?family=Arimo:400,600" rel="stylesheet" type='text/css'>
       <link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>
       <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
	   
		<!-- Bootstrap CSS
		============================================ -->		
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Font awesome CSS
		============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
		<!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
		<!-- meanmenu CSS
		============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- jquery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="css/jquery-ui.css">
		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="css/main.css">
		<!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="css/style.css">
		<!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
    						<?php
						    //Проверяем авторизован ли пользователь
						    if( (!isset($_SESSION['login'])) || (!isset($_SESSION['id'])) ){header("Location: login.php");
						    }else{
								?>
		<!-- HEADER-AREA START -->
		<header class="header-area">
			<!-- HEADER-TOP START -->
			<div class="header-top hidden-xs">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="top-menu">
								<!-- Start Currency -->
								<ul class="currency">
									<li><a href="#"><strong>Валюты</strong><i class="fa fa-caret-down left-5"></i></a>
										<ul>
											<li><a href="#"><strong>RUB</strong></a></li>
											<li><a href="#"><strong>UAH</strong></a></li>
											<li><a href="#"><strong>USD</strong></a></li>
										</ul>
									</li>
								</ul>
								<p class="welcome-msg">Добро пожаловать, Администратор! </p>
								<!-- End Currency -->
							</div>

							<!-- Start Top-Link -->
							<div class="top-link" id="auth_block">
								<ul class="link">
									<li><a href="catalog.php"><i class="fa fa-user"></i> Личный кабинет</a></li>
									<li><a href="exit.php" id="link_auth"><i class="fa fa-unlock-alt"></i> Выйти</a></li>
								</ul>
							</div>
							<!-- End Top-Link -->
						</div>
					</div>
				</div>
			</div>
			<!-- HEADER-TOP END -->
			<!-- HEADER-MIDDLE START -->
			<div class="header-middle">
				<div class="container">
					<!-- Start Support-Client -->
					<div class="support-client hidden-xs">
						<div class="row">
							<!-- Start Single-Support -->
							<div class="col-md-3 hidden-sm">
								<div class="single-support">
									<div class="support-content">
										<i class="fa fa-clock-o"></i>
										<div class="support-text">
											<h1 class="zero gfont-1">Режим работы</h1>
											<p>Пн-Вс: 8.00 - 18.00</p>
										</div>
									</div>
								</div>
							</div>
							<!-- End Single-Support -->
							<!-- Start Single-Support -->
							<div class="col-md-3 col-sm-4">
								<div class="single-support">
									<i class="fa fa-truck"></i>
									<div class="support-text">
										<h1 class="zero gfont-1">Доставка</h1>
										<p>инфо</p>
									</div>
								</div>
							</div>
							<!-- End Single-Support -->
							<!-- Start Single-Support -->
							<div class="col-md-3 col-sm-4">
								<div class="single-support">
									<i class="fa fa-money"></i>
									<div class="support-text">
										<h1 class="zero gfont-1">Оплата</h1>
										<p>инфо</p>
									</div>
								</div>
							</div>
							<!-- End Single-Support -->
							<!-- Start Single-Support -->
							<div class="col-md-3 col-sm-4">
								<div class="single-support">
									<i class="fa fa-phone-square"></i>
									<div class="support-text">
										<h1 class="zero gfont-1">Телефон</h1>
										<p>+7 (ХХХ) ХХХ ХХ ХХ</p>
									</div>
								</div>
							</div>
							<!-- End Single-Support -->
						</div>
					</div>
					<!-- End Support-Client -->
					<!-- Start logo & Search Box -->
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<div class="logo">
								<a href="main.php" title="Главная"><img src="img/logo1.png" alt="Numismat"></a>
							</div>
						</div>
						<div class="col-md-9 col-sm-12">
		                    <div class="quick-access" style="float:right;">
		                    	<div class="search-by-category">
		                    		<div class="header-search">
		                    			<form method="get" action="search.php?q=">
			                    			<input type="text" name="q" placeholder="Поиск">
			                    			<button type="submit"><i class="fa fa-search"></i></button>
		                    			</form>
		                    		</div>
		                    	</div>
		                    	<div class="top-cart">
		                    		<ul>
		                    			<li>
			                    			<a href="cart.php">
			                    				<span class="cart-icon"><i class="fa fa-shopping-cart"></i></span>
			                    			</a>
		                    			</li>
		                    		</ul>
		                    	</div>
		                    </div>
		         </div>
					</div>
					<!-- End logo & Search Box -->
				</div> 
			</div>
			<!-- HEADER-MIDDLE END -->
			<!-- START MAINMENU-AREA -->
			<div class="mainmenu-area shop-page">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="mainmenu">
								<nav>
									<ul>
										<li><a href="main.php">Главная</a>
										</li>
										<li><a href="#" style="text-decoration:line-through;">О нас</a></li>
										<li class="hot"><a href="#" style="text-decoration:line-through;">Лучшие предложения</a></li>
										<li class="new"><a href="#" style="text-decoration:line-through;">Новинки</a></li>
										<li><a href="#" style="text-decoration:line-through;">Доставка и оплата</a></li>
										<li><a href="#" style="text-decoration:line-through;">Контакты</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN-MENU-AREA -->
			<!-- Start Mobile-menu -->
			<div class="mobile-menu-area no-margin hidden-md hidden-lg">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<nav id="mobile-menu">
								<ul>
									<li><a href="#">Главная</a></li>
									<li><a href="#">О нас</a></li>
									<li><a href="#">Лучшие предложения</a></li>
									<li><a href="#">Новинки</a></li>
									<li><a href="#">Контакты</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!-- End Mobile-menu -->
		</header>
		<!-- HEADER AREA END -->
		
		<!-- START PAGE-CONTENT -->
		<section class="page-content">
			<div class="container">
	    <div class="row">
					<div class="col-md-12">
						<ul class="page-menu">
							<li class="active"><a href="main.php">Дом /</a></li>
						</ul>
					</div>
			</div>
				<div class="row">
					<div class="col-md-3">
						<!-- CATEGORY-MENU-LIST START -->
	           <?php include_once( __DIR__ . '/scripts/cat.php' ); ?>
						<!-- END CATEGORY-MENU-LIST -->
						<!-- shop-filter start -->
						<form method="get" action="search_filter.php">
						<div class="shop-filter">
							<div class="area-title">
								<h3 class="title-group gfont-1">Отфильтровать монеты</h3>
							</div>
							<h4 class="shop-price-title">Цена</h4>
							<div class="info_widget">
								<div class="price_filter">
								<div id="slider-range"></div>
									<div class="price_slider_amount">
										<div class="valutnik clear">
										<select name="valutnik">
												<option value="руб">Рубль &#8381;</option>
												<option value="грн">Гривна &#8372;</option>
												<option value="$">Доллар $</option>
										</select>
										</div>
										<input type="text" id="start_price" name="start_price" placeholder="Начальная цена" value=""/>
										<input type="text" id="end_price" name="end_price" placeholder="Конечная цена" value="" />
									</div>
								</div>
							</div>
						</div>
						<!-- shop-filter end -->
						<!-- filter-by start -->
						<div class="accordion_one">
							<h4><a class="accordion-trigger" data-toggle="collapse" href="#divone">Металл</a></h4>
							<div id="divone" class="collapse">
								<div class="filter-menu">
									<ul>
										<li><input type="checkbox" name="material[]" value="'Алюминий'" id="check1" /><label for="check1" style="font-size:18px;">Алюминий</label></li>
										<li><input type="checkbox" name="material[]" value="'Биметалл'" id="check2"/><label for="check2" style="font-size:18px;">Биметалл</label></li>
										<li><input type="checkbox" name="material[]" value="'Бронза'" id="check3"/><label for="check3" style="font-size:18px;">Бронза</label></li>
										<li><input type="checkbox" name="material[]" value="'Железо'" id="check4"/><label for="check4" style="font-size:18px;">Железо</label></li>
										<li><input type="checkbox" name="material[]" value="'Золото'" id="check5"/><label for="check5" style="font-size:18px;">Золото</label></li>
										<li><input type="checkbox" name="material[]" value="'Латунь'" id="check6"/><label for="check6" style="font-size:18px;">Латунь</label></li>
										<li><input type="checkbox" name="material[]" value="'Медь'" id="check7"/><label for="check7" style="font-size:18px;">Медь</label></li>
										<li><input type="checkbox" name="material[]" value="'Никель'" id="check8"/><label for="check8" style="font-size:18px;">Никель</label></li>
										<li><input type="checkbox" name="material[]" value="'Палладий'" id="check9"/><label for="check9" style="font-size:18px;">Палладий</label></li>
										<li><input type="checkbox" name="material[]" value="'Платина'" id="check10"/><label for="check10" style="font-size:18px;">Платина</label></li>
										<li><input type="checkbox" name="material[]" value="'Серебро'" id="check11"/><label for="check11" style="font-size:18px;">Серебро</label></li>
										<li><input type="checkbox" name="material[]" value="'Цинк'" id="check12"/><label for="check12" style="font-size:18px;">Цинк</label></li>
									</ul>
								</div>
							</div>
							<div class="price_slider_amount">
										<input type="submit"  value="Фильтр"/>  
							</div>
						</div>
					</form>
						<!-- filter-by end -->
					</div>
					<div class="col-md-9 col-xs-12">
						<!-- БАННЕР -->
						<div class="col-xs-12">
						<div class="slider-area">
							<div class="bend niceties preview-1">
								<div id="ensign-nivoslider" class="slides">	
									<img src="img/ban/1.jpg" alt="Numismat" title="#slider-direction-1"/>
				 					<img src="img/ban/2.jpg" alt="Numismat" title="#slider-direction-2"/>
									<img src="img/ban/3.jpg" alt="Numismat" title="#slider-direction-3"/>
								</div>
								<!-- direction 1 -->
								<div id="slider-direction-1" class="t-lfr slider-direction">
									<div class="slider-progress"></div>
									<!-- layer 1 -->
									<div class="layer-2-1">
										<h1 class="title1" style="text-shadow: 1px 1px 2px black, 0 0 1em black;">Монеты Царской России и СССР</h1>
									</div>
									<!-- layer 2 -->
									<div class="layer-2-2">
										<p class="title2" style="text-shadow: 1px 1px 2px black, 0 0 1em black;">Царские монеты - это особый престиж и надежные инвестиции.</p>
									</div>
								</div>
								<!-- direction 2 -->
								<div id="slider-direction-2" class="slider-direction">
									<div class="slider-progress"></div>
									<!-- layer 1 -->
									<div class="layer-1-1 ">
										<h1 class="title1" style="text-shadow: 1px 1px 2px black, 0 0 1em black;">Большой ассортимент из драгоценных металлов</h1>
									</div>
								</div>
								<!-- direction 3 -->
								<div id="slider-direction-3" class="slider-direction">
									<div class="slider-progress"></div>
									<!-- layer 1 -->
									<div class="layer-3-1">
										<h2 class="title1" style="text-shadow: 1px 1px 2px black, 0 0 1em black;">Просмотр коллекции</h2>
									</div>
									<!-- layer 2 -->
									<div class="layer-3-2">
										<h1 class="title2" style="text-shadow: 1px 1px 2px black, 0 0 1em black;">по разным категориям</h1>
									</div>
									<!-- layer 4 -->
									<div class="layer-3-4">
										<a href="#" class="title4">Приятного просмотра</a>
									</div>
								</div>
							</div>
						</div>
					</div>
						<!-- КОНЕЦ БАННЕРА -->
						<!-- START PRODUCT-AREA -->
						<div class="product-area">
							<div class="row">
								<div class="col-xs-12">
									<!-- Start Product-Menu -->
									<div class="product-menu">
										<div class="product-title">
											<h3 class="title-group-3 gfont-1">Все монеты</h3>
										</div>
									</div>
									<div class="product-filter">
										
										<div class="sort">
											<label>Сортировать по:</label>
											<select onchange="window.location.href=this.options[this.selectedIndex].value">
											<option value="main.php"><?php echo $sort_name; ?></option>
											<option value="main.php?sort=name" >Название</option>
											<option value="main.php?sort=price-asc">Цена по возрастанию</option>
											<option value="main.php?sort=price-desc">Цена по убыванию</option>
											<option value="main.php?sort=data">Дата создания</option>
											<option value="main.php?sort=nominal">Номинал</option>
											</select>	
										</div>
										<div class="limit">
											<label>Вид:</label>
											<ul role="tablist">
											<li role="presentation" class="list active">
												<a href="#display-1-1" role="tab" data-toggle="tab"><img src="img/list.png" style="color:#4c4c4c;"></a>
											</li>
											<li role="presentation"  class="grid ">
												<a href="#display-1-2" role="tab" data-toggle="tab"><img src="img/grid.png"></a>
											</li>
										</ul>
										</div>
									</div>
									<!-- End Product-Menu -->
									<div class="clear"></div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-md-12">		
									<!-- Start Product -->
									<div class="product">
										<div class="tab-content">
											<!-- ВИД СПИСКОМ -->
											<div role="tabpanel" class="tab-pane fade in active" id="display-1-1">
												<div class="row">
													<div class="listview">
														<!-- Start Single-Product -->
														<?php
														error_reporting( E_ERROR );

															$num = 16;
															$page = (int)$_GET['page'];

															$count = mysql_query("SELECT COUNT(*) FROM table_products",$link);
															$temp = mysql_fetch_array($count);

															if ($temp[0] > 0);
															{
																$tempcount = $temp[0];

															$total = (($tempcount - 1) / $num) + 1;
															$total = intval($total);

															$page = intval($page);

															if (empty($page) or $page < 0) $page = 1;
																if($page > $total) $page = $total;

															$start = $page * $num - $num;
															$qury_start_num = " LIMIT $start, $num";
															}
															?>
														<?php
																				$query = mysql_query("SET NAMES utf8");

																				$kurs = mysql_query("SELECT * FROM kurs");
																				$row1 = mysql_fetch_row($kurs);

																				$result = mysql_query("SELECT * FROM table_products ORDER BY $sorting $qury_start_num",$link);

																				if (mysql_num_rows($result) > 0)
																					{
																						$row = mysql_fetch_array($result);

																						do
																						{
																							echo '  
																							<div class="single-product">
																							<div class="col-md-3 col-sm-4 col-xs-12">
																								<div class="label_new">
																									<span class="new">new</span>
																								</div>
																								<div class="product-img">
																									<a href="#">
																										<img class="primary-img" src="img/product/mediam/'.$row["image"].'" >
																									</a>
																								</div>
																							</div>
																							<div class="col-md-9 col-sm-8 col-xs-12">	
																								<div class="product-description">
																									<h5><a href="#">'.$row["title"].'</a></h5>
																									<div class="price-box">
																										<span class="price" id="pr">'.$row["price"].'.00 '.$row["valuta"].'</span>
																										<span class="old-price gfont-2">'.forex($row["valuta"],$row["price"],$row1[1],$row1[2],$row1[3]).''.znachok($row["valuta"]).' / </span>
																										<span class="old-price gfont-2">'.forex2($row["valuta"],$row["price"],znachok($row["valuta"]),$row1[1],$row1[2],$row1[3]).' '.znachok1($row["valuta"],znachok($row["valuta"])).' </span>
																									</div>
																									<span class="rating">
																									</span>
																									<div class="product-action">
																										<div class="button-group">
																											<div class="product-button">
																												<button><i class="fa fa-shopping-cart"></i> Купить</button>
																											</div>
																											<div class="product-button-2">
																												<a href="#" name="1" class="modal-view" data-toggle="modal" data-target="#'.$row["products_id"].'" title="Просмотр"><i class="fa fa-search-plus"></i></a>
																											</div>
																											<div class="product-button-3">
																												<a href="delete.php?id='.$row["products_id"].'""><i class="fa fa-trash-o"></i></a>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>

																						<!-- QUICKVIEW PRODUCT -->
																							<div id="quickview-wrapper">
																							   <!-- Modal -->
																							   <div class="modal fade" id="'.$row["products_id"].'"  role="dialog">
																								    <div class="modal-dialog" role="document">
																										<div class="modal-content">
																											<div class="modal-header">
																												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																											</div>
																											<div class="modal-body">
																												<div class="modal-product">
																													<div class="product-images">
																													<div class="clear"></div>
																													<div class="tab-content">
																														<!-- Product = display-1-1 -->
																														<div role="tabpanel" class="tab-pane fade in active" id="'.trim($row["image"], '.jpg').'">
																															<div class="row">
																																<div class="col-xs-12">
																																	<div class="toch-photo">
																																		<img src="img/product/mediam/'.$row["image"].'" data-imagezoom="true" />
																																	</div>
																																</div>
																															</div>
																														</div>
																														<!-- End Product = display-1-1 -->
																														<!-- Start Product = display-1-2 -->
																														<div role="tabpanel" class="tab-pane fade" id="'.trim($row["image2"], '.jpg').'">
																															<div class="row">
																																<div class="col-xs-12">
																																	<div class="toch-photo">
																																		<a href="#"><img src="img/product/mediam/'.$row["image2"].'" data-imagezoom="true"/></a>
																																	</div>
																																</div>
																															</div>
																														</div>
																														<!-- End Product = display-1-2 -->
																														<!-- Start Product = di3play-1-3 -->
																														<div role="tabpanel" class="tab-pane fade" id="'.trim($row["image3"], '.jpg').'">
																															<div class="row">
																																<div class="col-xs-12">
																																	<div class="toch-photo">
																																		<a href="#"><img src="img/product/mediam/'.$row["image3"].'" data-imagezoom="true" /></a>
																																	</div>
																																</div>
																															</div>
																														</div>
																														<!-- End Product = display-1-3 -->
																													</div>

																														<div class="toch-prond-menu">
																														<ul role="tablist">
																														<li role="presentation" class=" active"><a href="#'.trim($row["image"], '.jpg').'" role="tab" data-toggle="tab"><img src="img/product/mediam/'.$row["image"].'" alt="#" /></a></li>
																														<li role="presentation"><a href="#'.trim($row["image2"], '.jpg').'" role="tab" data-toggle="tab"><img src="img/product/mediam/'.$row["image2"].'" /></a></li>
																														<li role="presentation"><a href="#'.trim($row["image3"], '.jpg').'" role="tab" data-toggle="tab"><img src="img/product/mediam/'.$row["image3"].'" /></a></li>
																														</ul>
																														</div>
																														<!--<div class="main-image images">
																														<img alt="#" src="img/product/mediam/'.$row["image"].'"/>
																														</div>-->
																														</div><!-- .product-images -->

																													<div class="product-info">
																														<h1>'.$row["title"].'</h1>
																														<div class="price-box-3">
																															<hr />
																															<div class="s-price-box">
																																<span class="new-price">'.$row["price"].'.00 '.$row["valuta"].'</span>
																																<span class="old-price gfont-2">'.forex($row["valuta"],$row["price"],$row1[1],$row1[2],$row1[3]).''.znachok($row["valuta"]).' / </span>
																																<span class="old-price gfont-2">'.forex2($row["valuta"],$row["price"],znachok($row["valuta"]),$row1[1],$row1[2],$row1[3]).' '.znachok1($row["valuta"],znachok($row["valuta"])).' </span>
																															</div>
																															<hr />
																														</div>
																														<div class="quick-desc">
																														</div>

																														<div class="quick-add-to-cart">
																															<form method="post" class="cart">
																																<button class="single_add_to_cart_button" type="submit">Купить</button>
																															</form>
																														</div>
																													</div><!-- .product-info -->
																													<TABLE BORDER id="des" >
																														        <TR><TH>Страна</TH>
																														                <TD>'.$row["country"].'</TD></TR>
																														        <TR><TH>Период</TH>
																														                <TD>'.$row["period"].'</TD></TR>
																														        <TR><TH>Вид чекана</TH>
																														                <TD>'.$row["vid_chekana"].'</TD></TR>
																														        <TR><TH>Номинал</TH>
																														                <TD>'.$row["nominal"].'</TD></TR>
																														        <TR><TH>Год</TH>
																														                <TD>'.$row["datetime"].'</TD></TR>
																														        <TR><TH>Материал</TH>
																														                <TD>'.$row["material"].'</TD></TR>
																														        <TR><TH>Проба</TH>
																														                <TD>'.$row["proba"].'</TD></TR>
																														        <TR><TH>Гурт</TH>
																														                <TD>'.$row["gurt"].'</TD></TR>
																														        <TR><TH>Отношение авс/рев</TH>
																														                <TD>'.$row["otnoshenie"].'</TD></TR>
																														        <TR><TH>Вес (г)</TH>
																														                <TD>'.$row["weight"].'</TD></TR>
																														        <TR><TH>Диаметр (мм)</TH>
																														                <TD>'.$row["diametr"].'</TD></TR>
																														        <TR><TH>Тираж</TH>
																														                <TD>'.$row["tiraj"].'</TD></TR>       
																														</TABLE>
																												</div><!-- .modal-product -->
																											</div><!-- .modal-body -->
																										</div><!-- .modal-content -->
																								    </div><!-- .modal-dialog -->
																							   </div>
																							   <!-- END Modal -->
																							</div>
																							<!-- END QUICKVIEW PRODUCT -->
																							';
																						}
																							while($row = mysql_fetch_array($result));
																					}
														?>

													</div>
												</div>
												<!-- Start Pagination Area -->
												<?php
																  error_reporting( E_ERROR );
																	if ($page != 1) { $pstr_prev = '<li><a class="pstr-prev" href="main.php?page='.($page - 1).'">&lt;</a></li>';}
																	if ($page != $total) $pstr_next = '<li><a class="pstr_next" href="main.php?page='.($page + 1).'">&gt;</a></li>';

																	//Формируем ссылки со страницами
																	if($page - 5 > 0) $page5left = '<li><a href="main.php?page='.($page - 5).'">'.($page - 5).'</a></li>';
																	if($page - 4 > 0) $page4left = '<li><a href="main.php?page='.($page - 4).'">'.($page - 4).'</a></li>';
																	if($page - 3 > 0) $page3left = '<li><a href="main.php?page='.($page - 3).'">'.($page - 3).'</a></li>';
																	if($page - 2 > 0) $page2left = '<li><a href="main.php?page='.($page - 2).'">'.($page - 2).'</a></li>';
																	if($page - 1 > 0) $page1left = '<li><a href="main.php?page='.($page - 1).'">'.($page - 1).'</a></li>';

																	if($page + 5 <= $total) $page5right = '<li><a href="main.php?page='.($page + 5).'">'.($page + 5).'</a></li>';
																	if($page + 4 <= $total) $page4right = '<li><a href="main.php?page='.($page + 4).'">'.($page + 4).'</a></li>';
																	if($page + 3 <= $total) $page3right = '<li><a href="main.php?page='.($page + 3).'">'.($page + 3).'</a></li>';
																	if($page + 2 <= $total) $page2right = '<li><a href="main.php?page='.($page + 2).'">'.($page + 2).'</a></li>';
																	if($page + 1 <= $total) $page1right = '<li><a href="main.php?page='.($page + 1).'">'.($page + 1).'</a></li>';


																	if ($page+5 < $total)
																	{
																		$strtotal = '<li><p class="nav-point">...</p></li><li><a href="main.php?page='.$total.'">'.$total.'</a></li>';

																	}else
																	{
																		$strtotal = "";
																	}
																	if ($total > 1)
																	{ 

																									echo '
																													<div class="pagination-area">
																														<div class="row">
																															<div class="col-xs-5">
																																<div class="pagination">
																																	<ul>
																																	';
																																	echo $pstr_prev.$page5left.$page4left.$page3left.$page2left.$page1left."<li class='active'><a  href='main.php?page=".$page."'>".$page."</a></li>".$page1right.$page2right.$page3right.$page4right.$page5right.$strtotal.$pstr_next;
																																	echo'
																																	</ul>
																																</div>
																											
																														</div>
																													</div>
																													</div>
																													<div class="col-xs-7">
																																<div class="product-result">
																																	<span>Показано '.$num.' монеты из '.$tempcount.'</span>
																																</div>
																															</div>
																																';
																															}																															
												?>
												<!-- End Pagination Area -->
											</div>
											<!-- End ВИД СПИСКОМ -->


											<!--ВИД ПЛИТКОЙ  -->											
											<!-- Start Product-->
											<div role="tabpanel" class="tab-pane fade " id="display-1-2">
												<div class="row">
													<?php
																		error_reporting( E_ERROR );

																		if (!empty($cat) && !empty($type))
																		{
																			$querycat = "brand='$cat' AND type='$type'";
																		}
																		else
																		{
																			if (!empty($type))
																			{
																				$querycat = "type='$type'";
																			}else
																					{
																						$querycat = "";
																					}	
																		}	
																		$num = 16;
																		$page = (int)$_GET['page'];

																		$count = mysql_query("SELECT COUNT(*) FROM table_products WHERE $querycat",$link);
																		$temp = mysql_fetch_array($count);

																		if ($temp[0] > 0);
																		{
																			$tempcount = $temp[0];

																		$total = (($tempcount - 1) / $num) + 1;
																		$total = intval($total);

																		$page = intval($page);

																		if (empty($page) or $page < 0) $page = 1;
																			if($page > $total) $page = $total;

																		$start = $page * $num - $num;
																		$qury_start_num = " LIMIT $start, $num";
																		}
														?>
													<?php
																				$query = mysql_query("SET NAMES utf8");
																				$result = mysql_query("SELECT * FROM table_products ORDER BY $sorting ",$link);

																				if (mysql_num_rows($result) > 0)
																					{
																						$row = mysql_fetch_array($result);

																						do
																						{
																							echo '  
																							<div class="col-md-3 col-sm-4 col-xs-12">
																							<div class="single-product">
																								<div class="label_new">
																									<span class="new">new</span>
																								</div>
																								<div class="product-img">
																									<a href="#">
																										<img class="primary-img" src="img/product/mediam/'.$row["image"].'" alt="Product">
																									</a>
																								</div>
																								<div class="product-description">
																									<h5><a href="#">'.$row["title"].'</a></h5>
																									<div class="price-box">
																										<span class="price">'.$row["price"].'.00 '.$row["valuta"].'</span></br>
																										<span class="old-price gfont-2">'.forex($row["valuta"],$row["price"],$row1[1],$row1[2],$row1[3]).''.znachok($row["valuta"]).' / </span>
																										<span class="old-price gfont-2">'.forex2($row["valuta"],$row["price"],znachok($row["valuta"]),$row1[1],$row1[2],$row1[3]).' '.znachok1($row["valuta"],znachok($row["valuta"])).' </span>
																									</div>
																									<div class="product-action">
																										<div class="button-group">
																											<div class="product-button">
																												<button><i class="fa fa-shopping-cart"></i>Купить</button>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																							';
																						}
																							while($row = mysql_fetch_array($result));
																					}
													?>
												</div>
												<!-- Start Pagination Area -->
												<?php
														if ($page != 1) { $pstr_prev = '<li><a class="pstr-prev" href="main.php?page='.($page - 1).'">&lt;</a></li>';}
														if ($page != $total) $pstr_next = '<li><a class="pstr_next" href="main.php?page='.($page + 1).'">&gt;</a></li>';

														//Формируем ссылки со страницами
														if($page - 5 > 0) $page5left = '<li><a href="main.php?page='.($page - 5).'">'.($page - 5).'</a></li>';
														if($page - 4 > 0) $page4left = '<li><a href="main.php?page='.($page - 4).'">'.($page - 4).'</a></li>';
														if($page - 3 > 0) $page3left = '<li><a href="main.php?page='.($page - 3).'">'.($page - 3).'</a></li>';
														if($page - 2 > 0) $page2left = '<li><a href="main.php?page='.($page - 2).'">'.($page - 2).'</a></li>';
														if($page - 1 > 0) $page1left = '<li><a href="main.php?page='.($page - 1).'">'.($page - 1).'</a></li>';

														if($page + 5 <= $total) $page5right = '<li><a href="main.php?page='.($page + 5).'">'.($page + 5).'</a></li>';
														if($page + 4 <= $total) $page4right = '<li><a href="main.php?page='.($page + 4).'">'.($page + 4).'</a></li>';
														if($page + 3 <= $total) $page3right = '<li><a href="main.php?page='.($page + 3).'">'.($page + 3).'</a></li>';
														if($page + 2 <= $total) $page2right = '<li><a href="main.php?page='.($page + 2).'">'.($page + 2).'</a></li>';
														if($page + 1 <= $total) $page1right = '<li><a href="main.php?page='.($page + 1).'">'.($page + 1).'</a></li>';


														if ($page+5 < $total)
														{
															$strtotal = '<li><p class="nav-point">...</p></li><li><a href="main.php?page='.$total.'">'.$total.'</a></li>';

														}else
														{
															$strtotal = "";
														}
														if ($total > 1)
														{ 
																						echo '	<div class="pagination-area">
																											<div class="row">
																												<div class="col-xs-5">
																													<div class="pagination">
																														<ul>
																														';
																														echo $pstr_prev.$page5left.$page4left.$page3left.$page2left.$page1left."<li class='active'><a  href='main.php?page=".$page."'>".$page."</a></li>".$page1right.$page2right.$page3right.$page4right.$page5right.$strtotal.$pstr_next;
																														echo'
																														</ul>
																													</div>
																											</div>
																										</div>
																										</div>
																													';
																												}														
												?>
												<!-- End Pagination Area -->
											</div>
											<!-- End Product = TV -->
										</div>
									</div>
									<!-- End ВИД ПЛИТКОЙ -->
								</div>
							</div>
						</div>
						<!-- END PRODUCT-AREA -->
					</div>
				</div>
			</div>
			<!-- START SUBSCRIBE-AREA -->
			<div class="subscribe-area">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-7 col-xs-12">
							<label class="hidden-sm hidden-xs">Подписаться на новости:</label>
							<div class="subscribe">
								<form action="#">
									<input type="text" placeholder="E-mail">
									<button type="submit">Подписаться</button>
								</form>
							</div>
						</div>
						<div class="col-md-4 col-sm-5 col-xs-12">
							<div class="social-media">
								<a href="#"><i class="fa fa-facebook fb"></i></a>
								<a href="#"><i class="fa fa-instagram in"></i></a>
								<a href="#"><i class="fa fa-rss rs"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<!-- END SUBSCRIBE-AREA -->
		</section>
		<!-- END PAGE-CONTENT -->
		<!-- FOOTER-AREA START -->
		<footer class="footer-area">
			<!-- Copyright-area Start -->
			<div class="copyright-area">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="copyright">
								<p>Copyright &copy; </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Copyright-area End -->
		</footer>
		<!-- FOOTER-AREA END -->	
		
				<!-- jquery
		============================================ -->		
        <script src="js/jquery-1.11.3.min.js"></script>
				<!-- bootstrap JS
		============================================ -->		
        <script src="js/bootstrap.min.js"></script>
				<!-- wow JS
		============================================ -->		
        <script src="js/wow.min.js"></script>
				<!-- meanmenu JS 
		============================================ -->		
        <script src="js/jquery.meanmenu.js"></script>
				<!-- owl.carousel JS
		============================================ -->		
        <script src="js/owl.carousel.min.js"></script>
				<!-- scrollUp JS
		============================================ -->		
        <script src="js/jquery.scrollUp.min.js"></script>
        <!-- Nivo slider js
		============================================ --> 		
		<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
				<!-- plugins JS
		============================================ -->		
				<!-- Image zoom js
		============================================ --> 		
				<script src="js/imagezoom.js"></script>
        <script src="js/plugins.js"></script>
				<!-- main JS
		============================================ -->		
        <script src="js/main.js"></script>
        <?php
				}
				?>
    </body>
</html>
