<?php
/**
 * Check email-id is registered or not 
 *
 * @author Akshay Pratap Singh <pratapakshay0@gmail.com>
 */

	require_once('connect.php');

	$email_id=$_GET['email'];
	$sql="SELECT email_id FROM registered_users WHERE `email_id`='".$email_id."'";

	$result=mysql_query($sql) or die(mysql_error());

	$rows=mysql_num_rows($result);
	if($rows>0){
		echo 'true';
	}
	else{
		echo 'false';
	}
?>