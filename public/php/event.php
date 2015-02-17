<?
 try{
 	if(isset($_REQUEST["event_id"]))
 	{
 		require_once("connect.php");
 		session_start();
		if(!isset($_SESSION["email"])&&!isset($_SESSION["id"]))
		{
			session_unset(); 
			session_destroy();
			exit ('login again');
		}
 		$query="Select * from event_register where id='".trim(strip_tags($_REQUEST["id"]))."' and event_id='".trim(strip_tags($_REQUEST["event_id"]))."';";
 		$result=mysql_query($query);
		while($res=mysql_fetch_array($result))
		{
			exit ('Alredy registred');		
		}
		$query="Insert into event_register (id,email,event_id)values('".trim(strip_tags($_REQUEST["id"]))."','".trim(urldecode(strip_tags($_REQUEST["email"])))."','".trim(strip_tags($_REQUEST["event_id"]))."');";
		$result=mysql_query($query)
                    or die('Invalid Entry');	
        echo "You are registered successfully";
 	}
 	else{
 		echo "Something went wrong. Try again!!!";
 	}
 }
catch (Exception $e) {
    echo  "Something went wrong. Try again!!!";
}
?>