<li>
	     <?php
				$result = mysql_query("SELECT * FROM category WHERE type='Великобритания' AND id='64'",$link);
				$result_set = mysql_query("SELECT * FROM table_products WHERE brand='Англия до 1837 года'",$link);
					$resl = mysql_num_rows($result_set);
					$row=mysql_fetch_array($result);
						echo'
						<li><a href="view_cat.php?cat='.$row["brand"].'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
						 ' ;
	     ?>
</li>
<li>
	     <?php
				$result = mysql_query("SELECT * FROM category WHERE type='Великобритания' AND id='65'",$link);
				$result_set = mysql_query("SELECT * FROM table_products WHERE brand='Виктория (1837-1901)'",$link);
					$resl = mysql_num_rows($result_set);
					$row=mysql_fetch_array($result);
						echo'
						<li><a href="view_cat.php?cat='.$row["brand"].'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
						 ' ;
	     ?>
</li>
<li>
	     <?php
				$result = mysql_query("SELECT * FROM category WHERE type='Великобритания' AND id='66'",$link);
				$result_set = mysql_query("SELECT * FROM table_products WHERE brand='Эдуард VII (1902-1910)'",$link);
					$resl = mysql_num_rows($result_set);
					$row=mysql_fetch_array($result);
						echo'
						<li><a href="view_cat.php?cat='.$row["brand"].'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
						 ' ;
	     ?>
</li>
<li>
	     <?php
				$result = mysql_query("SELECT * FROM category WHERE type='Великобритания' AND id='67'",$link);
				$result_set = mysql_query("SELECT * FROM table_products WHERE brand='Георг V (1911-1936)'",$link);
					$resl = mysql_num_rows($result_set);
					$row=mysql_fetch_array($result);
						echo'
						<li><a href="view_cat.php?cat='.$row["brand"].'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
						 ' ;
	     ?>
</li>
<li>
	     <?php
				$result = mysql_query("SELECT * FROM category WHERE type='Великобритания' AND id='68'",$link);
				$result_set = mysql_query("SELECT * FROM table_products WHERE brand='Георг VI (1937-1952)'",$link);
					$resl = mysql_num_rows($result_set);
					$row=mysql_fetch_array($result);
						echo'
						<li><a href="view_cat.php?cat='.$row["brand"].'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
						 ' ;
	     ?>
</li>
<li>
	     <?php
				$result = mysql_query("SELECT * FROM category WHERE type='Великобритания' AND id='69'",$link);
				$result_set = mysql_query("SELECT * FROM table_products WHERE brand='Елизавета II (до 1970)'",$link);
					$resl = mysql_num_rows($result_set);
					$row=mysql_fetch_array($result);
						echo'
						<li><a href="view_cat.php?cat='.$row["brand"].'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
						 ' ;
	     ?>
</li>
<li>
	     <?php
				$result = mysql_query("SELECT * FROM category WHERE type='Великобритания' AND id='70'",$link);
				$result_set = mysql_query("SELECT * FROM table_products WHERE brand='Елизавета II (после 1968)'",$link);
					$resl = mysql_num_rows($result_set);
					$row=mysql_fetch_array($result);
						echo'
						<li><a href="view_cat.php?cat='.$row["brand"].'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
						 ' ;
	     ?>
</li>
<li>
	     <?php
				$result = mysql_query("SELECT * FROM category WHERE type='Великобритания' AND id='71'",$link);
				$result_set = mysql_query("SELECT * FROM table_products WHERE brand='Джерси, Гернси, Мэн, Гибралтар'",$link);
					$resl = mysql_num_rows($result_set);
					$row=mysql_fetch_array($result);
						echo'
						<li><a href="view_cat.php?cat='.$row["brand"].'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
						 ' ;
	     ?>
</li>
<li>
	     <?php
				$result = mysql_query("SELECT * FROM category WHERE type='Великобритания' AND id='72'",$link);
				$result_set = mysql_query("SELECT * FROM table_products WHERE brand='Британские колонии'",$link);
					$resl = mysql_num_rows($result_set);
					$row=mysql_fetch_array($result);
						echo'
						<li><a href="view_cat.php?cat='.$row["brand"].'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
						 ' ;
	     ?>
</li>
<li>
	     <?php
				$result = mysql_query("SELECT * FROM category WHERE type='Великобритания' AND id='73'",$link);
				$result_set = mysql_query("SELECT * FROM table_products WHERE brand='Другое'",$link);
					$resl = mysql_num_rows($result_set);
					$row=mysql_fetch_array($result);
						echo'
						<li><a href="view_cat.php?cat='.$row["brand"].'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
						 ' ;
	     ?>
</li>