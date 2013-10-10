<?php
    ini_set(' session.save_path','/tmp'); 
	session_name('adminLogin');
    // Starting the session
    session_start();

	require("connect.php");

	$username=mysql_real_escape_string($_GET["username"]);
	$password=mysql_real_escape_string($_GET["password"]);

	  $password = md5($password); //compare the encrypted password
	  $sql="SELECT * FROM `admin` WHERE `username`='".$username."' AND `password`='".$password."'" ;
	  $query=mysql_query($sql) or die(mysql_error());

	  if(mysql_num_rows($query) > 0)
	  {
	    $row = mysql_fetch_assoc($query);
	    $_SESSION['username'] = $row['username'];
	    echo "true";  
	  }
	  else
	  {
	    echo "You entered wrong admin id or password.";
	  }


	mysql_close();
?>