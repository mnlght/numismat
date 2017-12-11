<li>
	     <?php
				$result = mysql_query("SELECT * FROM category WHERE type='Северная Америка' AND id='77'",$link);
				$result_set = mysql_query("SELECT * FROM table_products WHERE brand='Канада'",$link);
					$resl = mysql_num_rows($result_set);
					$row=mysql_fetch_array($result);
						echo'
						<li><a href="view_cat.php?cat='.$row["brand"].'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
						 ' ;
	     ?>
</li>
<li>
	     <?php
				$result = mysql_query("SELECT * FROM category WHERE type='Северная Америка' AND id='78'",$link);
				$result_set = mysql_query("SELECT * FROM table_products WHERE brand='Мексика'",$link);
					$resl = mysql_num_rows($result_set);
					$row=mysql_fetch_array($result);
						echo'
						<li><a href="view_cat.php?cat='.$row["brand"].'&type='.$row["type"].'">'.$row["brand"].' ('.$resl.')</a></li>
						 ' ;
	     ?>
</li>