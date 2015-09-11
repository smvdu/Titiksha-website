<?php
session_start();
session_unset(); 
setcookie("em","",time()-3600,"/");
setcookie("PHPSESSID","",time()-3600,"/");
// destroy the session 
session_destroy();
echo "done";
?>