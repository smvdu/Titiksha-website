<?php
ini_set(' session.save_path','/tmp'); 
session_name('userLogin');
session_start();
//logout (logout.php)
 
if(isset($_SESSION['email_id']))
{
	echo "true";
	session_destroy();
}else{
	echo "false";
}
?>