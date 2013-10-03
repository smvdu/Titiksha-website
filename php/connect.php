<?php
	
	$mysql_host = "localhost";
	$mysql_user = "smvdunet_titik13";
	$mysql_password = "titiksh*2013";
	$mysql_database = "smvdunet_titiksha2013";

	/*$mysql_host = "localhost";
	$mysql_user = "root";
	$mysql_password = "";
	$mysql_database = "resurgence";*/

	mysql_connect($mysql_host,$mysql_user,$mysql_password) or die(mysql_error());   // Connect to database server with username and password
	mysql_select_db($mysql_database) or die(mysql_error());  // Select database.

	$sql= file_get_contents('php/table.sql');
	mysql_query($sql) or die(mysql_error());
?>