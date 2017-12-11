<li>
	     <?php
				$result = mysql_query("SELECT * FROM category WHERE type='Монеты Украины из недраг. сплавов' AND id='17'",$link);
				$result_set = mysql_query("SELECT * FROM table_products WHERE brand='Памятные и юбилейные'",$link);
					$resl = mysql_num_rows($result_set);
					$row=mysql_fetch_array($result);
						echo'
						<li><a href="view_cat.php?cat='.$row["brand"].'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
						 ' ;
	     ?>
</li>
<li>
	     <?php
				$result = mysql_query("SELECT * FROM category WHERE type='Монеты Украины из недраг. сплавов' AND id='18'",$link);
				$result_set = mysql_query("SELECT * FROM table_products WHERE brand='Обиходные'",$link);
					$resl = mysql_num_rows($result_set);
					$row=mysql_fetch_array($result);
						echo'
						<li><a href="view_cat.php?cat='.$row["brand"].'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
						 ' ;
	     ?>
</li>