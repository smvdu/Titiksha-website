<?php
	ini_set(' session.save_path','/tmp'); 
	session_name('userLogin');
    // Starting the session
    session_start();
    require_once('connect.php');

    if(isset($_SESSION["email_id"])){
    	$email_id=mysql_real_escape_string($_SESSION["email_id"]);
	    $query = "SELECT * FROM registered_users WHERE `email_id`='".$email_id."'";
		$result=mysql_query($query);
		$data=array();
		if(!mysql_error()){
			header('Content-type: application/json');
			while($row=mysql_fetch_assoc($result) ){
			$data[]=$row;
			}
			echo json_encode($data);
		}
	}else{
		echo "notLogged";
	}

    mysql_close();
?>