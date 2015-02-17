<?php

	session_start();
	if(!isset($_SESSION["email"])&&!isset($_SESSION["id"]))
	{
		session_unset(); 
		session_destroy();
		echo "login again";
	}
?>