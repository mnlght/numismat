						<?php
							$user_id = $_SESSION['id'];
						?>
						<!-- CATEGORY-MENU-LIST START -->
	                    <div class="left-category-menu hidden-sm hidden-xs">
	                        <div class="left-product-cat">
	                            <div class="category-heading">
	                                <h2>категории</h2>
	                            </div>
	                            <div class="category-menu-list">
	                                <ul>
	                                <?php
	                                	$user_result = mysql_query("SELECT * FROM users WHERE id=$user_id");
	                                	$row=mysql_fetch_array($user_result);
	                                	 //1
	                                    if ($row["cat1"] == '1') {
	                                ?>
	                                    <!-- Single menu start -->
	                                    <li class="arrow-plus">

	                                    		<?php
	                                    																$result = mysql_query("SELECT * FROM category WHERE type='Царская Россия до 1917'",$link);
	                                    																$row=mysql_fetch_array($result);

																											$plana = mysql_query("SELECT * FROM table_products WHERE type='Царская Россия до 1917'",$link);
																											$res = mysql_num_rows($plana);
																										
																					
												echo '								

	                                        <a href="view_cat.php?type='.$row["type"].'">Царская Россия до 1917 ('.$res.') </a>
';
	                                        ?>
	                                        <!--  MEGA MENU START -->
	                                        <div class="cat-left-drop-menu" style="width:210px;padding:10px;">
	                                            <div class="cat-left-drop-menu-left" style="width:200px;">
	                                                <ul>
	                                                	<?php include_once( __DIR__ . '/../categorii/Carskaya.php' ); ?>													
	                                                </ul>
	                                            </div>
	                                        </div>
	                                        <!-- MEGA MENU END -->
	                                        
	                                    </li>	
	                                    <?php
	                                    }
	                                    ?>                                    <!-- Single menu end -->
										
	                                     <?php
	                                	$user_result = mysql_query("SELECT * FROM users WHERE id=$user_id");
	                                	$row=mysql_fetch_array($user_result);
	                                	 //1
	                                    if ($row["cat2"] == '1') {
	                               		 ?>
																			<!-- Single menu start -->
	                                    <li class="arrow-plus">

	                                    		<?php
	                                    		$result = mysql_query("SELECT * FROM category WHERE type='Россия и СССР'",$link);
	                                    		$row=mysql_fetch_array($result);
																											$plana = mysql_query("SELECT * FROM table_products WHERE type='Россия и СССР'",$link);
																											$res = mysql_num_rows($plana);
																												


																												echo '
	                                        <a href="view_cat.php?type='.$row["type"].'">Россия и СССР ('.$res.')</a>
	                                        ';
	                                        ?>
	                                        <!--  MEGA MENU START -->
	                                        <div class="cat-left-drop-menu" style="width:200px;padding:10px;">
	                                            <div class="cat-left-drop-menu-left" style="width:150px;">
	                                                <ul>
	                                               <?php include_once( __DIR__ . '/../categorii/SSSR.php' ); ?>
	                                                </ul>
	                                            </div>
	                                        </div>
	                                        <!-- MEGA MENU END -->
	                                    </li>
	                                    <?php
	                                    }
	                                    ?>
	                                    <!-- Single menu end -->
	                                    <!-- Single menu start -->
	                                     <?php
	                                	$user_result = mysql_query("SELECT * FROM users WHERE id=$user_id");
	                                	$row=mysql_fetch_array($user_result);
	                                	 //1
	                                    if ($row["cat3"] == '1') {
	                               		 ?>
	                                    <li>
	                                    	<?php
																											$plana = mysql_query("SELECT * FROM table_products WHERE type='Монеты Украины из драг. сплавов'",$link);
																												$res = mysql_num_rows($plana);
																												?>
	                                        <a href="view_cat.php?type=Монеты Украины из драг. сплавов" style="line-height: 25px;">Монеты Украины из драг.сплавов (<?=$res;?>)</a>
	                                    </li>
	                                     <?php
	                                    }
	                                    ?>
	                                    <!-- Single menu end -->
	                                    <!-- Single menu start -->
	                                    <?php
	                                	$user_result = mysql_query("SELECT * FROM users WHERE id=$user_id");
	                                	$row=mysql_fetch_array($user_result);
	                                	 //1
	                                    if ($row["cat4"] == '1') {
	                               		 ?>
	                                    <li class="arrow-plus">
	                                    <?php
																											$result = mysql_query("SELECT * FROM category WHERE type='Монеты Украины из недраг. сплавов'",$link);
																											$plana = mysql_query("SELECT * FROM table_products WHERE type='Монеты Украины из недраг. сплавов'",$link);
																												$res = mysql_num_rows($plana);
																												$row=mysql_fetch_array($result);
																												

	                                        echo '
	                                        <a href="view_cat.php?type='.$row["type"].'" style="line-height: 25px;">Монеты Украины из недраг. сплавов ('.$res.')</a>
	                                        ';
	                                        ?>
	                                         <div class="cat-left-drop-menu" style="width:200px;padding:10px;">
	                                            <div class="cat-left-drop-menu-left" style="width:200px;">
	                                                <ul>
	                                                	<?php include_once( __DIR__ . '/../categorii/urkNeDrag.php' ); ?>
	                                                </ul>
	                                            </div>
	                                        </div>
	                                    </li>
	                                     <?php
	                                    }
	                                    ?>
	                                     <?php
	                                	$user_result = mysql_query("SELECT * FROM users WHERE id=$user_id");
	                                	$row=mysql_fetch_array($user_result);
	                                	 //1
	                                    if ($row["cat5"] == '1') {
	                               		 ?>
	                                    <li class="arrow-plus">
	                                    		  <?php
																											$result = mysql_query("SELECT * FROM category WHERE type='Европа'",$link);
																											$plana = mysql_query("SELECT * FROM table_products WHERE type='Европа'",$link);
																												$res = mysql_num_rows($plana);
																												$row=mysql_fetch_array($result);
																												


	                                    	echo '
	                                    	<a href="view_cat.php?type='.$row["type"].'">Европа ('.$res.')</a>
	                                    	';
	                                    	?>
	                                    	<div class="cat-left-drop-menu" style="width:480px;padding:10px;">
	                                            <div class="cat-left-drop-menu-left" style="width:150px;">
	                                                <ul>

	                                                  <?php include_once( __DIR__ . '/../categorii/europe.php' ); ?>
	                                                </ul>
	                                            </div>
	                                            <div class="cat-left-drop-menu-left" style="width:150px;">
	                                                <ul>
	                                                  <?php include_once( __DIR__ . '/../categorii/europe2.php' ); ?>
	                                                </ul>
	                                            </div>
	                                            <div class="cat-left-drop-menu-left" style="width:120px;">
	                                                <ul>
	                                                   <?php include_once( __DIR__ . '/../categorii/europe3.php' ); ?>
	                                                </ul>
	                                            </div>
	                                        </div>
	                                    </li>
	                                    <?php
	                                    }
	                                    ?>
	                                    <?php
	                                	$user_result = mysql_query("SELECT * FROM users WHERE id=$user_id");
	                                	$row=mysql_fetch_array($user_result);
	                                	 //1
	                                    if ($row["cat6"] == '1') {
	                               		 ?>
	                                    <!-- Single menu end -->
																			<li class="arrow-plus">

																			<?php
																											$result = mysql_query("SELECT * FROM category WHERE type='Германия'",$link);
																											$plana = mysql_query("SELECT * FROM table_products WHERE type='Германия'",$link);
																												$res = mysql_num_rows($plana);
																												$row=mysql_fetch_array($result);
																												
	                                    	echo '
	                                    	<a href="view_cat.php?type='.$row["type"].'">Германия ('.$res.')</a>
	                                    	';
	                                    	?>
	                                    	<div class="cat-left-drop-menu" style="width:280px;padding:10px;">
	                                            <div class="cat-left-drop-menu-left" style="width:260px;">
	                                                <ul>
	                                                    <?php include_once( __DIR__ . '/../categorii/germany.php' ); ?>
	                                                </ul>
	                                            </div>
	                                      </div>
	                                    </li>
	                                    <?php
	                                    }
	                                    ?>
	                                     <?php
	                                	$user_result = mysql_query("SELECT * FROM users WHERE id=$user_id");
	                                	$row=mysql_fetch_array($user_result);
	                                	 //1
	                                    if ($row["cat7"] == '1') {
	                               		 ?>
	                                    <li class="arrow-plus">

																			<?php
																											$result = mysql_query("SELECT * FROM category WHERE type='Великобритания'",$link);
																											$plana = mysql_query("SELECT * FROM table_products WHERE type='Великобритания'",$link);
																												$res = mysql_num_rows($plana);
																												$row=mysql_fetch_array($result);
																												
	                                    	echo '
	                                    	<a href="view_cat.php?type='.$row["type"].'">Великобритания ('.$res.')</a>
	                                    	';
	                                    	?>
	                                    	<div class="cat-left-drop-menu" style="width:260px;padding:10px;">
	                                    				<div class="cat-left-drop-menu-left" style="width:240px;">
	                                                <ul>
	                                                     <?php include_once( __DIR__ . '/../categorii/britania.php' ); ?>
	                                            </div>
	                                       </div>
	                                    </li>
	                                    <?php
	                                    }
	                                    ?>
	                                    <?php
	                                	$user_result = mysql_query("SELECT * FROM users WHERE id=$user_id");
	                                	$row=mysql_fetch_array($user_result);
	                                	 //1
	                                    if ($row["cat8"] == '1') {
	                               		 ?>
	                                    <li class="arrow-plus">
	                                    			<?php
																											$result = mysql_query("SELECT * FROM category WHERE type='США'",$link);
																											$plana = mysql_query("SELECT * FROM table_products WHERE type='США'",$link);
																												$res = mysql_num_rows($plana);
																												$row=mysql_fetch_array($result);
																												
	                                    	echo '
	                                    	<a href="view_cat.php?type='.$row["type"].'">США ('.$res.')</a>
	                                    	';
	                                    	?>
	                                    	<div class="cat-left-drop-menu" style="width:250px;padding:10px;">
	                                    				<div class="cat-left-drop-menu-left" style="width:200px;">
	                                                <ul>
	                                                    <?php include_once( __DIR__ . '/../categorii/usa.php' ); ?>
	                                                </ul>
	                                            </div>
	                                      </div>
	                                    </li>
	                                    <?php
	                                    }
	                                    ?>
	                                    <?php
	                                	$user_result = mysql_query("SELECT * FROM users WHERE id=$user_id");
	                                	$row=mysql_fetch_array($user_result);
	                                	 //1
	                                    if ($row["cat9"] == '1') {
	                               		 ?>
	                                    <li>
	                                    	<?php
																											$plana = mysql_query("SELECT * FROM table_products WHERE type='Китай'",$link);
																												$res = mysql_num_rows($plana);
																												?>
	                                    	<a href="view_cat.php?type=Китай">Китай (<?=$res;?>)</a>
	                                    </li>
	                                    <?php
	                                    }
	                                    ?>
	                                    <?php
	                                	$user_result = mysql_query("SELECT * FROM users WHERE id=$user_id");
	                                	$row=mysql_fetch_array($user_result);
	                                	 //1
	                                    if ($row["cat10"] == '1') {
	                               		 ?>
	                                    <li>
	                                    	<?php
																											$plana = mysql_query("SELECT * FROM table_products WHERE type='Польша'",$link);
																												$res = mysql_num_rows($plana);
																												?>
	                                    	<a href="view_cat.php?type=Польша">Польша (<?=$res;?>)</a>
	                                    </li>
	                                    <?php
	                                    }
	                                    ?>
	                                    <?php
	                                	$user_result = mysql_query("SELECT * FROM users WHERE id=$user_id");
	                                	$row=mysql_fetch_array($user_result);
	                                	 //1
	                                    if ($row["cat11"] == '1') {
	                               		 ?>
	                                    <li class="arrow-plus">
	                                    	<?php
																											$result = mysql_query("SELECT * FROM category WHERE type='Северная Америка'",$link);
																											$plana = mysql_query("SELECT * FROM table_products WHERE type='Северная Америка'",$link);
																												$res = mysql_num_rows($plana);
																												$row=mysql_fetch_array($result);
																				
	                                    	echo '
	                                    	<a href="view_cat.php?type='.$row["type"].'">Северная Америка ('.$res.')</a>
	                                    	';
	                                    	?>
	                                    	<div class="cat-left-drop-menu" style="width:200px;padding:10px;">
	                                    				<div class="cat-left-drop-menu-left" style="width:150px;">
	                                                <ul>
	                                                    <?php include_once( __DIR__ . '/../categorii/na.php' ); ?>
	                                                </ul>
	                                            </div>
	                                      </div>
	                                    </li>
	                                    <?php
	                                    }
	                                    ?>
	                                    
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
						<!-- END CATEGORY-MENU-LIST -->