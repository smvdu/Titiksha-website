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

		$sql="SELECT * FROM events WHERE `email_id`='".$email_id."' AND `branch_id`='".$branch_id."' AND `event_id`='".$event_id."'";

		$result=mysql_query($sql) or die(mysql_error());

		$rows=mysql_num_rows($result);
		if($rows>0){
			echo 'true';
		}else{
			echo 'false';
		}
    }else{
    	echo "notLogged";
    }

    mysql_close();
?>