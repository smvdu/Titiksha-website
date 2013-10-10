<?php
	
	require("connect.php");
	$query=$_GET["query"];
	$result=mysql_query($query);

	if(!mysql_error()){
		$data=mysql_fetch_assoc($result);
		print_r($data);
		header('Content-type: application/json');
		echo json_encode($data);
	}

	mysql_close();
?>