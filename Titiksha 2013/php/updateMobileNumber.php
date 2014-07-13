<?php

	ini_set(' session.save_path','/tmp'); 
	session_name('userLogin');
    // Starting the session
    session_start();
    require_once('connect.php');

    if(isset($_SESSION["email_id"])){
    	$email_id=mysql_real_escape_string($_SESSION["email_id"]);
    	$phone_number=mysql_real_escape_string($_GET["mobileNumber"]);

    	$query="UPDATE registered_users SET `phone_number`='".$phone_number."' WHERE `email_id`='".$email_id."'";
		mysql_query($query);
		if(!mysql_error()){
			echo 'true';
		}else{
			echo "false";
		}
    }else{
    	echo "notLogged";
    }

    mysql_close();
?>