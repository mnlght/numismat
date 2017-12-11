 <li>
	     <?php
				$result = mysql_query("SELECT * FROM category WHERE type='Россия и СССР' AND id='10'",$link);
				$result_set = mysql_query("SELECT * FROM table_products WHERE brand='1921-1923'",$link);
					$resl = mysql_num_rows($result_set);
					$row=mysql_fetch_array($result);
						echo'
						<li><a href="view_cat.php?cat='.$row["brand"].'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
						 ' ;
	     ?>
</li>
 <li>
	     <?php
				$result = mysql_query("SELECT * FROM category WHERE type='Россия и СССР' AND id='11'",$link);
				$result_set = mysql_query("SELECT * FROM table_products WHERE brand='1924-1936'",$link);
					$resl = mysql_num_rows($result_set);
					$row=mysql_fetch_array($result);
						echo'
						<li><a href="view_cat.php?cat='.$row["brand"].'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
						 ' ;
	     ?>
</li>
 <li>
	     <?php
				$result = mysql_query("SELECT * FROM category WHERE type='Россия и СССР' AND id='12'",$link);
				$result_set = mysql_query("SELECT * FROM table_products WHERE brand='1937-1946'",$link);
					$resl = mysql_num_rows($result_set);
					$row=mysql_fetch_array($result);
						echo'
						<li><a href="view_cat.php?cat='.$row["brand"].'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
						 ' ;
	     ?>
</li>
 <li>
	     <?php
				$result = mysql_query("SELECT * FROM category WHERE type='Россия и СССР' AND id='13'",$link);
				$result_set = mysql_query("SELECT * FROM table_products WHERE brand='1947-1958'",$link);
					$resl = mysql_num_rows($result_set);
					$row=mysql_fetch_array($result);
						echo'
						<li><a href="view_cat.php?cat='.$row["brand"].'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
						 ' ;
	     ?>
</li>
 <li>
	     <?php
				$result = mysql_query("SELECT * FROM category WHERE type='Россия и СССР' AND id='14'",$link);
				$result_set = mysql_query("SELECT * FROM table_products WHERE brand='1961-1991'",$link);
					$resl = mysql_num_rows($result_set);
					$row=mysql_fetch_array($result);
						echo'
						<li><a href="view_cat.php?cat='.$row["brand"].'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
						 ' ;
	     ?>
</li>
<li>
	     <?php
				$result = mysql_query("SELECT * FROM category WHERE type='Россия и СССР' AND id='15'",$link);
				$result_set = mysql_query("SELECT * FROM table_products WHERE brand='После 1991'",$link);
					$resl = mysql_num_rows($result_set);
					$row=mysql_fetch_array($result);
						echo'
						<li><a href="view_cat.php?cat='.$row["brand"].'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
						 ' ;
	     ?>
</li>
<li>
	     <?php
				$result = mysql_query("SELECT * FROM category WHERE type='Россия и СССР' AND id='16'",$link);
				$result_set = mysql_query("SELECT * FROM table_products WHERE brand='Юбилейные монеты и банковские наборы'",$link);
					$resl = mysql_num_rows($result_set);
					$row=mysql_fetch_array($result);
						echo'
						<li><a href="view_cat.php?cat='.$row["brand"].'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
						 ' ;
	     ?>
</li>