<?php
ini_set(' session.save_path','/tmp'); 
session_name('adminLogin');
session_start();
//logout (logout.php)
 
if(isset($_SESSION['username']))
{
	echo "true";
	session_destroy();
}else{
	echo "false";
}
?>