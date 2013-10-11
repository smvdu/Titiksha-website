<?php
	/**
 * MYSQL Cerendentials Include Page
 *
 * @author Akshay Pratap Singh <pratapakshay0@gmail.com>
 */


	$mysql_host = "localhost";
	$mysql_user = "root";
	$mysql_password = "pratap12355";
	$mysql_database = "titiksha";

	mysql_connect($mysql_host,$mysql_user,$mysql_password) or die(mysql_error());   // Connect to database server with username and password
	mysql_select_db($mysql_database) or die(mysql_error());  // Select database.

	$sql= file_get_contents('table.sql');
	mysql_query($sql) or die(mysql_error());

/*	$username="admin";
	$password=md5("pratap");
	$query="INSERT INTO admin (`username`,`password`) VALUES('".$username."','".$password."')";
	mysql_query($query) or die(mysql_error());
*/
?>