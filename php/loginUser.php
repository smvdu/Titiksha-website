<?php
	ini_set(' session.save_path','/tmp'); 
	session_name('userLogin');
    // Starting the session
    session_start();

	require("connect.php");

	$email=mysql_real_escape_string($_GET["email"]);
	$password=mysql_real_escape_string($_GET["password"]);

	  $password = md5($password); //compare the encrypted password
	  $sql="SELECT * FROM `registered_users` WHERE `email_id`='".$email."' AND `password`='".$password."'" ;
	  $query=mysql_query($sql) or die(mysql_error());

	  if(mysql_num_rows($query) > 0)
	  {
	    $row = mysql_fetch_assoc($query);
	    $_SESSION['email_id'] = $row['email_id'];
	    $_SESSION['is_logged'] = "yes";
	    echo "true";  
	  }
	  else
	  {
	    echo "false";
	  }


	mysql_close();
?>