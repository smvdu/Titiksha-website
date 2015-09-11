<?php
	/**
 * MYSQL Cerendentials Include Page
 *
 * @author Amandeep Gupta <amandeeptheviper@gmail.com>
 */
			$mysql=mysql_connect("localhost","root","netbean") 
			or die ("Cannot connect to database");
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			$db = mysql_select_db("fest",$mysql);
?>