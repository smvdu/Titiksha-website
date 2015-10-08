<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ContactUs</title>
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
                            <h1><strong>TITIKSHA</strong> CONTACT US</h1></div>
                    </div>
                    <div class="row">
						<div class="col-sm-12 ">
                    		<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>How to reach SMVDU</h3>
                            		<p> </p>
                        		</div>
                        		<div class="form-top-right"></div>
                            </div>
                            <div class="form-bottom">
								<p id="bottom">Shri Mata Vaishno Devi University is situated 40 Km North of Jammu in the scenic surroundings of  Trikuta foothills, near the holy town of Katra in District -Reasi. The Campus is situated close to the beautiful tourist resort of Jhajjar - Kotli. One can reach SMVDU campus by local or private transport from Jammu.</p>
								<ul>
								
							<li><p id="bottom">Option 1:  Catch Taxi Directly from Ralway Station / Bus Stand / Airport directly to University Campus (Distance approximately 45 Kms.)</li></p>
								
<li><p id="bottom">Option 2:  Board bus from Jammu Bus Stand/Railyway Station  plying to Udhampur/Katra but alight at Domel (Approx. 39 Kms.).  Board Mini Bus fom Domel to University (Approx. 6 Kms.)
In the map given below SMVDU CAMPUS can be seen as the small black box.</li></p>
									</ul>
						
						
						
					<center>	<iframe src="https://www.google.com/maps/d/embed?mid=zNfj_dKxDWuU.k0roDanSsl-w&hl=en" width="840" height="380"></iframe></center>
							
							</div>
                    	</div>
				</div><br><br>		
	     <div class="row">
		      <div class="col-sm-6 ">
                    		<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Message Us</h3>
                            		<p></p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-pencil"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    
								
  
       <form class="form" id="form1" action="index.php" method="post">
      
      <p class="name">
        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
      </p>
      
      <p class="email">
        <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
      </p>
      
      <p class="text">
        <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Write your Message !! We will contact you as soon as possible"></textarea>
      </p>
      
      
      <div class="submit">
        <input type="submit" value="SEND" id="button-blue"/>
        <div class="ease"></div>
      </div>

<?php

if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["text"]))
{
  require_once("../db.php");
  $name=mysql_real_escape_string(trim($_POST["name"]));
  $email=mysql_real_escape_string(trim($_POST["email"]));
  
  $text=mysql_real_escape_string(trim($_POST["text"]));
  if(filter_var($email, FILTER_VALIDATE_EMAIL))
  {
    $flag=mysql_query("INSERT INTO `titiksha16`.`contact` ( `name`, `email`, `message`) VALUES ( '".$name."', '".$email."', '".$text."')");

  //echo "INSERT INTO `titiksha16`.`contact` ( `name`, `email`, `message`) VALUES ( '".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["text"]."')";
  if($flag)
  {
    echo "<h3><div class='success'><br>We will see  you soon</div></h3>"; 
  }
  }
  else
  {
    echo "<h3><div class='error'><br>Data that you have entered is invalid</div></h3>";
  }   
}

?>
    </form>
  </div>
		</div>
						
						
						
						 <div class="col-sm-6 ">
								<div><h3> OR DROP US A MAIL AT :</h3></div>								
								<div class="contact">
									<div class="envelope">
									<div class="top">
									<div class="outer"><div class="inner"></div></div>
									</div>
									<div class="bottom"></div>
    					    		<div class="left"></div>
   									<div class="right"></div>
   									<div class="cover"></div>
									<div class="paper">
      								<a class="call" href="tel:7298245479"><div class="i"></div>+91-7298245479</a>
      								<a class="mail" href="mailto:titiksha@smvdu.ac.in"><div class="i"></div>titiksha@smvdu.ac.in</a>
    								 </div>
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