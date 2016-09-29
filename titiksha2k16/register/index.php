<?php

$err='';
$err1='';
$errf="";
$errl='';
$erre='';
$errp='';
$errc='';
$erru="";

if(!empty($_POST["register"]))
{
    if(!empty($_POST["form-first-name"])&&!empty($_POST["form-last-name"])&&!empty($_POST["form-email"])&&!empty($_POST["form-branch"])&&
!empty($_POST["form-university"]))
{
    require_once("db.php");
    $fname=mysql_real_escape_string(trim($_POST["form-first-name"]));
    $lname=mysql_real_escape_string(trim($_POST["form-last-name"]));
    $email=mysql_real_escape_string(trim($_POST["form-email"]));
  
    $branch=mysql_real_escape_string(trim($_POST["form-branch"]));
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
    
    if($flag)
    {

        $query=mysql_query("INSERT INTO `titiksha`.`user` ( `fname`, `lname`, `email`, `branch`, `university`)
        VALUES ( '".$fname."', '".$lname."', '".$email."', '".$branch."',
        '".$university."');");
      
        if(!$query)
        {
            $err="Email already exists!!<br>Please try different Email id ";
        }
        else
        {
            
 
                 $message="Hello ".$fname.", You are successfully registered!!";
                 $result = mysql_query("SELECT * FROM user");
                 $rows = mysql_num_rows($result);
                 $count="Your registration number for Titiksha : "."TITIKSHA16SMVDU00" . $rows ;
       }

    }
}
else
    $err="All Data Not Provided by the User";
}

?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Titiksha 2k16</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
  
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="the annual techfest of shri mata vaishno devi university,the largest techfest of jammu&  kashmir,computer science, mathematics, electronics, machenical, biotechnology,physics, mathematics.">
    <meta name="keywords" content="TITIKSHA, titiksha 2k16,Annual techfest,technical techfest,shri mata vainshno devi unversity,technical festival organized by shri mata vaishno devi university with vision og bogging the mind of young  tech . savied around the nation. ">
    <meta http-equiv="cache-control" content="public" />    
    <meta name="author" content="madan pandey, anoop singh, amit kumar yadav , sameer sengar">
     <!-- meta tags end -->
    <title>Titiksha 2016</title>
    <link rel="shortcut icon" href="../img/favicon.ico">
    
    <!-- CSS -->
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
    
    <link href="../assets/css/simple-line-icons.css" rel="stylesheet" media="screen">
    <link href="../assets/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/background.css">
    <!-- Custom styles CSS -->
    <link href="../assets/css/style.css" rel="stylesheet" media="screen">
    
    <script src="../assets/js/modernizr.custom.js"></script>
     <link rel="stylesheet" href="../preloader/css/normalize.css">
    <link rel="stylesheet" href="../preloader/css/main.css">
    <script src="../preloader/js/vendor/modernizr-2.6.2.min.js"></script>

       
        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Oleo+Script:400,700'>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>
    <div id="background_container">
      <canvas height="610" width="1349" id="background"></canvas>
  </div>
  <script src="../js/background.js"></script>      


<div id="loader-wrapper">
            <div id="loader"></div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>
    <!-- Preloader -->

    <!-- Home start -->

    
    <!-- Home end -->

    <!-- Navigation start -->

    <header class="header">

        <nav class="navbar navbar-custom" role="navigation">

            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../index.php">Titiksha</a>
                </div>

                <div class="collapse navbar-collapse" id="custom-collapse">
                    <ul class="nav navbar-nav navbar-right">
                      <li class="activate"><a href="../">Home</a></li>
                          <li class="activate"><a href="../explore/">events</a></li>
                               <li class="activate"><a href="index.php">Registration</a></li>
                               <li class="activate"><a href="../sponser/">Sponsors </a></li>
                           <li class="activate"><a href="../gallery/">Gallery </a></li>
                         <li class="activate"><a href="../team/">Team</a></li>
                        
                    
                    </ul>
                </div>

            </div><!-- .container -->

        </nav>

    </header>

      

        <div class="register-container container">
            <div class="row">
                <div class="iphone span5">
                    <img src="../assets/img/iphone.png" alt="">
                </div>
                <div class="register span6">
                    <form method="post" role="form" action="index.php" method="post" class="registration-form">
                        <h2>REGISTER TO <span class="red"><strong>Titiksha</strong></span></h2>
                      <div class="message" style="font-size:17px;color:SeaGreen; margin-bottom:30px;"><?php if(isset($message)){ echo $message. "\xA";

                          echo $count. "\xA";
}                            
                             ?></div>
                         <div class="error" style="font-size:17px;color:SeaGreen;" ><?php echo $err. "\xA";
?></div>
                        <label class="sr-only" for="form-first-name">First name</label>
                        <input type="text" name="form-first-name" class="form-first-name form-control" id="name" required="required" placeholder="Your Name..." autocomplete="off"">   
 <!--<div class="error"><?php echo $errf;?></div>-->
<label class="sr-only" for="form-last-name">Last name</label>
			                        	<input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
<div class="error" ><?php echo $errl;?></div>
                        <label class="sr-only" for="form-email">Email</label>
                        <input type="text" id="email" name="form-email" placeholder=" Email..." class="form-email form-control" id="form-email" required="required" autocomplete="off">
<div class="error" ><?php echo $erre;?></div>
                        <label class="sr-only" for="form-contact">Branch</label>
                        <input type="text"name="form-branch" placeholder="branch name..." class="form-contact form-control" id="form-branch"required="required" autocomplete="off" >
                       <label class="sr-only" for="form-university">university</label>
                        <input type="text" name="form-university" placeholder="University/college.." class="form-university form-control" id="form-university"required="required" autocomplete="off">
                        <button type="submit" name="register"value="Register">REGISTER</button>
                    </form>
                </div>
            </div>
        </div>


<footer id="footer">
        <div class="container">
            <div class="row">

                <div class="col-sm-12">

                    <ul class="social-links">
                        <li><a href="https://www.facebook.com/Titksha.smvdu/?fref=ts" target="_blank" class="wow fadeInUp"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UC9Pwrxrw0asIpivtLiOwmSA"   target="_blank"  class="wow fadeInUp" data-wow-delay=".1s"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="https://plus.google.com/115677550106669841192"  target="_blank"  class="wow fadeInUp" data-wow-delay=".2s"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="wow fadeInUp" data-wow-delay=".5s"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                    <p class="heart">
                       
                    </p>
                   

                </div>

            </div><!-- .row -->
        </div><!-- .container -->
    </footer>

    <!-- Footer end -->

    <!-- Scroll to top -->

    <div class="scroll-up">
        <a href="#services"><i class="fa fa-angle-up"></i></a>
    </div>
    
    <!-- Scroll to top end-->

    <!-- Javascript files -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../preloader/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="../preloader/js/main.js"></script>

    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.parallax-1.1.3.js"></script>
    
    <script src="../assets/js/jquery.sticky.js"></script>
    <script src="../assets/js/smoothscroll.js"></script>
    <script src="../assets/js/wow.min.js"></script>

    <script src="../assets/js/waypoints.min.js"></script>
  
    <script src="../assets/js/custom.js"></script>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>


