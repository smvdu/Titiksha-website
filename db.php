<?php
 $db_host='localhost';
    $db_username='root';
    $db_password='';
     $db_database='titiksha16';
   $connection=false;
     $db_select=false;
    
 
        

       $connection = mysql_connect($db_host, $db_username,$db_password);
        if (!$connection){
                  echo 'died';
                  die ("Could not connect to the database: ");
                  }
        $db_select=mysql_select_db($db_database,$connection);
        if (!$db_select)
        {
        die ("Could not select the database: <br />");
        }

?>
