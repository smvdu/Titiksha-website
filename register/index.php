<?php 
session_start();
$err='';
$err1='';
$errf="";
$errl='';
$erre='';
$errp='';
$errc='';
$erru="";
if(!empty($_POST["logout"]))
{
    unset($_SESSION["fname"],$_SESSION["email"],$_SESSION["lname"],$_SESSION["contact"],$_SESSION["university"]);
    session_destroy();
    session_regenerate_id();
}

elseif(!empty($_POST["form-enter-email"])&&!empty($_POST["form-enter-password"]))
{
    require_once("../db.php");
    $email=mysql_real_escape_string(trim($_POST["form-enter-email"]));
    $pass=mysql_real_escape_string(trim($_POST["form-enter-password"]));
    
    $query=mysql_query("SELECT `fname`, `lname`, `contact`, `university` FROM `user` 
        WHERE `email` LIKE '".$email."' AND `pass` LIKE '".sha1($pass)."'");
    $fetch=@mysql_fetch_array($query);
    if(!$fetch)
    {
        $err1="Email id or Password Incorrect";
    }
    else
    { 
        
        $_SESSION["email"]=$email;
        $_SESSION["fname"]=$fetch[0];
        $_SESSION["lname"]=$fetch[1];
        $_SESSION["contact"]=$fetch[2];
        $_SESSION["university"]=$fetch[3];
    }
}
elseif(!empty($_POST["register"]))
{
    if(!empty($_POST["form-first-name"])&&!empty($_POST["form-last-name"])&&!empty($_POST["form-email"])&&
!empty($_POST["form-password"])&&!empty($_POST["form-conf-password"])&&!empty($_POST["form-contact"])&&
!empty($_POST["form-university"]))
{
    require_once("../db.php");
    $fname=mysql_real_escape_string(trim($_POST["form-first-name"]));
    $lname=mysql_real_escape_string(trim($_POST["form-last-name"]));
    $email=mysql_real_escape_string(trim($_POST["form-email"]));
    $pass=mysql_real_escape_string(trim($_POST["form-password"]));
    $fpass=mysql_real_escape_string(trim($_POST["form-conf-password"]));
    $contact=mysql_real_escape_string(trim($_POST["form-contact"]));
    $university=mysql_real_escape_string(trim($_POST["form-university"]));
    $flag=1;
    
    if(!ctype_alpha($fname))
    {
        $flag=0;
        $errf="*First name invalid";
    }
    if(!ctype_alpha($lname))
    {
        $flag=0;
        $errl="*Last name invalid";
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $flag=0;
        $erre="*Email invalid";
    }
    if($pass!=$fpass)
    {
        $flag=0;
        $errp="*Password did not matched";
    }
    if(!ctype_digit($contact))
    {
        $flag=0;
        $errc="*Invalid Contact";
    }
    if(!ctype_alnum($university))
    {
        $flag=0;
        $erru="*Invalid College/University Name";
    }
    if($flag)
    {
        
        $query=mysql_query("INSERT INTO `titiksha16`.`user` ( `fname`, `lname`, `email`, `pass`, `contact`, `university`)
        VALUES ( '".$fname."', '".$lname."', '".$email."', '".sha1($pass)."', '".$contact."',
        '".$university."');");
        unset($pass,$_POST);
        if(!$query)
        {
            $err="Email already exists!!<br>Please try different Email id ";
        }
        else
        {
            $_SESSION["email"]=$email;
            $_SESSION["fname"]=$fname;
            $_SESSION["lname"]=$lname;
            $_SESSION["contact"]=$contact;
            $_SESSION["university"]=$university;
        }

    }
}
else
    $err="All Data Not Provided by the User";
}
if(empty($_SESSION["email"])||empty($_SESSION["fname"]))
{


?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>register</title>
		<link rel="shortcut icon" href="favicon.ico" />

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

		
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>TITIKSHA</strong> Registration Form</h1></div>
                    </div>
                    <div class="row">
						
						
						
                    	<div class="col-sm-6 ">
                    		<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login</h3>
                            		<p>Login with your registered email id and password</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-pencil"></i>
                        		</div>
                            </div>
                            <div class="error" >
                                

                            <?php
                            echo $err1;
                            ?>



                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="index.php" method="post" class="registration-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Email id</label>
			                        	<input type="text" name="form-enter-email" placeholder="username" class="form-first-name form-control" id="form-first-name">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-Password">Password</label>
			                        	<input type="password" name="form-enter-password" placeholder="password" class="form-last-name form-control" id="form-last-name">
			                        </div>
			                        
			                        <button type="submit" class="btn">LOGIN</button>
			                    </form>
		                    </div>
                    	</div>
						
						
						
						
                        <div class="col-sm-6 ">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Register </h3>
                            		<p>please fill the form to register</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-pencil"></i>
                        		</div>
                            </div>
                            <div class="error" ><?php echo $err;?></div>
                            <div class="form-bottom">
			                    <form role="form" action="index.php" method="post" class="registration-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-first-name">First name</label>
			                        	<input type="text" name="form-first-name" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
			                        </div>
                                    <div class="error" ><?php echo $errf;?></div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-last-name">Last name</label>
			                        	<input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
			                        </div>
                                    <div class="error" ><?php echo $errl;?></div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-email">Email</label>
			                        	<input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
			                        </div>
									<div class="error" ><?php echo $erre;?></div>
									<div class="form-group">
			                        	<label class="sr-only" for="form-password">password</label>
			                        	<input type="password" name="form-password" placeholder="password" class="form-last-name form-control" id="form-last-name">
			                        </div>

									<div class="form-group">
			                        	<label class="sr-only" for="form-password">Last name</label>
			                        	<input type="password" name="form-conf-password" placeholder="confirm password" class="form-last-name form-control" id="form-last-name">
			                        </div>
                                    <div class="error" ><?php echo $errp;?></div>
									<div class="form-group">
			                        	<label class="sr-only" for="form-contact">Contact number</label>
			                        	<input type="text" name="form-contact" placeholder="Contact number" class="form-last-name form-control" id="form-last-name">
			                        </div>
									<div class="error" ><?php echo $errc;?></div>
									<div class="form-group">
			                        	<label class="sr-only" for="form-university">university</label>
			                        	<input type="text" name="form-university" placeholder="University/college" class="form-last-name form-control" id="form-last-name">
			                        </div>
                                    <div class="error" ><?php echo $erru;?></div>
			                        <button type="submit" name="register"value="true" class="btn">REGISTER</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
<?php 

}//end of if
else if(!empty($_SESSION["email"])&&!empty($_SESSION["fname"]))
{


    ?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>register</title>
        <link rel="shortcut icon" href="favicon.ico" />

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        
        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>TITIKSHA</strong> </h1><br><br>
                        <h1>HI ! <?php echo " ".$_SESSION["fname"];?></h1></div>
                    </div>
                    <div class="row">
                        
                        <div class="col-sm-4 ">
                        
                            <div class="form-bottom">
                            <div class="image"><img class="img-circle" src="person.png"></div>
                                
                            </div>
                            
                        </div>
                        
                        <div class="col-sm-8 ">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Your Details </h3>
                                    <p></p>
                                </div>
                                <div class="form-top-right">
                                    
                                </div>
                            </div>
                            <div class="form-bottom">
                              <div class="pro">
                                <div class="row"><div class="col-sm-4 "><h4>First Name: </h4></div ><div class="col-sm-8 "><h4><?php echo " ".$_SESSION["fname"]?></h4></div></div>
                                <div class="row"><div class="col-sm-4 "><h4>Last Name: </h4></div ><div class="col-sm-8 "><h4><?php echo " ".$_SESSION["lname"]?></h4></div></div>
                                <div class="row"><div class="col-sm-4 "><h4>Email: </h4></div ><div class="col-sm-8 "><h4><?php echo " ".$_SESSION["email"]?></h4></div></div>
                                <div class="row"><div class="col-sm-4 "><h4>University\College: </h4></div ><div class="col-sm-8 "><h4><?php echo " ".$_SESSION["university"]?></h4></div></div>
                                
                                
                                </div>  
                                <br>
                                <form action="index.php" method="post">
                                <input type="hidden" name="logout" value="true" />
                                <button type="submit" onclick="$(this).closest('form').submit();" class="btn">LOGOUT</button>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    <br> <br>
                    
                    
                    <div class="row">
                    
                    <div class="col-sm-12 ">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Your Events</h3>
                                    <p></p>
                                </div>
                                <div class="form-top-right">
                                    
                                </div>
                            </div>
                            <div class="form-bottom">
                              <div class="pro">
                                <div class="row"><div class="col-sm-4 "><h4>Events</h4></div ><div class="col-sm-8 "><h4>Time/Date</h4></div></div>
                                
                                
                                
                                </div>  
                            </div>
                            
                        </div>
                    
                    
                    </div>
                    
                    
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
<?php
}

?>