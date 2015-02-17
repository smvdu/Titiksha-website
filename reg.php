<html>

<body>
<?php
try{
	include("public/php/connect.php");
	if(isset($_REQUEST["conf"])&&isset($_REQUEST["em"]))
	{
		$qu="Select * from tempaccount where email='".trim(urldecode($_REQUEST["em"]))."' and confirm_code='".urldecode($_REQUEST["conf"])."';";
        $i=0;
		$res=mysql_query($qu);
		while($row=mysql_fetch_array($res))
		{
            $i++;
            //checking for account already in system
            $checkacc="Select * from useraccount where email='".trim(urldecode($_REQUEST["em"]))."';";
            $checkres=mysql_query($checkacc);
            $idc=0;
            while($rw=mysql_fetch_array($checkres))
            {
                $idc=$rw["id"];
            }
            if($idc==0)
            {
                $query="Insert into useraccount (username,password,email,phone,college)values('".$row["username"]."','".$row["password"]."','".$row["email"]."','".$row["phone"]."','".$row["college"]."')";
                $result=mysql_query($query);            
            }
            else
            {            
                $query="update useraccount  set username ='".$row["username"]."',password='".$row["password"]."',email ='".$row["email"]."',phone='".$row["phone"]."',college='".$row["college"]."' where id='".$idc."';";
                $result=mysql_query($query);                           
            }
            //checking end
			$removing="delete from tempaccount where email='".trim(urldecode($_REQUEST["em"]))."';";
            $com_re=mysql_query($removing);
            echo "<input type='hidden' style='display:none' id ='first' value='success'></input>";
            break;	
		}
        if($i==0)
            echo "<input type='hidden' style='display:none' id ='first' value='invalid'></input>";
	}
	else
		echo "<input type='hidden' style='display:none' id='first' value='invalid'></input>";		
}
catch(Exception $e)
{
	echo "<input type='hidden' style='display:none' id='first' value='invalid'></input>"+$e;
}
mysql_close($mysql);
?>

<script>
function myFunction() {
    var ty=document.getElementById("first").value;
    if(ty=="success")
    	ty="Registered Successfully";
    else
    	ty="Invalid Confirmation Code"	
    if (confirm(ty) == true) {
         window.location.assign("index.html");
    } else {
        window.location.assign("index.html");
    }
}
window.onload = myFunction;
</script>
</body>
</html>