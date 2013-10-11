<?php
	
	require("connect.php");
	$query=$_GET["query"];
	$result=mysql_query($query);

	if(!mysql_error()){
		$data=mysql_fetch_assoc($result);
		echo json_encode($data);
	}

	mysql_close();
?>