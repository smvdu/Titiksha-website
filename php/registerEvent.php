<?php
	ini_set(' session.save_path','/tmp'); 
	session_name('userLogin');
    // Starting the session
    session_start();
    require_once('connect.php');

    if(isset($_SESSION["email_id"])){
    	$email_id=mysql_real_escape_string($_SESSION["email_id"]);
    	$branch_id=mysql_real_escape_string($_GET["branchId"]);
    	$event_id=mysql_real_escape_string($_GET["eventId"]);
    	$date = strftime("%Y-%m-%d", time()); // today date

    	$query="INSERT INTO events (`email_id`,`branch_id`,`event_id`,`date`) VALUES(
    			'".$email_id."',
    			'".$branch_id."',
    			'".$event_id."',
    			'".$date."')";
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