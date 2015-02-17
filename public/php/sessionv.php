<?php

	session_start();
	if(!isset($_SESSION["email"])&&!isset($_SESSION["id"]))
	{
		session_unset(); 
		session_destroy();
		setcookie("em","",time()-3600,"/");
		setcookie("PHPSESSID","",time()-3600,"/");
		echo "login again";
	}
?>