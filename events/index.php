<?php
session_start();
require_once("../db.php");

//ALTER TABLE `user` ADD `event_reg` TEXT NOT NULL ;

$event=array();
for($i=0;$i<33;$i++)
	$event[$i]=0;
if(isset($_SESSION["email"])&&isset($_SESSION["fname"]))
{
	$query=mysql_query("SELECT `event_reg` FROM `user` WHERE `email` like '".$_SESSION["email"]."';");
	$fetch=mysql_fetch_row($query);
	$event_listed=explode(",", $fetch[0]);
	foreach ($event_listed as $key) 
	{
		$event[$key]=1;
	}

	

	if(isset($_GET["event"]))
	{
		$e=mysql_real_escape_string(trim($_GET["event"]));
		if(is_numeric($e))
		{
			mysql_query("UPDATE `user` SET `event_reg` = '".$fetch[0].$e.",' where `email` like '".$_SESSION["email"]."';");
			echo "1";
			#echo("UPDATE `user` SET `event_reg` = '".$e.",' where`email` like '".$_SESSION["email"]."';");
			die();
		}
		else
		{
			if(@$_GET["durgesh"]=="75a126b72c5abd12h31a21")
			{
				echo "Problem in Registration Please come back soon :)";
				die();
			}

		}
	}
}
elseif(isset($_GET["event"]))
{
	if(@$_GET["durgesh"]=="75a126b72c5abd12h31a21")
	{
		echo "Please sign in to Register :)";
		die();
	}
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 		
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
 

  <link rel="stylesheet" href="css/eve.css">
	
	
	<link rel="image_src" href="hint.png"/>


		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
		
	<style>
	.modal-close-btn {
			display: block;
			position: absolute;
			top: 0;
			right:1250px;
			background: url(img/close.png) no-repeat center;
			width: 32px;
			height: 32px;
			padding: 32px;
			opacity: 0.8;
			cursor: pointer;
			transition: 0.3s ease;
	}
	
	</style>
	

	<script>
	function ajaxobj()
{
	
	// The variable that makes Ajax possible!
	try
	{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	}
	catch (e)
	{
		// Internet Explorer Browsers
		try
		{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch (e) 
		{
			try
			{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e)
			{
				// Something went wrong
				alert("OOPS!!! Your browser broke!");
				return false;
			}
		}
	}
}

function ajaxregister(id)
{
	ajaxobj();
	strurl="http://ds/Titiksha-website/events/index.php?durgesh=75a126b72c5abd12h31a21&event=";
	ajaxRequest.onreadystatechange = function()
	{
		if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200)
		{
			if(ajaxRequest.responseText==1)
                            {
				
				eid='e'+id
				
				document.getElementById(eid).innerHTML="Registered";
				document.getElementById(eid).setAttribute("onclick","");
				
			    }
                        else
                            alert(ajaxRequest.responseText);
		}
        }       
        
	ajaxRequest.open("GET",strurl+id, true);
	ajaxRequest.send(null);
}
	</script>

</head>
<body>
	<div class="top-content opa">
        	
            <div class="inner-bg">

<div class="container">
	
					<div class="row" style="bottom-margin:40px;">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>TITIKSHA</strong> Events</h1></div>
		
                    </div>
		
		<hr>
	
	
	
	
	
		<div class="content-box">
      	
		<div class="row ">
		<center><div style="width: 85%;">
			<section class="form-bottom "  >
			<div class="tile-container feature" >
				<center><div style="color:white;font-family:sans-sarif"><h3>Mega Events</h3></div></center><br>
				<div class="tile dt " data-cta-target=".js-modal-1" style="width: 50%; " data-disable-scroll=true> Robomatrix</div>
				<div class="tile dt" data-cta-target=".js-modal-2"  style="width: 50%"data-disable-scroll=true> Tech Roadies 2</div>
				<div class="tile dt" data-cta-target=".js-modal-31" style="width: 50%" data-disable-scroll=true>Thoda Hatke</div>
				<div class="tile dt" data-cta-target=".js-modal-3" style="width: 50%" data-disable-scroll=true> Run n Code</div>
				
				
			</div>
		</section></div></center>
			<br>
			
			<div class="row">
			
			<div class="col-sm-6 ">
			<section class="form-bottom">
				<div style="color:white;font-family:sans-sarif;text-align:center"><h3>Mechanical Events</h3></div> <br>
			<div class="tile-container feature">
				
				<div class="tile dt" data-cta-target=".js-modal-7" style="width: 50%" data-disable-scroll=true>The Submarine</div>
				<div class="tile dt" data-cta-target=".js-modal-8" style="width: 50%"data-disable-scroll=true> Catapult</div>
				<div class="tile dt" data-cta-target=".js-modal-9" style="width: 50%" data-disable-scroll=true> Let it Run</div>
				<div class="tile dt" data-cta-target=".js-modal-10" style="width: 50%" data-disable-scroll=true>Whirl the boat </div>
				
				
				
			</div>
		</section>
			</div>
			
						

			<div class="col-sm-6 ">
			<section class="form-bottom">
			<div style="color:white;font-family:sans-sarif;text-align:center"><h3>Computer Science Events</h3></div> <br>
			<div class="tile-container feature">
				
				<div class="tile dt" data-cta-target=".js-modal-13" data-disable-scroll=true>Python Geek</div>
				<div class="tile dt" data-cta-target=".js-modal-14" data-disable-scroll=true> Web Weaver</div>
				<div class="tile dt" data-cta-target=".js-modal-15" data-disable-scroll=true>Linux Hub</div>
				<div class="tile dt" data-cta-target=".js-modal-16"  style="width: 60%" data-disable-scroll=true> Cipher</div>
				<div class="tile dt" data-cta-target=".js-modal-17" style="width: 40%" data-disable-scroll=true>Scratch/Flash</div>
				
				
			</div>
		</section>
			</div>
			</div>
			
			<br>
			
			<div class="row">
			
			<div class="col-sm-6 ">
			<section class="form-bottom">
			<div style="color:white;font-family:sans-sarif;text-align:center"><h3>Electrical Events</h3></div><br>
			<div class="tile-container feature">
				
				<div class="tile dt" data-cta-target=".js-modal-33" style="width: 50%"data-disable-scroll=true>Back N Forth</div>
				<div class="tile dt" data-cta-target=".js-modal-20"style="width: 50%" data-disable-scroll=true>Electromaze</div>
				<div class="tile dt" data-cta-target=".js-modal-22"style="width: 100%" data-disable-scroll=true>Yantra Anukaran</div>
				
				
				
				
				
			</div>
		</section>
			</div>
			
			
			<div class="col-sm-6 ">
			<section class="form-bottom " >
			<div style="color:white;font-family:sans-sarif;text-align:center"><h3>Biotechnology Events</h3></div><br>
			<div class="tile-container feature">
				<div class="tile dt" data-cta-target=".js-modal-38" style="width: 50%" data-disable-scroll=true> Trait Mania</div>
				<div class="tile dt" data-cta-target=".js-modal-25" style="width: 50%" data-disable-scroll=true>Hungsten Audit</div>
				<div class="tile dt" data-cta-target=".js-modal-43" style="width: 100%" data-disable-scroll=true>Techstar</div>
				
				
				
				
				
			</div>
				</section></div>
			
			</div>
		<br>
			
			<div class="row">
		
		<div>
			<section class="form-bottom " >
			<div class="tile-container feature">
				<center><div style="color:white;font-family:sans-sarif"><h3>Informal Events</h3></div><br></center>
				<div class="tile dt" data-cta-target=".js-modal-39" style="width: 25%" data-disable-scroll=true>Selfie Maniac </div>
				<div class="tile dt" data-cta-target=".js-modal-40"  style="width: 25%"data-disable-scroll=true> Brain Teaser</div>
				
				<div class="tile dt" data-cta-target=".js-modal-41" style="width: 25%" data-disable-scroll=true>Sudoku  </div>
				<div class="tile dt" data-cta-target=".js-modal-42" style="width: 25%" data-disable-scroll=true>Fifa 14 </div>
				<div class="tile dt" data-cta-target=".js-modal-27"style="width: 20%" data-disable-scroll=true> Fun Mob</div>
				<div class="tile dt" data-cta-target=".js-modal-28"style="width: 20%" data-disable-scroll=true> Take the Challenge</div>
				<div class="tile dt" data-cta-target=".js-modal-29" style="width: 20%"data-disable-scroll=true> Logitech</div>
				<div class="tile dt" data-cta-target=".js-modal-30"style="width: 20%" data-disable-scroll=true> Funky Junky</div>
				<div class="tile dt" data-cta-target=".js-modal-26" style="width: 20%" data-disable-scroll=true> Fun Mania </div>
				<div class="tile dt" data-cta-target=".js-modal-32" style="width: 20%"data-disable-scroll=true>  Meme Bacon</div>
				
				<div class="tile dt" data-cta-target=".js-modal-34"style="width: 20%" data-disable-scroll=true> Cinterix</div>
				<div class="tile dt" data-cta-target=".js-modal-35" style="width: 20%" data-disable-scroll=true>Umang </div>
				<div class="tile dt" data-cta-target=".js-modal-36" style="width: 20%" data-disable-scroll=true> Armageddon</div>
				<div class="tile dt" data-cta-target=".js-modal-37" style="width: 20%" data-disable-scroll=true> Takeshi Castle 2</div>
				
				
				
			</div>
		</section></div>
		
		
		
		</div>
		<hr>
			
		

		
<!--mega events -->

		

		

		<div class="js-modal-1  modal  modal--1">
			<span class="modal-close-btn"></span>
			
			<span class="modal-close-btn"></span>
			<center><h1>Robomatrix</h1></center>
			<div class="form-bottom">
					<div class="quote-box form-bottom">
			<p>Robomatrix is divided into three categories robowar pool splash and offroad control</p>
       <p> Robowar <br>
			It will be savage. It will be treacherous. Clash of Metals with the alloys grinding red hot. It is a game of style, control, damage and aggression with the robots pit against each other in a deadly combat. These warriors shall duel for honour and loyalty in an arena of destructions with their flipping tusks, angle grinders, hurling maces, hydraulic pincers and lots more.
It is time to concentrate on the hacking and slashing of the robots. Now it is time to rumble. It's the Grand Finale of war. Get ready to feel the chills and shivers down your spine and become a part of Robowars, Titiksha 2015-16.<br>
		<a href="robowar.docx">click for more details</a>
						</p>
      <p>Pool Splash<br>
			Ever saw bots swimming on water. Get your Bots on water and manually control them to swim through races and games.<br>

There will be two rounds<br>
In the first round the 5 bots together will have to race in the water through specified track. The bot to finish first will enter in the next round<br>
In the next round the winner bots of the previous round will have to play the game of snooker in the pool that is to put the specific colour balls in one place. The bot which finishes the round first will win. <br>
		  <a href="pool%20splash.docx">click for more details</a>
			</p>
     <p>Offroad Control<br>
						The rally cars (Wired/Wireless) will race against each other in a custom track to test their speed,endurance and offroad capabilities.<br><a href="offroad%20control.docx">click for more details</a></p>
						<p>Co-ordinators<br>
						Gunveer Singh
						<br>Amitoj Singh  
						Manik parihar<br>
						Simranjeet singh 

</p>
      
						<?php if($event[0])echo'<center><button id="e0" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e0" onclick="ajaxregister(\'0\')" type="submit" class="btn">Register</button></center>';?>
						</div>
				</div>
			
			
			
			
		</div>
		<div class="js-modal-2  modal  modal--1">
			<span class="modal-close-btn"></span>
			<center><h1>TECH ROADIES 2</h1></center>
			<div class="form-bottom">
					<div class="quote-box form-bottom">
			<p><u>Event Description</u> </p>
			<p>There will be 4 rounds which are described as below:-<br></p>
       <p> ROUND 1- Q/A ROUND: In this round participants will be given a form containing questions. </p>
      <p> ROUND 2- GD ROUND: Selected participants will go through a group discussion on given topics.</p>
     <p> ROUND 3-PI ROUND: Personal interview of the selected participants.</p>
      <p>ROUND 4-FINAL SHOWDOWN: The final participants will be given certain tasks and the one who survives till the end will be the WINNER .


</p>
						<p>Coordinators<br>
						Swadha Kailoo<br>
						Sunidhi Sharma<br>
						Gurpreet Singh<br>
						Rahul Kumar
</p>
						<?php if($event[1])echo'<center><button id="e1" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e1" onclick="ajaxregister(\'1\')" type="submit" class="btn">Register</button></center>';?>
						</div>
				</div>
			
			
		</div>
		<div class="js-modal-3  modal  modal--1">
			<span class="modal-close-btn"></span>
			<center><h1> Run N Code</h1></center>

			
				<div class="form-bottom">
					<div class="quote-box form-bottom">
				
						
						<center><p>Coders use to sit and code.Let's see how you run and code.</p></center>
					<p><u>Event Description:</u><br>
						Consists of two round</p>
<p>Qualifying round :"See the C in you"<br>
	Simple C output MCQ's</p>
	

	
<p>Final Round:"Hunt your code"<br>
You would becompeting with other teams to get ahead of them.So 'code' ,'compile' n 'debug' in your brain to hunt hte final code.</p>
						<p>form a team of 2-3 members from any branch ,year or college</p>
<p>Registration fee : Rs 20 </p>
		<p>Co-ordinators :<br>
			Durgesh Satyam<br>
Sambhuti Prakash			
</p>
						<p>Note: Prize money will increase depending upon numbers of participants</p>
						
						
						<?php if($event[2])echo'<center><button id="e2" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e2" onclick="ajaxregister(\'2\')" type="submit" class="btn">Register</button></center>';?>
						</div>
					
					</div>

			
		</div>
			
			
			<div class="js-modal-31  modal  modal--1">
			<span class="modal-close-btn"></span>
<center><h1>THODA HATKE</h1></center>

			
				<div class="form-bottom">
					<div class="quote-box form-bottom">
				
					<p><u>Event Description:</u><br>

<p>
The event is divided into 3 levels namely:</p>
<p>1.Update techno <br>Quiz based on latest technologies & rising entrepreneurship trends or both <br>   Time limit : 20 mins</p>
<p>2.Convinco Man<br>Group Discussion to test your convincing abilities <br>  Time limit: 30 mins</p>
<p>3.The Final Case <br>Case studies based on technology & entrepreneurship<br> Time limit:  30 mins</p>
<p>REGISTRATION FEE :- Rs 20</p>

</p>

<p>Coordinators<br>
			Yamini Srivastav <br>
Vedika Sumbli  <br>
Dheeraj Sharma 
<br>

					</p>
					
</p><?php if($event[3])echo'<center><button id="e3" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e3" onclick="ajaxregister(\'3\')" type="submit" class="btn">Register</button></center>';?>
</div>
			</div>
			
		</div>
		
		

			
			
		
		
		
		
		
		
		<!--mechnical-->
		
		<div class="js-modal-7  modal  modal--1">
			<span class="modal-close-btn"></span>
			
			
			
			<center><h1>THE SUBMARINE</h1></center>

			
				<div class="form-bottom">
					<div class="quote-box form-bottom">
				
					<p><u>Event Description:</u><br>

<p>
Round 1 : In case of large number of paricipants there will be a written quiz competition which will include General Engineering questions. 30 Students will be selected for the second round.</p>

<p>Round 2: 	The participants selected in first round will be divided into six groups. Each group will have to design 
			submarine that can pickup magnets from the bottom of a pool and surface them through a hula hoop. The group which will take minimum time in doing so will be the winner. <br>

	1. A sumarine model will be shown.<br>
	2. Material will be provided to design submarine.<br>
	3. Open for all.
</p>

<p>Coordinators<br>
			Suneet Bahi<br>
			Suraj Suri<br>
			Shivam Pandey<br>
					</p></p>
			
					<?php if($event[4])echo'<center><button id="e4" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e4" onclick="ajaxregister(\'4\')" type="submit" class="btn">Register</button></center>';?>
						</div>
			</div>
				
			
			</div>
		</div>
		<div class="js-modal-8  modal  modal--1">
			<span class="modal-close-btn"></span>
			
			
			<center><h1>CATAPULT</h1></center>

			
				<div class="form-bottom">
					<div class="quote-box form-bottom">
				
					<p><u>Event Description:</u><br>

<p>
Round 1 :
		If ther are large number of participants firstly there will be a written quiz competition which includes General Engineering questions. Top 25-30 participants will be selected for the second round.</p>
<p>
Round 2 :
		the participants selected in first round have to make a catapult in groups. In each group there will be 5-6 members (Selected in first round). Then there will be a competition between these groups. In these competition each group has to through a projectile (like plastic ball) using ther catapult and the group whose projectile covers maximum range will be the winner.<br>

	1. We will first show you a catapul model and you can also search it on internet for more details.<br>
	2. Catapult should be of wooden ,material and we will provide you the material from which you have to make this catapult.<br>
	3. Participants can be from any branch.
</p>
			<p>Coordinators<br>
			Aman Bakshi<br>
				Arvind Rathore</p>
						</p>
						<?php if($event[5])echo'<center><button id="e5" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e5" onclick="ajaxregister(\'5\')" type="submit" class="btn">Register</button></center>';?>
					</div>
			</div>
				
			
			</div>
			
			
		</div>
		<div class="js-modal-9  modal  modal--1">
			<span class="modal-close-btn"></span>
			
			<center><h1>LET IT RUN</h1></center>

			
				<div class="form-bottom">
					<div class="quote-box form-bottom">
				
					<p><u>Event Description:</u><br>

<p>
Round 1 : 
	There will be a written quiz competition includes general engineering quiz, and basic general studies. On the basis of the result from the quiz,15 groups will be  selected. Each group includes 2 members each.
	</p>

<p>Round 2 : 
	The candidates selected in Round 1 will be grouped in fifteen froups and a model of a four wheeler vehicle later which in a given period of time and after given time an auna will be provided on which each vehicle have to win three times. The largest distance will be count. A limited distance will be given to which all vehicle have to be crossed. Further the vehicle will be selected to which a given obstacle have to hit. The vehicle hitting obstacle in minimum time will be winner.</p>

<p>Materials Required: 
	for one vehicle : a bottle, 5 caps of each bottle, 2 straws of appropriate thikness, feviquick, 5-6 pieces of elastic rubber, a stensil knife, 5-6 plastic glass.</p>
						
			<p>Coordinators<br>Abhinav (2013eme03)<br>
				Sanchit Patel (2013eme41)</p>
						</p>
						<?php if($event[6])echo'<center><button id="e6" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e6" onclick="ajaxregister(\'6\')" type="submit" class="btn">Register</button></center>';?>
					</div>
			</div>
				
			
			</div>
			
			

			
		</div>
		<div class="js-modal-10  modal  modal--5">
			<span class="modal-close-btn"></span>
			
			<center><h1>Whirl the boat</h1></center>

			
				<div class="form-bottom">
					<div class="quote-box form-bottom">
				
					<p><u>Event Description:</u><br>

<p>
Round 1 : 
	If there are large number of participants there will be a quiz round which will include basic question of fluid and heat. Top 15 students will be selected.<p>

<p>Round 2 : 
	The participants selected will be divided into five groups. Each group will consist of three members. Each group will have to make a Pop-Pop boat . We will show a basic model. After that the participants will have to make their own boat which must be similar to the wone we have shown, although they can make required modifications. 
	Points will be given on the quality and time taken to build the boat.
	There will be a circular tub filled with water. The boat which will complete maximum number of round in given time interval ill be the winner.Points will be given accordingly for each round.

</p>
						
			<p>Coordinators<br>Ayush Pandey <br>
				Anusheen Nema </p>
						</p>
						
					<?php if($event[7])echo'<center><button id="e7" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e7" onclick="ajaxregister(\'7\')" type="submit" class="btn">Register</button></center>';?>
					</div>
			</div>
				
			
			</div>

			
		</div>
			
			
			
		
		
		
		
		<!--cse-->
		
		
			
		
		
		
		<div class="js-modal-13  modal  modal--1">
			<span class="modal-close-btn"></span>
			<center><h1>Python geek</h1></center>

			
				<div class="form-bottom">
					<div class="quote-box form-bottom">
				
					<p><u>Event Description:</u><br>
A basic python programming challenge for beginners and intermediate Python programmers.
The challenge will have two rounds:
Round 1 – Quiz on basic python topics
Round 2 – Coding challenge
Participants shall be judged on the programs completed.

			</p>
						<p><u>Who can participate?</u><br>
Any student with any programming skills in Python.</p>

<p><u>References</u><br>
Introduction to Python Programming by John V Guttag
<p>Venue:	Internet Lab</p>
						<p>Coordinators<br>
						Sumit Srivastava<br>
						Abhay Gundial</p>
						
						</p>
			<?php if($event[8])echo'<center><button id="e8" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e8" onclick="ajaxregister(\'8\')" type="submit" class="btn">Register</button></center>';?>
						</div>
			</div>
				
			
		</div>
		<div class="js-modal-14  modal  modal--1">
			<span class="modal-close-btn"></span>
			<center><h1>Web Master</h1></center>
			<div class="form-bottom">
					<div class="quote-box form-bottom">
				
					<p><u>Event Description:</u><br>
<p>
Weave the Web! This is the best time to put your heads & souls into designing beautiful and catchy webpages to win exciting prizes.
The event will consist of 2 things:<br>
	1. Quiz<br>
	2. Designing a website<br>

</ul></p>
			</p>
						<p><u>Who can participate?</u><br>
Any student with even basic web-development skills.</p>

<p><u>References</u><br>

	<a href="http://learn.shayhowe.com/">http://learn.shayhowe.com/</a>
	<a href="http://www.codecademy.com/tracks/web">http://www.codecademy.com/tracks/web</a>
	<a href="https://www.udacity.com/courses#!/web-development">https://www.udacity.com/courses#!/web-development</a>


<p>Venue:Internet Lab</p>	
				
						<p>Coordinators<br>
						Sumit Srivastava<br>
						Vaibhav Saxenal</p></p>
			<?php if($event[9])echo'<center><button id="e9" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e9" onclick="ajaxregister(\'9\')" type="submit" class="btn">Register</button></center>';?>
						</div>

			</div>

			
			
			<br><br>
			
		</div>
		<div class="js-modal-15  modal  modal--1">
			<span class="modal-close-btn"></span>
			<center><h1>Linux Hub</h1></center>
			<div class="form-bottom">
					<div class="quote-box form-bottom">
			<p>Entering into the geek world could not be better than using the best operating system linux.</p>
			<p>So followed by an inequistive quiz you can play with the basic commands in an interesting terminal to generate an innovative code. </p>
			<p>So geeks lets begin.</p>
						
						<p>Coordinators<br>
						Afsaan Massarat<br>
						Anubha Aggarwal</p>
						<?php if($event[10])echo'<center><button id="e10" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e10" onclick="ajaxregister(\'10\')" type="submit" class="btn">Register</button></center>';?>
						</div>
				</div>
		</div>
		<div class="js-modal-16  modal  modal--1">
			<span class="modal-close-btn"></span>

			<center><h1>Cipher: crack the code</h1></center>
			<div class="form-bottom">
					<div class="quote-box form-bottom">
			<p>What is Cipher?<br>
			In cryptography a Cipher is an algorithm for performing encryption or decryption a series of well defined steps that can be followed as procedure.<br>

Cipher is the same thing as code.</p>
			<p><u>Event Descriptions</u> </p>
			<p>
Participants will have to answer various questions related to computers science.But the twist is that the questions will be in the form of a code ,first you will have to decode the question and then answer it correctly.<br>
There will be various levels:<br>
At each level people who either don't answer correctly or Exceed time limit will be eliminated on the spot.<br>


Note: No pre-knowledge of any language is required.</p>
						<p>Coordinators<br>
						Asmita Mahajan<br>
						Tanvi </p>
						<?php if($event[11])echo'<center><button id="e11" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e11" onclick="ajaxregister(\'11\')" type="submit" class="btn">Register</button></center>';?>
						</div>
				</div>
		</div>
		<div class="js-modal-17  modal  modal--1">
			<span class="modal-close-btn"></span>

			<center><h1>Scratch Programming</h1></center>
			<div class="form-bottom">
			<div class="quote-box form-bottom">
			<p>Get creative with coding with scratch, you can program your own stories ,games and animations and share them online
Sounds good! Doesn't it ?<br>

Scratch encourages creative thinking and involves young solutions to unexpected problems</p>
			<p><u>Advantages</u> </p>
			<p>1. Open source<br>
			2. Scratch programs are built of graphical blocks.<br>
			3. Code is more readable and sharable
			4. Innovation and imagination 
				</p>
				<p> So firstly the participants will be taught scratch programming(briefly).
Then, they will be made to compete with each other, for which they will have to create a scratch project (game,animation,etc.) based on given theme.</p>
				<p>Coordinators<br>
						Medhavi Sharma<br>
						Shavi Gupta <br>
				Vagisha Gupta</p>
				<?php if($event[12])echo'<center><button id="e1212" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e12" onclick="ajaxregister(\'12\')" type="submit" class="btn">Register</button></center>';?>
						</div>
				</div>
		</div>
			
			
			
		
		
		
		
		<!--ece -->
		
		
		
				<div class="js-modal-20  modal  modal--3">
			<span class="modal-close-btn"></span>
			
			
			<center><h1>Electromaze</h1></center>
			<div class="form-bottom">
			<div class="quote-box form-bottom">
			
			<p><u>Event Description</u> </p>
			<p>The event is divided into 3 rounds as follows:
<p>ROUND ONE (PAPER - PEN BASED QUIZ):<br>
*A basic electronics quiz.</p>
<p>ROUND TWO : (ELIMINATION CRITERIA - CUTOFF)<br>
*Design the circuit based on given clues
	</p>
				<p>
FINAL ROUND:
(ELIMINATION CRITERIA - CUTOFF)<br>
* Hardware implementation of previously designed circuit
</p>
				
				<p><u>Coordinators</u></p>
				<p> Krishna Gopal Paul<br>
        				Piyush Saini<br>
                        Parul<br>
                       Sakshi<br>
                      Kshitiza
              
				<p>Venue<br>Xilinx Lab	</p>
				</p><?php if($event[13])echo'<center><button id="e13" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e13" onclick="ajaxregister(\'13\')" type="submit" class="btn">Register</button></center>';?>

						</div>
				</div>
			</div>


<div class="js-modal-33  modal  modal--1">
			<span class="modal-close-btn"></span>
	
	<center><h1>Back N Forth</h1></center>

			
				<div class="form-bottom">
					<div class="quote-box form-bottom">
				
					<p><u>Event Description:</u><br>

<p>
This events is divided into 2 rounds :-<br>
a)Down the memory lane:  12th class related basic questions & Basic Aptitude.<br>
b) Techo-World: Basic Knowledge of prominent technologies existing around the world.<br></p>
<p>REGISTRATION FEE :- Rs 10</p>

<p>Coordinators<br>
			 Kshitiza Joshi<br>
Trisha <br>
Arushi Singh
 </p>
	<p>VENUE<br>LECTURE HALL</p>
					
<?php if($event[14])echo'<center><button id="e14" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e14" onclick="ajaxregister(\'14\')" type="submit" class="btn">Register</button></center>';?>
</div>
			</div>
	</div>


		<div class="js-modal-22  modal  modal--1">
			<span class="modal-close-btn"></span>
			<center><h1>Yantra Anukaran</h1></center>

			
				<div class="form-bottom">
					<div class="quote-box form-bottom">
				
					<p><u>Event Description:</u><br>

<p>
</p>


<p>Coordinators<br>
Rajat Mishra<br>
Harish Babu<br>
Rohit Reddy<br>
Avinash kumar

 </p>
	<p>VENUE :Xilinx Lab
</p>
					
<?php if($event[15])echo'<center><button id="e15" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e15" onclick="ajaxregister(\'15\')" type="submit" class="btn">Register</button></center>';?>
</div>
			</div>
			
			
			
		</div>
		
		
		
		
	<!--ibt  -->
		
		
		
		<div class="js-modal-25  modal  modal--1">
			<span class="modal-close-btn"></span>
			<center><h1>Hungsten Audit</h1></center>
			<div class="form-bottom">
			<div class="quote-box form-bottom">
			
			<p><u>Event Description</u> </p>
			<p>ROUND 1: “HOW WELL DO YOU KNOW?” <br>
          1.Basic biology questions will be asked.<br>
          2.30 questions in 30 mins.<br>
          3.Negative marking will be there.<br></p>
				<p> ROUND 2: “JUNGLE JOB” {Buzzer Round}<br>
          1.Half of the participants from Round 1    will be selected.<br>
          2.Will be conducted in pairs.<br>
          3.Slides of questions will be shown.<br></p>
					<p>
				ROUND 3:(a):SPELL-O-BIO (Pass on round) <br>
      1. 5 groups will be selected.<br>
      2.Biology related difficult spellings will be asked.<br>
      3. 2 spellings for each group <br>
      4.One correct spelling=5 points.<br>
      5.Top 3 groups will be selected.<br><br>
						
						(b) BIOTECHNIKAZ (Buzzer round).<br>
      1. Purely biotech related slides will be shown.<br>
      2. Will be conducted indivisually.<br>
      3.Top 3 contestants(winners) will be selected.

</p><?php if($event[16])echo'<center><button id="e16" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e16" onclick="ajaxregister(\'16\')" type="submit" class="btn">Register</button></center>';?>

						</div>
				</div>
			
			
			
		</div>



<div class="js-modal-43  modal  modal--1">
			<span class="modal-close-btn"></span>
			
			
			<center><h1>TechStar (Frugal Engineering) </h1></center>
			<div class="form-bottom">
			<div class="quote-box form-bottom">
			<center><p>Bring out the smart kid inside you</p></center>
			<p><u>Event Description</u> </p>
			
			<p>	Round 1:-
Reasoning and Practical ability test<br>
Participants will be exposed to intensive reasoning and practical ability test. There will be paper set of 15-20 questions and there will be a limited time period for the test. Students will be selected based on their reasoning skills.</p>
<p>Round 2:-
Quiz + prop selection<br>
Participants selected in the Round 1, now have a Quiz Competition and prop selection. The students who will give more answer have more choices for the prop.</p> 
<p>Round 3:
Task based on props choosen.<br>
Using the prop given to the student , he will be intend to have some innovatory task.</p>
				<p>Cordinators<br>Himani Chandel<br>
	         Chahat Gupta<br>
	       Chetanya Gupta
</p>


				
				<?php if($event[17])echo'<center><button id="e1717" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e17" onclick="ajaxregister(\'1718\')" type="submit" class="btn">Register</button></center>';?>

						</div>
				</div>

		</div>
		
		
		

<!--informal-->


<div class="js-modal-26  modal  modal--1">
			<span class="modal-close-btn"></span>
			
			
			<center><h1>FUN MANIA </h1></center>
			<div class="form-bottom">
			<div class="quote-box form-bottom">
			<center><p>Bring out the smart kid inside you</p></center>
			<p><u>Event Description</u> </p>
			<p>ROUND 1:Written quiz  ( riddles, MCQs)<br>
             In this round total 10 students will be selected for the next round ( 2 in a group)
<br></p>
				<p> ROUND 2: Become an artist <br>
                 In this round a participant from each group will make his /her partner to understand d clue given to them in 30 sec. <br>             
                 In this 5 groups will be selected 
</p>
					<p>
				ROUND 3:Musical chairs <br>
                In this group top 3 will be chosen on the individual basis and they will be suitably felicitated .
</p>
				<p>Coordinators<br>
									KOHSHEEN KAMAL  <br>
                                     WAMIKA SHARMA   <br>
                                     HARSHIT SINGH         
</p><?php if($event[18])echo'<center><button id="e18" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e18" onclick="ajaxregister(\'18\')" type="submit" class="btn">Register</button></center>';?>

						</div>
				</div>

		</div>



<div class="js-modal-27  modal  modal--1">
			<span class="modal-close-btn"></span>
	
	
	<center><h1>FUN MOB</h1></center>

			
				<div class="form-bottom">
					<div class="quote-box form-bottom">
				
					<p><u>Event Description:</u><br>

<p>


Rount 1 : Screening<br>
	Dilettante ot Polymath ??
	Let's see
Questions ranging from politics to bollywood, from space to sports...
</p>

<p>Round 2 : Mindfreak<br>
	A list of hart to find items.... Afew clues.... A time limit
	Tests your presence of mind, your eye for detail and your common sense.
<p>
<p>
Round 3 : Figure Genius<br>
	Describe the figure...... Get it drawn
	A test of your assumption, your perception and your teem coordination.

Gear up to negotiate the labyrinth as an attractive prize awaits you at the end *a trail*.
	</p>
</p>

<p>Coordinators<br>
			NEERAJ<br>
				CHARANJEET
					</p>
						</p>
			<?php if($event[19])echo'<center><button id="e1919" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e19" onclick="ajaxregister(\'19\')" type="submit" class="btn">Register</button></center>';?>
						</div>
			</div>

			
		</div>
		<div class="js-modal-28  modal  modal--1">
			<span class="modal-close-btn"></span>
			<center><h1>TAKE THE CHALLENGE</h1></center>

			
				<div class="form-bottom">
					<div class="quote-box form-bottom">
				
					<p><u>Event Description:</u><br>

<p>
Round 1 : It is a elimination round. In this round 20 questions will be asked with negative marking.</p>

<p>Round 2 : The participants will be sellected on the basis of marks obtained in round 1. 25 participants will be 
			selected from round 1. They will be divided into 5 groups. Each group contain 5 particiants.<br>

			In this round questions will be asked in six different categories :<br>
			a. Indian History<br>
			b. Word Geography<br>
			c. Sports<br>
			d. General Science<br>
			e. Bollywood quiz<br>
			f. Current Affairs<br>
<p>
Entry fee : Rs. 15/- per head<br>
Open for all<br>
Prize money : Rs. 1000/- (Only for winner)<br>
Registration for participants will be on spot.</p>

</p>

<p>Coordinators<br>
			Arif Ayub<br>
			  Akash Shrivastava<br>
			  Manan Sharma<br>
					</p>
</p><?php if($event[20])echo'<center><button id="e20" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e20" onclick="ajaxregister(\'20\')" type="submit" class="btn">Register</button></center>';?>
</div>
			</div>


			
		</div>
			
			
			<div class="js-modal-29  modal  modal--1">
			<span class="modal-close-btn"></span>
				
				
				
							<center><h1>LOGICTECH</h1></center>

			
				<div class="form-bottom">
					<div class="quote-box form-bottom">
				
					<p><u>Event Description:</u><br>

<p>
The whole event is divided into two individual rounds.<br>
<p>
Round 1 : 
	The first will based upon the knowledge of participants about the logo's and taglines (theme) of various companies (ME,ECE,CSE,IBT). Its a written round and winners will be selected for round two.</p>

<p>Round 2 : 
	The second round is based upon the General facts about different companies (automobile, production, electronic etc.)
	It may be written or oral</p>
<p>
Entry Fee : Rs 10<br>

Cash Prize : the 1st, 2nd and 3rd winners will be awarded.<br>

Registration : One spot registration.<br>
Open to all</p>
</p>

<p>Coordinators<br>
			Abhishek Shukla<br>
				  Ayush Shakya
					</p>
</p><?php if($event[21])echo'<center><button id="e21" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e21" onclick="ajaxregister(\'21\')" type="submit" class="btn">Register</button></center>';?>
</div>
			</div>

			
		</div>

<div class="js-modal-30  modal  modal--1">
			<span class="modal-close-btn"></span>
	
	<center><h1>FUNKY JUNKY</h1></center>

			
				<div class="form-bottom">
					<div class="quote-box form-bottom">
				
					<p><u>Event Description:</u><br>

<p>
The event is divided into various levels:-</p>
<p>Day 1<br>
a)	Selfie le le re (3 Selfies with teachers) <br>
b)	Teri Meri Dosti (3 legged race)<br>
c)	Aayi Trip (Talent Showcase)</p>
<p>Day 2<br>
a)	Kalam’s Asset (Treasure Hunt)<br>
b)	Questo  Mania ????<br>
c)	Balam Pichkari<br></p>
<p>REGISTRATION FEE :- Rs 20</p>

</p>

<p>Coordinators<br>
			Arzoo Gupta <br>
Jaskirat Kour <br>
Shreya Bharti<br>
Vasudha Mahajan<br>

					</p>
					<p>VENUE<br>BC JUNCTION</p>
					<?php if($event[22])echo'<center><button id="e22" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e22" onclick="ajaxregister(\'22\')" type="submit" class="btn">Register</button></center>';?>
</p>
</div>
			</div>
	
	
	
	
	
			
		</div>
		
			
			
			<div class="js-modal-32  modal  modal--1">
			<span class="modal-close-btn"></span>

				
				<center><h1>MEME BACON</h1></center>

			
				<div class="form-bottom">
					<div class="quote-box form-bottom">
				
					<p><u>Event Description:</u><br>

<p>
This event is about creating and optimizing GIFs (Graphics Interchange Format).There will be 2 levels.
Level 1 : Making a creative meme/hall.<br>
Level 2 : Animation / Meme from a video.</p>
<p>REGISTRATION FEE :- Rs 20</p>

</p>

<p>Coordinators<br>
			Sadaf Fayaz<br>
Benish Ahad </p>


	<p>VENUE<br>INTERNET LAB</p>
					
<?php if($event[23])echo'<center><button id="e23" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e23" onclick="ajaxregister(\'23\')" type="submit" class="btn">Register</button></center>';?>
</div>
			</div>
			
		</div>

		<div class="js-modal-34  modal  modal--1">
			<span class="modal-close-btn"></span>
			
			
			
				<center><h1>CINTERIX</h1></center>

			
				<div class="form-bottom">
					<div class="quote-box form-bottom">
				
					<p><u>Event Description:</u><br>

<p>
The event is divided into 3 rounds as follows:
<p>ROUND ONE (PAPER - PEN BASED QUIZ):<br>
* A basic quiz based on the movies names/actors/songs/dialogues.</p>
<p>ROUND TWO (IMAGE RECOGNITION):
  (ELIMINATION CRITERIA - CUTOFF)<br>
*Each candidate must identify the poster of movie or the photo of resembling
character.</p>
<p>ROUND THREE (AUDIO RECOGNITION + DIALOGUE BUILDER):
 (ELIMINATION CRITERIA - CUTOFF)<br>
* Each candidate must identify the audio and must tell the required details for bonus
points.<br>
*Create a filmy dialogue with the words you’re given.</p>
</p>

<p>Coordinators<br>
			

Krishna Gopal Paul  <br>
	Vivek Kumar Gupta

 </p>
<p>VENUE<br>LECTURE HALL</p>
					
<?php if($event[24])echo'<center><button id="e24" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e24" onclick="ajaxregister(\'24\')" type="submit" class="btn">Register</button></center>';?>
</div>
			</div>

			
		</div>
			
			
			
<div class="js-modal-35  modal  modal--1">
			<span class="modal-close-btn"></span>
	
	<center><h1>UMANG</h1></center>

			
				<div class="form-bottom">
					<div class="quote-box form-bottom">
				
					<p><u>Event Description:</u><br>

<p>
Kite flying Competion
</p>

<p>Coordinators<br>
			

RAJAT MISHRA<br>
DEEPAK PATIDAR<br>
RITESH RAMAN<br></p>


	<p>VENUE<br>BC JUNCTION</p>
		<?php if($event[25])echo'<center><button id="e25" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e25" onclick="ajaxregister(\'25\')" type="submit" class="btn">Register</button></center>';?>			

</div>
			</div>

			
		</div>
			
<div class="js-modal-36  modal  modal--1">
			<span class="modal-close-btn"></span>
	
		<center><h1>ARMAGEDDON</h1></center>

			
				<div class="form-bottom">
					<div class="quote-box form-bottom">
				
					<p><u>Event Description:</u><br>

<p>
University Level gaming competion<br>
Categories	<br>
Counter strike 1.6<br>
NFS

</p>

<p>Coordinators<br>
			

   Rishav Sharma<br>
   Achyut Mishra<br>



 </p>


	<p>VENUE:<br>LAN ROOM</p>

		<?php if($event[26])echo'<center><button id="e26" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e26" onclick="ajaxregister(\'26\')" type="submit" class="btn">Register</button></center>';?>	
		</div>
	</div>
</div>
			
<div class="js-modal-37  modal  modal--1">
			<span class="modal-close-btn"></span>
	
	
		<center><h1>Takeshi Castle 2</h1></center>

			
				<div class="form-bottom">
					<div class="quote-box form-bottom">
				
					<p><u>Event Description:</u><br>

<p>
Round 1:-<br>
Dead men race  <br>
Round 2:-<br>
Catch me if you can<br>
Parcipants should have wrist watch .<br>
Round 3:-<br>
Chillar party</p>

<p>Coordinators<br>  Aarushi khajuria <br>
Palak Kudyar
 </p><?php if($event[27])echo'<center><button id="e27" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e27" onclick="ajaxregister(\'27\')" type="submit" class="btn">Register</button></center>';?>
						</div>
					</div>
			
		</div>
			
<div class="js-modal-38  modal  modal--1">
			<span class="modal-close-btn"></span>
			<center><h1>Trait Mania</h1></center>

			
				<div class="form-bottom">
					<div class="quote-box form-bottom">
				
					<p><u>Event Description:</u><br>

<p>
<p>Round 1:<br>
<u>Trait Being </u>:-
Participants will be in group of 3 members each. They will be  given 6-7 traits.  They are going to find those traits in different people and the groups who complete task in the given time and with maximum results will be selected.</p>
<p>Round 2:- <br>
Monocot  and  dicot 
Groups selected in the Round 1, now have Monocot and Dicot competition. They will  find out some Monocot and Dicot and  2-3 groups will be selected in this round.</p>
<p>Round 3:- <br>
It’s a individual round.</p>

 </p>
		<p>Co-ordinators :<br>
Chahat Gupta<br>
Chetanya  <br>
Himani Chandel
</p><?php if($event[28])echo'<center><button id="e28" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e28" onclick="ajaxregister(\'28\')" type="submit" class="btn">Register</button></center>';?>
						</div>
					</div>

			
		</div>
			
<div class="js-modal-39  modal  modal--1">
			<span class="modal-close-btn"></span>
	
	
	<center><h1>Selfie Maniac</h1></center>

			
				<div class="form-bottom">
					<div class="quote-box form-bottom">
				
					<p><u>Event Description:</u><br>
						<center><p>How good are you when it comes to get your selfies clicked. This event is all about the quest to find the real selfie maniac with a blend of creativity and innovation 
coated on him/her. If you think you are one heck of selfie maniac, use the best of creativity that lies within you, and the victory is all yours...
You will have to perform tasks that you're given to qualify to finals and win.</p></center>


<p>Round1:"Make your selfies count"<br>

Participants will be shortlisted on the basis of the number of selfies satisfying the given criterion.</p>

<p>Round2:"Story with Selfies"<br>
This round will take place in pairs. Creativity of the participants will be the sole criterion of judging.</p>


<p>Round 3:Groupfie with a theme"<br>
Participants have to form a groups with the non participants.Each participant has to make the best use of the theme given, within given time limit.</p>

<p>Best one will be given goodie , certificates and momento. Other two runnerups will be given certificates and momento.



 </p>
		<p>Co-ordinators :<br>

Vagisha Gupta <br>
Parul Kapoor <br>
Pehu Kohli

</p><?php if($event[29])echo'<center><button id="e29" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e29" onclick="ajaxregister(\'29\')" type="submit" class="btn">Register</button></center>';?>
						</div>
					</div>

			
		</div>
			
<div class="js-modal-40  modal  modal--1">
			<span class="modal-close-btn"></span>
	<center><h1>Brain Teaser</h1></center>

			
				<div class="form-bottom">
					<div class="quote-box form-bottom">
				
						
						<center><p>READY TO CHALLENGE YOUR BRAIN<br>
IF YES, SCRATCH YOUR BRAIN TO REMAIN IN THE GAME !!!</p></center>
					<p><u>Event Description:</u><br>
<p>Round 1:Word Search<br>
Level 1:  20 words in 5 min<br>
Expand and improve upon your brain by finding the hidden words

Level 2: 15 words in 3 min<br>
Fifteen words to fit a theme , hidden up and down, forward and background !!<br>
How many can you find?</p>

<p>Round 2: Four pics one word<br>
Level 1:5 words in 3 min<br>
Level 2:6 words in 3 min</p>
						
<p>Round 3:Riddles<br>
Answer correctly as many riddles as you can to gain the throne of the king of Brain Teasers</p>
<p>
Exiting Prizes for winners!!!<br>

Registration fee : Rs 20<br>
Venue : Lecture Hall </p>
		<p>Co-ordinators :<br>
Shivangi Mahajan<br>
Ignakshika Gupta
			<center>COME AND TEST YOUR BRAIN!!!</center>

</p><?php if($event[30])echo'<center><button id="e30" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e30" onclick="ajaxregister(\'30\')" type="submit" class="btn">Register</button></center>';?>
						</div>
					</div>

			
		</div>






<div class="js-modal-41  modal  modal--1">
			<span class="modal-close-btn"></span>
	<center><h1>SUDOKU</h1></center>

			
				<div class="form-bottom">
					<div class="quote-box form-bottom">
				
						
						<center><p>Sudoku are the cherry on the cake when it comes to exercising the brain 
Are you smart enough to solve a simple 9 X 9 of numbers.</p></center>
					<p><u>Event Description:</u><br>
<p>Round 1: Qualifying round (Easy)<br>
Round 2:Solve and win exciting prizes<br>
Solve within 5 minutes and get bous prizes. </p>
<p>
Registration fee : Rs 20 </p>
		<p>Co-ordinators :<br>
Prayalankar Ashutosh<br>
Kritika sharma <br>
Anubha Aggarwal<br>

			
</p><?php if($event[31])echo'<center><button id="e31" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e31" onclick="ajaxregister(\'31\')" type="submit" class="btn">Register</button></center>';?>
						</div>
					</div>

			
		</div>
<div class="js-modal-42  modal  modal--1">
			<span class="modal-close-btn"></span>
	<center><h1>FIFA 14</h1></center>

			
				<div class="form-bottom">
					<div class="quote-box form-bottom">
				
						
<p>FIFA 14 is a very famous PC game<br>
In this event,we'll organize a round robin league which will comprise of any number of players.<br>
Three players will be selected on the basis of point scored by them.<br>
Each win will fetch 3 points for the player,draw will fetch 1 point and 0 point for lose.<br>
In case of tie , then position will be decided by goal difference.<br>
<p>Registration fee : Rs 30 </p>
						<p>Prizes:Trophy and certificates.</p>
		<p>Co-ordinators :<br>
Sheikh Fauiq<br>
Kamaljot Singh

			
</p><?php if($event[32])echo'<center><button id="e32" type="submit" class="btn">Registered</button></center>';
						else echo'<center><button id="e32" onclick="ajaxregister(\'32\')" type="submit" class="btn">Register</button></center>';?>
						</div>
					</div>

			
		</div>


			

			
		
		</div>
</div>
		
		
		</div>
	</div>
</div>
	  <footer>
	  <div class="clear"></div>
	  
	</footer>
	 
	
	
	<script src="src/cta.js"></script>
		<script>
		var closeFn;
		function closeShowingModal() {
			var showingModal = document.querySelector('.modal.show');
			if (!showingModal) return;
			showingModal.classList.remove('show');
			document.body.classList.remove('disable-mouse');
			document.body.classList.remove('disable-scroll');
			if (closeFn) {
				closeFn();
				closeFn = null;
			}
		}
		document.addEventListener('click', function (e) {
			var target = e.target;
			if (target.dataset.ctaTarget) {
				closeFn = cta(target, document.querySelector(target.dataset.ctaTarget), { relativeToWindow: true }, function showModal(modal) {
					modal.classList.add('show');
					document.body.classList.add('disable-mouse');
					if(target.dataset.disableScroll){
						document.body.classList.add('disable-scroll');
					}
				});
			}
			else if (target.classList.contains('modal-close-btn')) {
				closeShowingModal();
			}
		});
		document.addEventListener('keyup', function (e) {
			if (e.which === 27) {
				closeShowingModal();
			}
		})
		</script>
		<script async="true" type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>

	 
			
  

</body>
</html>