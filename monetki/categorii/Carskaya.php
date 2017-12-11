<li>
	                                                														<?php
																											$result = mysql_query("SELECT * FROM category WHERE type='Царская Россия до 1917' AND id='1'",$link);
																											$result_set = mysql_query("SELECT * FROM table_products WHERE brand='Монеты до 1700 года'",$link);
																												$resl = mysql_num_rows($result_set);
																												$row=mysql_fetch_array($result);
																													echo'
																											<li><a href="view_cat.php?cat='.$row["brand"].'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
																													 ' ;
																																											
																	                                                	?>
																	                                                	</li>
																	                                                	<li>
																	                                                	<?php

																											$result = mysql_query("SELECT * FROM category WHERE type='Царская Россия до 1917' AND id='2'",$link);
																											$result_set = mysql_query("SELECT * FROM table_products WHERE brand='1700-1762 года'",$link);																		
																												$resl = mysql_num_rows($result_set);
																												$row=mysql_fetch_array($result);
																												
																													echo'
																											<li><a href="view_cat.php?cat='.($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
																													 ' ;
																													 ?>
																												
	                                                	</li>
	                                                			<li>
																	                                                	<?php
																											$result = mysql_query("SELECT * FROM category WHERE type='Царская Россия до 1917' AND id='3'",$link);
																											$result_set = mysql_query("SELECT * FROM table_products WHERE brand='1762-1796 (Екатерина ||)'",$link);																		
																												$resl = mysql_num_rows($result_set);
																												$row=mysql_fetch_array($result);
																												
																													echo'
																											<li><a href="view_cat.php?cat='.($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
																													 ' ;
																													 ?>
																												
	                                                	</li>
	                                                		<li>
																	                                                	<?php
																											$result = mysql_query("SELECT * FROM category WHERE type='Царская Россия до 1917' AND id='4'",$link);
																											$result_set = mysql_query("SELECT * FROM table_products WHERE brand='1796-1801 (Павел |) '",$link);																		
																												$resl = mysql_num_rows($result_set);
																												$row=mysql_fetch_array($result);
																												
																													echo'
																											<li><a href="view_cat.php?cat='.($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
																													 ' ;
																													 ?>
																												
	                                                	</li>
	                                                														
	                                                	</li>
	                                                	<li>
																	                                                	<?php
																											$result = mysql_query("SELECT * FROM category WHERE type='Царская Россия до 1917' AND id='5'",$link);
																											$result_set = mysql_query("SELECT * FROM table_products WHERE brand='1801-1825 (Александр |)'",$link);																		
																												$resl = mysql_num_rows($result_set);
																												$row=mysql_fetch_array($result);
																												
																													echo'
																											<li><a href="view_cat.php?cat='.($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
																													 ' ;
																													 ?>
																												
	                                                	</li>
	                                                	<li>
																	                                                	<?php
																											$result = mysql_query("SELECT * FROM category WHERE type='Царская Россия до 1917' AND id='6'",$link);
																											$result_set = mysql_query("SELECT * FROM table_products WHERE brand='1825-1855 (Николай |)'",$link);																		
																												$resl = mysql_num_rows($result_set);
																												$row=mysql_fetch_array($result);
																												
																													echo'
																											<li><a href="view_cat.php?cat='.($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
																													 ' ;
																													 ?>
																													 </li>
														<li>
																	                                                	<?php
																											$result = mysql_query("SELECT * FROM category WHERE type='Царская Россия до 1917' AND id='7'",$link);
																											$result_set = mysql_query("SELECT * FROM table_products WHERE brand='1855-1881 (Александр ||)'",$link);																		
																												$resl = mysql_num_rows($result_set);
																												$row=mysql_fetch_array($result);
																												
																													echo'
																											<li><a href="view_cat.php?cat='.($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
																													 ' ;
																													 ?>
																													 </li>
																													 <li>
																	                                                	<?php
																											$result = mysql_query("SELECT * FROM category WHERE type='Царская Россия до 1917' AND id='8'",$link);
																											$result_set = mysql_query("SELECT * FROM table_products WHERE brand='1881-1894 (Александр |||)'",$link);																		
																												$resl = mysql_num_rows($result_set);
																												$row=mysql_fetch_array($result);
																												
																													echo'
																											<li><a href="view_cat.php?cat='.($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
																													 ' ;
																													 ?>
																													 </li>
																<li>
																	                                                	<?php
																											$result = mysql_query("SELECT * FROM category WHERE type='Царская Россия до 1917' AND id='9'",$link);
																											$result_set = mysql_query("SELECT * FROM table_products WHERE brand='Монеты эпохи Николая ||'",$link);																		
																												$resl = mysql_num_rows($result_set);
																												$row=mysql_fetch_array($result);
																												
																													echo'
																											<li><a href="view_cat.php?cat='.($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
																													 ' ;
																													 ?>
																													 </li>