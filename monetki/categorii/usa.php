<li>
	     <?php
				$result = mysql_query("SELECT * FROM category WHERE type='США' AND id='74'",$link);
				$result_set = mysql_query("SELECT * FROM table_products WHERE brand='Памятные, юбилейные и инвестиционные'",$link);
					$resl = mysql_num_rows($result_set);
					$row=mysql_fetch_array($result);
						echo'
						<li><a href="view_cat.php?cat='.$row["brand"].'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
						 ' ;
	     ?>
</li>
<li>
	     <?php
				$result = mysql_query("SELECT * FROM category WHERE type='США' AND id='75'",$link);
				$result_set = mysql_query("SELECT * FROM table_products WHERE brand='Обиходные' AND type='США'",$link);
					$resl = mysql_num_rows($result_set);
					$row=mysql_fetch_array($result);
						echo'
						<li><a href="view_cat.php?cat='.$row["brand"].'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
						 ' ;
	     ?>
</li>
<li>
	     <?php
				$result = mysql_query("SELECT * FROM category WHERE type='США' AND id='76'",$link);
				$result_set = mysql_query("SELECT * FROM table_products WHERE brand='Банковские наборы'",$link);
					$resl = mysql_num_rows($result_set);
					$row=mysql_fetch_array($result);
						echo'
						<li><a href="view_cat.php?cat='.$row["brand"].'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
						 ' ;
	     ?>
</li>