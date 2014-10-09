<?php
try{

	include("connect.php");
	if(isset($_REQUEST["na"])&&isset($_REQUEST["em"])&&isset($_REQUEST["pas"])&&isset($_REQUEST["pho"])&&isset($_REQUEST["col"]))
	{
		if($_REQUEST["na"]!="" && $_REQUEST["em"]!="" && $_REQUEST["pas"]!="" && $_REQUEST["pho"]!=""&&$_REQUEST["col"])
		{
			$confirm_code=md5(uniqid(rand()));
			$query="Insert into tempaccount (confirm_code,username,password,email,phone,college)values('".$confirm_code."','".strip_tags($_REQUEST["na"])."','".md5(strip_tags($_REQUEST["pas"]))."','".strip_tags($_REQUEST["em"])."','".strip_tags($_REQUEST["pho"])."','".strip_tags($_REQUEST["col"])."')";
                    $result=mysql_query($query)
                    or die("Invalid Entry");
            
		
		}
			else
			echo "Some Fields are empty";
	}
}
catch(Exception $e)
{
	echo "Invalid Entry";
}
mysql_close($mysql);
?>