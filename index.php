<?php 
  /**
  *
  * Titiksha official website
  * http://github.com/smvdu/titiksha
  *
  */
  	ini_set(' session.save_path','/tmp'); 
	session_name('userLogin');
    // Starting the session
    session_start();
	/* Local configurations/ overrides
	***********************************************/	
	# set default timezone
	date_default_timezone_set('Asia/Kolkata');
	include('php/config.php');
	ini_set('log_errors', 1);
	ini_set('error_log', 'errorlog.txt');

	if (DEBUG) {
		error_reporting(E_ALL | E_STRICT);
		ini_set('display_errors', 1);
	} else {
		error_reporting(0);
		@ini_set('display_errors', 0);
	}
  
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:svg="http://www.w3.org/2000/svg" itemscope itemtype="http://schema.org/<?php echo site_type; ?>" lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

		<title><?php echo site_title; ?></title>
	    <meta itemprop="name" content="<?php echo site_title; ?>">
	    <meta name="description" content="<?php echo site_description; ?>">
	    <meta itemprop="description" content="<?php echo site_description; ?>">
	    <meta itemprop="image" content="<?php echo site_photo_url; ?>">
	    <meta name="keywords" content="<?php echo site_keywords; ?>">
	    <meta name="author" content="<?php echo site_author; ?>">

		
	  	<!-- css for menu.php  -->
	  	
        <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />
		<!-- ======================== -->

		<link rel="icon" type="image/gif" href="intersection.gif"> 
		
		
		<link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">

        <!--  Timer css scripts   !-->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" />
        <link rel="stylesheet" href="css/jquery.countdown.css" />

        <script type="text/javascript" src="js/vendor/jquery-1.9.1.min.js"></script>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        


        <script>
        	var loggedIn = "<?php if(isset($_SESSION['is_logged']) && $_SESSION['is_logged'] == 'yes') echo 'true'; else echo 'false'; ?>";    
		</script>


       	
	</head>
	<body>
	<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="small_screen">Your Screen Size is too small to access this Website.</div>

        <nav id="main_nav">
        	<ul>
        		<li data-slide="1">Home</li>
        		<li data-slide="2">About</li>
        		<li data-slide="3">Events</li>
        		<li data-slide="4">Gallery</li>
        		<li data-slide="5">Sponsors</li>
        		<li data-slide="6"><?php if(isset($_SESSION["email_id"]))
        									echo 'Account';
        								else 
        									echo 'Join Us'?></li>
        		<li data-slide="7">Team</li>
        		<li data-slide="8">Contacts</li>
        		<li data-slide="9">Reach</li>
        	</ul>

        	<div data-slide="1"></div>
        	<div data-slide="2"></div>
        	<div data-slide="3"></div>
        	<div data-slide="4"></div>
        	<div data-slide="5"></div>
        	<div data-slide="6"></div>
        	<div data-slide="7"></div>
        	<div data-slide="8"></div>
        	<div data-slide="9"></div>
        </nav>


		<section id="container">	

			<div id="letters">            	
				<div class="os-phrases" id="os-phrases">
				<!-- temporary keywords , development in progress-->
					<h3>Get Ready</h3>
					<h3>To Witness</h3>
					<h3>The Most Innovative</h3>
					<h3>Exciting</h3>
					<h3>And Creative</h3>
					<h3>Technical Festival</h3>
					<h3>Of North India</h3>
					<h3>TITIKSHA</h3>
				</div>
			</div>

			<div id="loaderWrapper">
	            	<div id="loading">LOADING</div>
	            	<div id="progress"></div>
	            	<div id="enter">ENTER</div>
            </div>
			<!-- right division -->
			<div id="right-part">
				<div class="transformed" id="trans1"></div>
				<div class="transformed" id="trans2"></div>
				<div class="transformed" id="trans3"></div>
				<div class="transformed" id="trans4"></div>
				<div class="transformed" id="trans5"></div>
				<div class="transformed" id="trans6"></div>
				<div class="transformed" id="trans7"></div>
				<div class="transformed" id="trans8"></div>
				<div class="transformed" id="trans9"></div>
				<div class="transformed" id="trans10"></div>
				<div class="transformed" id="trans11"></div>
				<div class="transformed" id="trans12"></div>
				<div class="transformed" id="trans13"></div>
				<div class="transformed" id="trans14"></div>
				<div class="transformed" id="trans15"></div>
				<div class="transformed" id="trans16"></div>
				<div class="transformed" id="trans17"></div>
				<div class="transformed" id="trans18"></div>
				<div class="transformed" id="trans19"></div>

				
				<div id="right-header">
					<span id="header-text">SMVDU</span>
				</div>
                
                <div id="mid-text">
                    <h2>Titiksha 2k13</h2>
                    <p>25th - 27th October 2013</p>
                </div>

              </div>



		</section><!-- /container of loader -->

        
		<!-- added menu here -->

		<section class="page" id="container_menu" data-slide="1" data-stellar-background-ratio="0.8">
            

			<div id="bubble_area">
	            <div class="bub" id="bub1" data-stellar-ratio="0.6" data-stellar-horizontal-offset="1750" data-stellar-vertical-offset="1040"></div>
	            <div class="bub" id="bub2" data-stellar-ratio="1.8" data-stellar-horizontal-offset="-1000" data-stellar-vertical-offset="-450"></div>
	            <div class="bub" id="bub3" data-stellar-ratio="0.4" data-stellar-horizontal-offset="900" data-stellar-vertical-offset="450"></div>
	            <div class="bub" id="bub4" data-stellar-ratio="2.0" data-stellar-horizontal-offset="-300" data-stellar-vertical-offset="-350"></div>
	            <div class="bub" id="bub5" data-stellar-ratio="0.1" data-stellar-horizontal-offset="1200" data-stellar-vertical-offset="70"></div>
	            <div class="bub" id="bub6" data-stellar-ratio="1.3" data-stellar-horizontal-offset="-1200" data-stellar-vertical-offset="-270"></div>
	            <div class="bub" id="bub7" data-stellar-ratio="1.8" data-stellar-horizontal-offset="-1360" data-stellar-vertical-offset="-350"></div>
	            <div class="bub" id="bub8" data-stellar-ratio="0.7" data-stellar-horizontal-offset="-160" data-stellar-vertical-offset="550"></div>
	            <div class="bub" id="bub9" data-stellar-ratio="0.2" data-stellar-horizontal-offset="600" data-stellar-vertical-offset="650"></div>
	            <div class="bub" id="bub10" data-stellar-ratio="0.3" data-stellar-horizontal-offset="1700" data-stellar-vertical-offset="-40"></div>
	            <div class="bub" id="bub11" data-stellar-ratio="2.0" data-stellar-horizontal-offset="-90" data-stellar-vertical-offset="-550"></div>
	            <div class="bub" id="bub12" data-stellar-ratio="2.2" data-stellar-horizontal-offset="600" data-stellar-vertical-offset="-50"></div>
	            <div class="bub" id="bub13" data-stellar-ratio="0.1" data-stellar-horizontal-offset="250" data-stellar-vertical-offset="50"></div>
	            <div class="bub" id="bub14" data-stellar-ratio="1.5" data-stellar-horizontal-offset="-200" data-stellar-vertical-offset="-450"></div>
	            <div class="bub" id="bub15" data-stellar-ratio="1.1" data-stellar-horizontal-offset="-150" data-stellar-vertical-offset="9000"></div>
	            <div class="bub" id="bub16" data-stellar-ratio="1.8" data-stellar-horizontal-offset="-900" data-stellar-vertical-offset="-10"></div>
	        </div>
            

            <div class="header">
                <div id="h-text">
                    <p>Titiksha </p>
                    <div id="h-sub"><span id="h-date">25<sup>th</sup>-27<sup>th</sup> October 2013</span></div>
                </div>

                <div id="social_wrapper">
	                <ul>
	                	<li><a href="https://www.facebook.com/titiksha2k13" target="_blank"><img src="img/facebook.png"></a></li>   
	                	<li><a href="https://twitter.com/titiksha2k13" target="_blank"><img src="img/twitter.png"></a></li>  
	                	<!--<li><a href=""><img src="img/google+.png"></a></li>      -->         
	                </ul>
                </div>
            </div>
           


            <div class="content">
                <ul class="ca-menu">
                    <li data-slide="2"> 
                        <a href="#container_about">
                            <span class="ca-icon">T</span>
                            <div class="ca-content">
                                <h2 class="ca-main">About</h2>
                                <h3 class="ca-sub">An OverView of Titiksha</h3>
                            </div>
                        </a>
                    </li>
                    <li data-slide="3">
                        <a href="#contain_event">
                            <span class="ca-icon">D</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Events</h2>
                                <h3 class="ca-sub">Test yourself against the technology</h3>
                            </div>
                        </a>
                    </li>
                    <li data-slide="4">
                        <a href="#container_sponser">
                            <span class="ca-icon" id="heart">0</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Gallery</h2>
                                <h3 class="ca-sub">Our Trusty Believer's</h3>
                            </div>
                        </a>
                    </li>
                    <li data-slide="6">
                        <a href="">
                            <span class="ca-icon">U</span>
                            <div class="ca-content">
                                <h2 class="ca-main" id="register-menu"><?php if(isset($_SESSION["email_id"])) echo 'My Account'; else echo 'Join Us';?></h2>
                                <h3 class="ca-sub">Register and get started</h3>
                            </div>
                        </a>
                    </li>
                    <li data-slide="8">
                        <a href="#container_contact">
                            <span class="ca-icon">B</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Contacts</h2>
                                <h3 class="ca-sub">24/7 for your support</h3>
                            </div>
                        </a>
                    </li>
                </ul>
                <!--
                <div id="countdown"></div>
                <p id="note"></p>-->
                
            </div><!-- content -->
            
        </section><!-- container_menu -->



		<section class="page" id="container_about" data-slide="2">

			<div class="about_us" id="about">
				


				<div id="left_about">
					<div id="rocket" data-stellar-ratio="2.2" data-stellar-horizontal-offset="-100" data-stellar-vertical-offset="-700" ></div>
					<div id="earth"  data-stellar-ratio="0.8" data-stellar-horizontal-offset="-150" data-stellar-vertical-offset="1500" ></div>
				</div>

				<div id="right_about" data-stellar-ratio="2.0" data-stellar-horizontal-offset="-440" data-stellar-vertical-offset="-720">
					<div id="top"><p>
					 Shri Mata Vaishno  Devi University, India’s  one of the  top ranking  technical university,
					 proudly announces  the  embarkment of Titiksha 2013.
					 SMVDU located  on the foothills of  holy shrine of Mata Vaishno  Devi  is
				     surrounded  by  the  nature’s  scenic  beauty  which enthralls  all the
				     students and visitors. 
				     </p>
				     </div>
		
					<div id="bottom"><p> Titiksha, J&k’s largest annual  technical festival , this time is on it’s way to boggle
					 the minds of young  tech savvies around the nation. We , at SMVDU, for 
					 technical excellence, invite more than 200 of colleges /universities  from the
					 nation to participate in this  fiesta. Different events  will be held by the different
				     branches of the university for three  exuberant days.  Mechanical, Electronics and
		     	     communication, Computer science , Biotechnology and Architectural events will

				     emit their aura in this fest and this time Titiksha is going to be bigger than ever.
					</p> </div>

				</div>
				
				
			</div>
			
		</section>

		<!-- script for images -->
		
		<!-- Container Events -->

		<section class="page" id="contain_event" data-slide="3">
			<div id="event-message" style="display:none"></div>
			<div id="event">
				<div class="branch" id="mega" >
					<div class="event_heading">
						<span class="heading_text">MEGA Events</span>
						<div class="event_close" style="display:none">X</div>
					</div>

					<div class="event_content" style="display:none;">
						
						<div id="grid">
						
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-1">
									<span class="icon-eye"><em>All IZZ NOT WELL</em></span>
									<p> Event aims to gather problems around the country and come up with solution.</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-1">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="1" data-event="11">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>All Izz NOT Well</h3>
										<div>
											<p>The ideal engineer is composite...he's not a scientist, he's not a mathmatician,
											 but he may use the knowledge and techniques of any discipline in solving any problem...
											 so engineer if the headlines of newspaper makes you ponder and your technical brain has
											  solution for it but you are not getting the proper plateform, here it is ...
											  you tell us the best solution and also get rewarded for the same. "All izz not
											well" will be held in two rounds. </p>
											<p><em>ROUND 1­</em> : Students will be required to fill up the forms which will contain
											 questions about their Personal Information and their personal views on various mentioned
											  Social , Political and Technical Issues.
											</p>
											<p><em>ROUND 2</em> :­On the basis of form filling , students will be selected for second 
											and final round. On which they wiil have to give presentation on the topics assigned to them a day before Tech-fest.</p>
											 <br><a href="http://sample.avfconsultancy.org/" target="_blank">Please follow this for more Details.</a>
											<br><br>
											<ul>
												<li><strong>Schedule : </strong>26th Oct - Round 1 : 9-10am  | 27th Oct - Round 2 : 2-4pm</li>
												<li><strong>Event Co-ordinator :</strong> Shubham Tiwari | Aditya Ranjan | Rajesh Pathak</li>
												<li><strong>Contact :</strong> +91-9796-289195 | +91-9796-824820 | +91-9086-252184</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-2">
									<span class="icon-eye"><em>ROBO - MATRIX</em></span>
									<p>Complete  matrix  of  Robotic  events</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-2">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="1" data-event="12">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>ROBO - MATRIX</h3>
										<div>
											<p>There  is  a  complete  matrix  of  Robotic  events,  each  one
												focusing on introducing a particular trait into the robot.</p>
											<ul>
												<li>1. Robot Adventure : <a href="https://www.facebook.com/ajax/messaging/attachment.php?attach_id=8c8989b2fba504f34b09db3f199cd64d&mid=mid.1382120323120%3Aa8468d7b77199b8b94&hash=AQDhUpRBWFWF_1Sl" target="_blank" style="text-decoration: underline;"> click here for Rules.</a></li>
												<li>2. Robot Basketball</li>
												<li>3. Robot Race : <a href="https://www.facebook.com/ajax/messaging/attachment.php?attach_id=8c8989b2fba504f34b09db3f199cd64d&mid=mid.1382120323120%3Aa8468d7b77199b8b94&hash=AQDhUpRBWFWF_1Sl" target="_blank" style="text-decoration: underline;"> click here for Rules.</a></li>
												<li>4. Robo SANGRAM  | 27 Oct : 2:30pm-3:30pm <a href="https://docs.google.com/file/d/0B_vScjUjXFe7ajFhR0Q3cjhpQms/edit?usp=sharing" target="_blank" style="text-decoration:underline;">Click here for Rules</a></li>
												<li>5. SWACHALIT ROBO  | 26 Oct : 2:30pm-4:30pm <a href="https://docs.google.com/file/d/0B_vScjUjXFe7ZDNEcnoxYXBQZVk/edit?usp=sharing" target="_blank" style="text-decoration:underline;">Click here for Rules </a> </li>
												<li>6. Robot Soccer</li>
											</ul>
												<p>The  robot  winning  in  max  categories  of  Robo­matrix  will  be  awarded
													as the “BEST ROBOT”. </p>
													 <br>


											<ul>
												<li><strong>Event Co-ordinator :</strong> Vipin Tripathi | Anand Kumar</li>
												<li><strong>Contact :</strong> +91-9086-252113 | </li>
											</ul>

											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-3">
									<span class="icon-eye"><em>ELECTRO-AVTAAR</em></span>
									<p>Event is a blend of science and imagination.</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-3">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="1" data-event="13">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>ELECTRO-AVTAAR (EDGE OF TOMORROW)</h3>

										<div>
											<p>This event is a blend of science and imagination. Design your own
												super hero and win prizes! It will be organized in three levels.
												<p><em>Level 1</em> :<strong> The Bull's Eye - </strong>
												participants  will  form a group (of not more than two), and they have to
												write  a fictitious  short  story  on  the spot based on the picture shown to
												them. The story's central character must be a super­hero.
												The picture would be based on some social problem.</p>
												<p><em>Level 2</em> :<strong> Avenger - </strong>
												Selected participants would be grouped together in a team of three.
												The  teams  would design their own super hero. They have to explain its
												design  and  technical  details  before  other  teams  and  the  jury,  who
												would cross question them.</p>
												<p><em>Level 3</em> :<strong> Video Mania - </strong>
												The  top  participants  will  make  a  short  movie  on  their  superhero of the
												length  of  their  choice  and  the  best  video  would  be  shown  in
												the valedictory ceremony in auditorium.</p>

											<ul>
												<li><strong>Schedule : </strong>26 Oct - 10:00 am to 1:00 pm | Venue : Lecture hall C/D </li>
												<li><strong>Event Co-ordinator :</strong> Ashish Singh | Pawan Kumar | Chandan Jha | Jhanvi Tiwari</li>
												<li><strong>Contact :</strong>+91-9596-997294 | +91-9596-915301 | +91-9086-728974</li>
											</ul>

											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-4">
									<span class="icon-eye"><em>INNOVATIA RETURNS</em></span>
									<p>Project Exhibition</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-4">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="1" data-event="14">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>INNOVATIA RETURNS</h3>
										<div>
											<p>Under  this  event  project  related  to  all  branches  will  be  exhibited.
												Projects  made  by students during their minor project and major project
												or  made  individually  for  the  event.</p>
											<p> Projects  can  be  on  hardware  or
												software environment. Models can be working or non­ working.
											</p>
											<p><strong><em>Rules and Regulation:</em></strong>	</p>
											<p>	 			It would take place under two levels:
												<br> Level 1 (JUNIOR)­ for 1st and 2nd
												<br> Level 2 (SENIOR)­for 3 year /4 year/inter university.</p>
											<br>

											<ul>
												<li><strong>Schedule : </strong>26 Oct - 2-5 pm | Venue : Room C-105 / C-110 </li>
												<li><strong>Event Co-ordinator :</strong>Panchdev Parihar | Chandan jha |  Pawan kumar </li>
												<li><strong>Contact :</strong> +91-9797-666960  | +91-9086-728974</li>
											</ul>

										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-5">
									<span class="icon-eye"><em>TechRoadies Reloaded</em></span>
									<p>Tech-Roadies is back with new Exciting Stuffs. Enroll and Be a Roadie.</p>
									<p></p>
								</div>
								<div class="md-modal md-effect-11" id="modal-5">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="1" data-event="15">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>TechRoadies Reloaded</h3>
										<div>
											<p>This  event  is  for  TECHNOCRATS  who  think  differently and are truly
												want to be a real Engineer. The event contains : </p>
											<ul>
												<li>Aptitude and technical knowledge round (WRITTEN). </li>
												<li>Group Discussion on technical problems.</li>
												<li>Personal interview </li>
												<li><em>Task­-A : </em> Particular  task  would  be  given  to  perform  to  selected
												contestant.  (Like  think  about  a  technology  which  is  used  or  can
												be used at different places in university).</li>
											</ul>
											<br><br>

											<ul>
												<li><strong>Schedule: </strong> 25 Oct | 2pm (Form Filling) </li>	
												<li><strong>Event Co-ordinator :</strong> Daud Shareef | Navin Ray | Ashwani Yadav | Anup Chaudhary </li>
												<li><strong>Contact :</strong>+91-9697-679928 | +91-9086-251103</li>
												
											</ul>

											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-65">
									<span class="icon-eye"><em>CHACHA CHOUDHARY</em></span>
									<p>Want to be the CHACHA CHOUDHARY of SMVDU???</p>
									<p></p>
								</div>
								<div class="md-modal md-effect-11" id="modal-65">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="1" data-event="16">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>CHACHA CHOUDHARY</h3>
										<div>
											<p>Want to be the CHACHA CHOUDHARY of SMVDU???
												Here is your chance. All you need to have is a logical mind to
												decode the puzzles and knowledge about the present and past affairs
											    of the university. The competition is all about how fast you are and
											     where your knowledge can take you. </p>
											<ul>
												<li><strong>ROUND: 1</strong> - A brief test of logical, technical, analytical and   
												knowledge of university related questions. After evaluation, participants 
												with maximum correct answers will proceed to the next round.</li>
												
												<li><strong>ROUND: 2</strong> - Winners of the first round will get shuffled in 
												teams(max 3 members). One of the team members will be asked to select slips from
												 drop-box from where they will get clues and the hunt for CHACHA CHOUDHARY begins.
												  Team solving maximum clues in minimum time wins.</li>
											</ul>
											<p><strong>Time : </strong>Round 1 : 15min | Round 2 : 45min</p>
											<p>Winner gets the title of CHACHA CHOUDHARY.
											<br>TIP: “I think like a DETECTIVE”</p>
											<br><br>

											<ul>
												<li><strong>Schedule</strong> : 26 Oct : 3pm - 5pm</li>
												<li><strong>Event Co-ordinator :</strong>Kanav Mahajan | Bhanu Dobriyal | Rahul Sharma </li>
												<li><strong>Contact :</strong>+91-9796-805039 | +91-9697-680675 | +91-7298-327221</li>
												
											</ul>

											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							
							
							
						</div><!-- / grid -->
						
					</div>
				</div>

				<div class="branch" id="cse">
					<div class="event_heading">
						<span class="heading_text">Computer</span>
						<div class="event_close" style="display:none">X</div>
					</div>
					<div class="event_content" style="display:none;">
						<div id="grid">
						
							<div class="uc-container">
								<div class="md-trigger " data-modal="modal-7">
									<span class="icon-eye"><em>AD-VEB </em></span>
									<p>Design Ad-Web and Show your wits in Web Designing</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-7">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="2" data-event="21">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>AD-VEB (WEB-DESIGNING)</h3>
										<div>
											<p>Each  team  is  assigned  to  make  an  advertising  web  page  for  a  product
												(like  a  laptop,  mobile  etc  ),  which­ever  is  assigned  to  the  participants.
												The  participants  can  use basic Web Designing Language like HTML, CSS , Java­script  or  whichever  language
												they  are  comfortable  with  to  develop  their  webpage  and  also  they  can
												use  useful  attributes  for  it  using  the  internet.  Top  three  webpages  will
												be  shortlisted  on  the  basis  of  the  attractiveness  of  the  webpage,
												content, code and language used for it.</p>
												<p><strong>TEAM MEMBERS</strong> :­ 2 IN EACH TEAM</p>
												<p><strong>TIME</strong> : ­ 2 DAYS </p>
											<br><br>
											<ul>
												<li><strong>Schedule : </strong>26th Oct : 2-3 pm |	Venue : Net Lab </li>
												<li><strong>Event Co-ordinator :</strong>ADITYA RANJAN</li>
												<li><strong>Contact :</strong> +91-9796-824820</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="md-trigger " data-modal="modal-51">
									<span class="icon-eye"><em>DEBUGGAGE</em></span>
									<p>Debug and Solve Challenging Code</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-51">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="2" data-event="22">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>DEBUGGAGE</h3>
										<div>
											<p>The participants will be given errored codes to edit and debug.
												The event will be in two rounds:­</p>
											<p>Round one will be the qualifying round.<br>
												Round  2  will  be  the  final  round  in  which  the  top  10  candidates  of
												round one will participate.
											</p>
											
											<p><strong>TIME </strong>- Round 1: 40 min. <br>
											Round 2: 45 min.</p>
											
											<br><br>
											
											<ul>
												<li><strong>Schedule : </strong>26th Oct : 9-11 am	|  Venue : Programming Lab</li>
												
												<li><strong>Event Co-ordinator : </strong>Mohan Dutt Parashar | Ravi Prakash Giri | Shubham Tiwari</li>
												<li><strong>Contact :</strong> +91-9086-240-290 | +91-9469-443565 | +91-9796-289195 </li>
											</ul>
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-8">
									<span class="icon-eye"><em>PYTHON-GEEK</em></span>
									<p>Show your Python skills and Prove you are Future Programmer.
								</div>
								<div class="md-modal md-effect-11" id="modal-8">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="2" data-event="23">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>PYTHON-GEEK</h3>
										<div>
											<p>Python  geek  is  a  completion for Python programmers at the campus. It
												includes three phases­ :
											<ul><li>1. Written Test</li>
												<li>2. Debugging</li>
												<li>3. Coding</li>
											</ul>
											<a style="text-decoration: underline;" href="http://goo.gl/QUtO7q" target="_blank" >Follow this link : Python-Geek</a>
											</p>
											<br><br>
											<ul>
												<li><strong>Schedule : </strong>27th Oct : 11-1 pm	|  Venue : Programming Lab</li>
												
												<li><strong>Event Co-ordinator : </strong>Parbhat Puri</li>
												<li><strong>Contact :</strong> +91-9797-521857</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-50">
									<span class="icon-eye"><em>KILL'EM</em></span>
									<p>Troubleshoot PC and Show you are Computer Guy</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-50">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="2" data-event="24">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>KILL'EM</h3>
										<div>
											<p>This  event  is  similar  to  the  "Troubleshooting"  event  of  the
												titiksha 2k12. In  this  event, the  participants  will  be  given  6­8  problems
												of which 5 will easier and others will be little tough.
												The  participants  have  to  solve  and  trooubleshoot  all  the  problems  or
												most of them and they will be ranked accordingly.</p>
												<p><strong>TIME </strong>- Round 1: 45 min. <br>
											Round 2: 45 min.</p>
											<br><br>
										<ul>

											<li><strong>Schedule : </strong>27th Oct : 9-11am	|  Venue : Net Lab</li>
												
											<li><strong>Event Co-ordinator : </strong>Ravi Prakash Giri | Mohan Dutt Parashar | Prateek Sharma </li>
											<li><strong>Contact :</strong> +91-9469-443565 | +91-9086-240-290 | +91-9086-120891</li>
										</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-9">
									<span class="icon-eye"><em>LUI-COMMANDO</em></span>
									<p>Perform some Operation in Terminal and Prove Yourself Linux Lover</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-9">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="2" data-event="25">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>LUI-COMMANDO</h3>
										<div>
											<p>The event will be held in two rounds: <br>
												Round  one  will  be  a  qualification  round.  From  which  10  teams  (1  or
												two  participants)  will  be  selected.  These  teams  will  compete  in  the
												round 2 of the event.</p>
											<p>	Participants  are  required  to  have  a  good  knowledge  of  “Linux
												Terminal”  commands  and  Scripts  in  Linux  (Workshops  will  be  held
												to provide some preliminary knowledge about Linux) .</p>
											<p><strong>TIME </strong>- Round 1: 30 min. <br>
											Round 2: 30 min.</p>
											
											<br><br>
											<ul>
												<li><strong>Schedule : </strong>26th Oct : 11- 1pm	|  Venue : Linux Lab</li>
												<li><strong>Event Co-ordinator : </strong>Prateek Sharma | Ravi Prakash Giri | Mohan Dutt Parashar</li>
												<li><strong>Contact :</strong> +91-9086-120891 | +91-9469-443565 | +91-9086-240-290</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-10">
									<span class="icon-eye"><em>JUMBLE-MUMBLE</em></span>
									<p>Re-arrange code and Grab Prizes</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-10">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="2" data-event="26">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>JUMBLE-MUMBLE</h3>
										<div>
											<p>The  jumble  code  and  desired output  will  be  given  to  student.  Student
												are  pagesed  to  swap  the  instruction  such that given output will be the
												actual output of the code. </p><br>
											<p><strong>RULES : </strong>	
												1. There are maximum of two members in a group. <br>
												2.  No  extra  sources/materials  are  allowed  with  the  student  at  event
												centre/venues.<br>
												Eligibility: 1st or 2nd year students</p>
											
											<br><br>
											<ul>
												<li><strong>Schedule : </strong>26th Oct : 3-4pm	|  Venue : Programming Lab</li>
												<li><strong>Event Co-ordinator : </strong>Aman Kumar | Ritesh Srivastava </li>
												<li><strong>Contact :</strong> +91-9697-569-168 | 9086-261031</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							
							
							<div class="uc-container">

								<div class="md-trigger" data-modal="modal-12">
									<span class="icon-eye"><em>Binary Battles</em></span>

									<p>Participate , Do Competitive programming and Prove You are Elite Coder!</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-12">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="2" data-event="28">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>Binary Battles</h3>
										<div>
											<p>This  will  be  a  very  straight­forward  programming  event,  wherein
											certain  algorithmic  challanges  will  be  given  to  participants  and  they
											can solve it using C/C++ and Java.
											</p>
											<br>
											<p><strong></strong> </p>
											
											<br><br>
											<ul>
												<li><strong>Schedule : </strong> Not Ready </li>
												<li><strong>Event Co-ordinator : </strong>Akshay Pratap Singh |  Mohan Dutt Parashar | Ravi Prakash Giri</li>
												<li><strong>Contact :</strong> +91-9086250656 | +91-9086-240-290 | +91-9469-443565</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							
							
						</div><!-- / grid -->
					</div>
				</div>
				
				<div class="branch" id="mech">
					<div class="event_heading">
						<span class="heading_text">Mechanical</span>
						<div class="event_close" style="display:none">X</div>
					</div>
					<div class="event_content" style="display:none;">
						<div id="grid">
						
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-13">
									<span class="icon-eye"><em>DESIGN YOUR DREAMS</em></span>
									<p>Think Creative and Design Dream</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-13">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="3" data-event="31">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>DESIGN YOUR DREAMS</h3>
										<div>
											<p>Do you think about how my dream car should be look like?
											This  event  can  help  you  to  think  more.  Design  some  crazy  and
											innovative  automobiles  sketches  like  cycles,  bikes,  cars,  Air  crafts  etc.
											The most compelling design will be awarded.</p>
											
											<br><br>
											<ul>
												<li><strong>Schedule : </strong>26 Oct - 11:15am-12:45pm</li>
												<li><strong>Event Co-ordinator : </strong>Sanjeev Shukla | Vinay Kumar Singh </li>
												<li><strong>Contact :</strong> +91-8716-058339 | 9622-796834</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-14">
									<span class="icon-eye"> <em>Kit-Cad</em></span>
									<p>Muscle up your CAD skill</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-14">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="3" data-event="32">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>  Kit-Cad</h3>
										<div>
											<p>If you think you are good at CAD then come on and muscle it up with
											 others who believe the same.</p>
											
											<br><br>
											<ul>
												<li><strong>Schedule : </strong>27th Oct : 10:00am-12:00pm</li>
												<li><strong>Event Co-ordinator : </strong>Vikas Singla | Radheshyam Mishra | Ashish Kumar Gupta | Varun Singh</li>
												<li><strong>Contact :</strong> +91-9086-118374 | 9697-569763 | 9697-569770</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-15">
									<span class="icon-eye"><em>THE MACHINIST</em></span>
									<p>How much you know about Machine, Reveal Your Knowledge here</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-15">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="3" data-event="33">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>THE MACHINIST</h3>
										<div>
											<p>Machinist,  the  master  of  operating  machine  tools,  get  ready  to  show
											yours  mechanical  skills  on  the  machine.  Put  on  your  thinking  cap  and
											come up to reveal your encyclopaedism on machines</p>
											<ul>
												ROUND 1 :
												<li>Written test of around 45 minutes will be conducted.</li>
												<li>Participants will give test individually.</li>
												<li>Question  will  be  asked  from  basic  Workshop  Practice  and aptitude.</li>
												<li>10 teams will be selected for the 2nd round.</li>
												ROUND 2 :
												<li>The selected teams will have to finish a job within a given
												period of time.</li>
											
											</ul>
												<br><br>
											<ul>
												<li><strong>Schedule : </strong>26th Oct :  11:00am-1:30pm</li>
												<li><strong>Event Co-ordinator : </strong>Saddam Zoya | Vikas Singla</li>
												<li><strong>Contact :</strong> +91-9086-118161</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-16">
									<span class="icon-eye"><em>RUSH TO ASSEMBLE-ENGINE</em></span>
									<p>Assemble and build Engine</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-16">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="3" data-event="34">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>RUSH TO ASSEMBLE-ENGINE</h3>
										<div>
											<p>The  teams  will  be given clues which will act as directions for the teams
											to gather the parts of engine.</p>
											<ul>
												<li>At each checkpoint‚ the clue for next checkpoint will be provided.</li>
												<li>At  each  checkpoint‚  the  teams  will  either  be  given  questions  to  solve
													or, which have to be solved at that point itself.</li>
											</ul>
											<br><br>
											<ul>
												<li><strong>Schedule : </strong>26th Oct :  2:30pm-4:30pm</li>
												<li><strong>Event Co-ordinator : </strong>Sanjeev Shukla | Abhishek Kumar Shukla | Gaurav Shukla</li>
												<li><strong>Contact :</strong> +91-87160-58339 | 9086-261332 | 9622-335892</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-17">
									<span class="icon-eye"><em>CLUEDO</em></span>
									<p>"Student of the Year" competition is in SMVDU</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-17">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="3" data-event="35">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>CLUEDO</h3>
										<div>
											<p>This  event  is  like  a  clue  finding  event,  the  participants  are  to  be
												divided  in  group  of  two. The participants  have  to  submit  the  solved  paper  to  organizers  present  at
												that  place. </p>
											<ul>
												Rules :
													<li>1.The participants assemble and draw a chit containing the clue (the clue is a place where the participants have to report ).</li>
													<li>2.the participants have to report to the place indicated in the clue ,where they should solve problems (problems can be technical ,logical ,mathematical or based on general knowledge).</li>
													<li>3. on submitting the solved paper the participants will get a clue for their next location .The participants have to solve FIVE such problem sheets at different locations .</li>
													<li>4.the participants shall be evaluated on the basis of their marks scored and time taken to solve the paper.</li>
											</ul>
											<br>
											<ul>
												<li><strong>Schedule : </strong>26th Oct : 5:00pm-8:00pm</li>
												<li><strong>Event Co-ordinator : </strong>Vivek Mishra | Anand Kumar  | Rajesh Baranwal | K. Lokesh Kumar | Bipin Kumar Mishra</li>
												<li><strong>Contact :</strong> +91-9018-876131 | 9906-007341 | 9796-852097 | 9796-075597 | 9622-796847</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-18">
									<span class="icon-eye"><em>FUTURE-TECH</em></span>
									<p>Here is your chance to show Real Engineer inside You.</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-18">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="3" data-event="36">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>FUTURE-TECH</h3>
										<div>
											<p>The  technology  or  modification  in  technology  that  can  enhance  the
											existing technology (in any field) or innovation of any new type.</p>
											<p>Judgment criteria:­</p>
											<ul> 
												<li>1) Should Have Some Logical Ground.</li>
												<li>2) Economically Feasibility.</li>
												<li>3) Employment Generative.</li>
												<li>4) Environment Friendliness.</li>
											</ul>
											<p><a href="https://docs.google.com/file/d/0B_vScjUjXFe7a0pDQnpkOWpOYm8/edit?usp=sharing"  style="text-decoration: underline;" target="_blank"> click here for more.</a></p>
											<br><br>
											<ul>
												<li><strong>Schedule : </strong>27th Oct : 12:00pm-2:00pm</li>
												<li><strong>Event Co-ordinator : </strong>Rajesh Baranwal | Sanjeev Shukla | Vivek Mishra | Vinay Kumar Singh </li>
												<li><strong>Contact :</strong> +91-8716-058339 | 9796-852097 | 9018-876131 | 9622-796834</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-41">
									<span class="icon-eye"><em>BAJA de innovación</em></span>
									<p>Participate and Contribute your idea in "WILD BAnTENG</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-41">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="3" data-event="37">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>BAJA de innovación</h3>
										<div>
											<p>This  event  is  to  invite  innovative  ideas  for  the  ATV  under  production
												by  the team "MECHANIX" which will be participating with its vehicle
												"WILD BAnTENG" in BAJA SAE 2014.</p>

											<ul> The event will be organised in two stages:
												<li>Stage  1 :  Participants  will  be  given  a  questionnaire  about  ideas
													in different fields.</li>
												<li>Stage  2 :  Selected  candidates  will  be  invited  to  submit  a
													full­length  description  of  their  idea  in  the  form  of  a  ppt.  and
													winners  will  be  decided  on  the  basis  of  the  practicality  and
													usefulness of the idea.</li>
											</ul>
											<p>The  winning  ideas  will  be  implemented  by  the  "MECHANIX"
												and  if  the  idea  wins  any  prizes  at  the  BAJA  SAE  2014,  the
												person  will  be  given  10%  of  the  prize  money.  (which  will
												amount to no less than <strong>15,000 INR </strong>).</p>
											<p><a style="text-decoration: underline;" target="_blank" href="https://docs.google.com/file/d/0B_vScjUjXFe7ZXBiQ05tX2tHaUU/edit?usp=sharing">
													 Click here for more</a></p>
											<br><br>
											<ul>
												<li><strong>Schedule : </strong>Round 1 : 26 Oct : 10:00am-11:00am | Round 2 : 27 Oct : 10:00am-11:00am</li>
												<li><strong>Event Co-ordinator : </strong>Anand kumar | K. lokesh Kumar | Monika</li>
												<li><strong>Contact :</strong> +91-9906-007341 | 9796-075597 | 9622-269983</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->

							
							
						</div><!-- / grid -->
					</div>
				</div>
				
				<div class="branch" id="ece">
					<div class="event_heading">
						<span class="heading_text">Electronics</span>
						<div class="event_close" style="display:none">X</div>
					</div>
					<div class="event_content" style="display:none;">
						<div id="grid">
						
							<div class="uc-container">

								<div class="md-trigger" data-modal="modal-19">
									<span class="icon-eye"><em>WAVEMANIA</em></span>

									<p>Check whether you have the basic knowledge of electrical components.</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-19">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="4" data-event="41">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>WAVEMANIA</h3>
										<div>
											<p>The event consists of 2 <strong>rounds</strong>.
												<br>The  Prelims  consist  of  a  small  Q/A  session  of  one’s  knowledge  of
												basic electrical components.
												The  second  round:  The  participants  will  be  given  electronic
												components  and  an  oscilloscope  and they have to generate waveforms.
												The most interesting ones win.</p>
											<br><br>
											<ul>
												<li><strong>Schedule : </strong>27th Oct : 11:00 am – 1:00 pm | Venue :  Xilinx Lab </li>
												<li><strong>Event Co-ordinator : </strong>Suraj Gupta | Madhav | Shweta Pandey </li>
												<li><strong>Contact : </strong>+91-9596913682</li>


											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">

								<div class="md-trigger" data-modal="modal-20">
									<span class="icon-eye"><em>ELECTRO-QUIZ</em></span>
									<p>A quiz regarding lab instruments and related to technology.</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-20">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="4" data-event="42">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>ELECTRO-QUIZ</h3>
										<div>
											<p>Questions  will  be  based  on  knowledge  regarding  with  lab  instruments and  related  to  technology.  The  quiz  will  be  held  in  two  <strong>rounds</strong>. Those
												qualifying  the  preliminary  round  will be permitted to participate in the
												final.</p>
											<br><br>
											<ul>

												<li><strong>Schedule : </strong>26th Oct : 3:30 pm to 6:00 pm | Venue :  Lecture Theatre C </li>
												<li><strong>Event co-ordinator: </strong> Brijesh Kumar | Suraj Kumar | Shobhit Verma</li>
												<li><strong>Contact:</strong> +91-9086255280</li> 
											

										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							
							<div class="uc-container">

								<div class="md-trigger" data-modal="modal-22">
									<span class="icon-eye"><em>CIRCUIT-BUG</em></span>

									<p>An event for those obsessed with circuits, comprising of two rounds.</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-22">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="4" data-event="44">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>CIRCUIT-BUG</h3>
										<div>
											<p>An event for those obsessed with circuits, comprising of two <strong>rounds</strong>.</p>
											<ul>
												<li><em><strong>Round 1 </strong></em>: a questionnaire for prelims.</li>
												<li><em><strong>Round 2 </strong></em>:  A  dysfunctional  circuit  will  be  given  to  the  participant.  The
												one who fixes his/her circuit first will brag the prize.</li>
											</ul>
											<br><br>
											<ul>

												<li><strong>Schedule : </strong>26th Oct : 2 pm to 3:30 pm | Venue :  Xilinx Lab </li>
												<li><strong>Event co-ordinator: </strong> Munib Chauhan | Danish | Ajit Maurya </li>
												<li><strong>Contact: </strong> +91-9086260992</li>

											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">

								<div class="md-trigger" data-modal="modal-23">
									<span style="font-size: 90%;" class="icon-eye"><em>MICRO - CONTROLLER CODING</em></span>
									<p>Using  microprocessor  build  a  real  life  application.</p>

								</div>
								<div class="md-modal md-effect-11" id="modal-23">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="4" data-event="45">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>MICROCONTROLLER CODING</h3>
										<div>
											<p>Using  <strong>microprocessor/microcontroller</strong>  build  a  real  life  application
											(only software)</p>
											<br><br>
											<ul>

												<li><strong>Schedule : </strong>27th Oct : 9 am – 11 am | Venue : Freescale Lab</li>
												<li><strong>Event co-ordinator: </strong> Munib Chauhan | Aakash maurya | Mansi Maheshwari</li>
												<li><strong>Contact: </strong> +91-9086260992</li>

											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">

								<div class="md-trigger" data-modal="modal-24">
									<span style="font-size: 90%;"class="icon-eye"><em>CIRCUIT - ELECTRONIQUE</em></span>
									<p>An  event  for  those  who  believe  themselves  to  be  circuit­experts.</p>

								</div>
								<div class="md-modal md-effect-11" id="modal-24">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="4" data-event="46">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>CIRCUIT-ELECTRONIQUE</h3>
										<div>
											<p>An  event  for  those  who  believe  themselves  to  be  circuit­experts.
												Participants  can  come  in  
												<strong>pairs</strong>  and  will  be  shortlisted  through  a
												preliminary round for the final circuit assembly test. <strong>Final</strong> :  The  circuit  assembling  skills  of  the  participants  will  be  put  to
												test.  Time  taken  by  the  participants  and  the  quality  of  the  circuit
												designed will determine the winner.</p>
											<br><br>
											<ul>

												<li><strong>Schedule : </strong>27th Oct : 5:30 pm to 8:00 pm | Venue : Xilinx Lab C-105</li>
												<li><strong>Event co-ordinator: </strong>DANISH SIDDIQUI | Mansi | Neha Sharma</li>
												<li><strong>Contact: </strong>+91-9796-415772</li>


											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							
							<div class="uc-container">

								<div class="md-trigger" data-modal="modal-56">
									<span class="icon-eye"><em>ELECTRO TRADE</em></span>

									<p>Get your Technology knowledge checked here.</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-56">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="4" data-event="47">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>ELECTRO TRADE</h3>
										<div>
											<p>Traded a pair of jeans, exchanged your favourite music dvd, but have you ever 
											considered trading resistors, capacitors 
											to let you win a competition. So folks time to use business acumen and technical 
											skills to build a breadboard circuit fighting against time and other competitors. </p>
												<ul>
													<li>The first round comprises of a paper, which will have multiple
														choice type questions  which will be related to TECHNOLOGY. Based
														on the score of the test, teams will be shortlisted for the next round.</li>
													<li>15 selected teams will go for second round. This is rapid fire round
														where POINTS  will be rewarded depending upon no. of correct
														answer given by the team .</li>	
													<li>The objective of the third round is to make a circuit. But that's not it.
                                                        The details about the circuit will be hidden in a hint given to you.</li>
												</ul>
										
											
											<br><br>
											<ul>

												<li><strong>Schedule : </strong>26 Oct : Round 1 - 8-9 pm | 27 Oct : Round 2 - 2-3 pm | Venue : Room C-105</li>
												<li><strong>Event co-ordinator: </strong> Prayag Varshney | Panch Dev parihar | Apoorv Shukla </li>
												<li><strong>Contact: </strong>+91-9697992483 | </li>


											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->

							<div class="uc-container">

								<div class="md-trigger" data-modal="modal-68">
									<span class="icon-eye"><em>ELECTRO - MAZE </em></span>

									<p>Let the battle be in your mind!!</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-68">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="4" data-event="48">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>ELECTRO MAZE</h3>
										<div>
											<p>The problem is that we always look for the missing piece of
											 the puzzle instead of finding a place for the one in our hand.
											Delve into the mazes of your mind for the final answers. Here 
											comes Mind Maze to perplex and enthral you with its conundrums and riddles.</p>
											<p>Event consist two rounds-</p>
												<ul>
													<li>ROUND ONE - Participants will be given some puzzles/problems which may  based 
													on basic electrical concepts which have to be solved in the given time period. </li>
													<li>ROUND TWO-In this round, selected participants of round one can make their teams
													(two member). They will have to 
													simultaneously solve the given puzzle and then explain their answers to the judges.</li>	
													They will be given the next puzzle only if they answer the previous one.
 													The top 3 teams who will be able to pass through the maze of puzzles 
 													at the earliest will be declared first, second and third. 
												</ul>
											</p>
											
											<br><br>
											<ul>

												<li><strong>Schedule : </strong>26th Oct : 9-10am | Venue : Room C-105</li>
												<li><strong>Event co-ordinator: </strong> APPORVA SHUKLA | LAKHAN | PRAYAG VARSHNEY</li>
												<li><strong>Contact: </strong>  +91-9086-119935</li>


											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							
						</div><!-- / grid -->
					</div>
				</div>

				<div class="branch" id="arch">
					<div class="event_heading">
						<span class="heading_text">Architecture</span>
						<div class="event_close" style="display:none">X</div>
					</div>
					<div class="event_content" style="display:none;">
						<div id="grid">
						
							<div class="uc-container">

								<div class="md-trigger" data-modal="modal-25">
									<span style="font-size: 90%;" class="icon-eye"><em>ARCHITECTURAL SYMPOSIUM</em></span>
									<p>"Has  the  public  not  become  so  diverse  that  a
										space with which everyone identifies no longer exists?"</p>

								</div>
								<div class="md-modal md-effect-11" id="modal-25">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="5" data-event="51">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>ARCHITECTURAL SYMPOSIUM</h3>
										<div>

											<p>In the debate on public space, references are still being made to traditional examples: coffeehouses in which politics were discussed, boulevards where vagrants warily eye the bourgeoisie, 
											old city squares used by a diverse public. 
											But are these public spaces still the spaces of the contemporary city? Has the public not become so diverse that a space with which everyone identifies no longer exists?</p>
											<p>In this event you have to write an article in not more than 450 words. Six entries will get a chance to read their article in front of our esteemed guest faculty.
											 There will be a dialogue session, winners will be notified accordingly. </p>
											<p>Email your entries at pursuingarchitecture@gmail.com </p>
											<br><br>
											<ul>
												<li><strong>Schedule : </strong>27th Oct : 4 - 5pm</li>
												<li><strong>Event Co-ordinator : </strong>Anand upadhayay |  Navjot Singh Sasan</li>
												<li><strong>Contact :</strong> +91- 9697-679672|  +91-9622-074246</li>

											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">

								<div class="md-trigger" data-modal="modal-26">
									<span class="icon-eye">ART INSTALLATION</span>

									<p>Make  an  art  installation  using  natural  as  well  as  waste
										products,  gathering  from  university  campus.</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-26">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="5" data-event="52">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>ART INSTALLATION</h3>
										<div>
											<p>Installation  art  can  be  either  temporary  or  permanent.  Installation
												artworks  have  been  constructed  in  exhibition  spaces  such  as  museums
												and  galleries,  as  well as public and private spaces. Here, what you have
												to  do  is  to  make  an  <strong>art  installation</strong>  using  natural  as  well  as  waste
												products,  gathering  from  university  campus.  The  theme  will  be
												provided on the spot.</p>
											<br><br>
											<ul>
												<li><strong>Schedule : </strong>27th Oct : 11-1pm</li>
												<li><strong>Event Co-ordinator : </strong>Anuksha amla |  Sravya Amancherla</li>
												<li><strong>Contact :</strong> +91-9797-517532 | +91-9797-520573</li>

											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">

								<div class="md-trigger" data-modal="modal-27">
									<span class="icon-eye">DIGI-ART</span>

									<p>Produce  some  digital  modals  using  simple
										Google  “sketch­up”  software</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-27">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="5" data-event="53">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>DIGI-ART</h3>
										<div>
											<p><em>Digital</em>  art  is  a  general  term  for  a  range  of  artistic  works  and  practices
												that  use  digital  technology  as  an  essential  part  of  the  creative  and/or
												presentation  process.  Since  the  <strong>1970s</strong>,  various  names  have  been  used to  describe  the  process  including  computer  art  and multimedia art, and
												digital art is itself placed under the larger umbrella term new media art.</p>
												<p>In  this  event  you  have  to  produce  some  digital  modals  using  simple
												Google  “sketch­up”  software,  you  can  also  use  v­ray  for  the rendering
												purpose. Theme will be revealed at the time of event.</p>
											<br><br>
											<ul>
												<li><strong>Schedule : </strong>27th Oct : 2-4pm</li>
												<li><strong>Event Co-ordinator : </strong>Shreya | Damanjot kaur</li>
												<li><strong>Contact :</strong> +91- 9086-120809 | +91-8283-835234</li>

											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">

								<div class="md-trigger" data-modal="modal-28">
									<span class="icon-eye">FACE-PAINTING</span>
									<p>Paint your friends face.</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-28">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="5" data-event="54">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>FACE-PAINTING</h3>
										<div>
											<p><strong>Body painting</strong>,  or  sometimes  body  painting,  is  a  form  of  body­art.
												Unlike  tattoo  and  other  forms  of  body art, body painting is temporary,
												painted  onto  the  human  skin,  and  lasts  for  only  several  hours,  or  at
												most  (in  the  case  of  Mehndi  or  "henna  tattoo")  a  couple  of  weeks.
												Body painting that is limited to the face is known as face painting.</p>
												<p>So  it  is  clear  from  above  description  that  you  have  to  paint  your
												friends  face. So be ready to have some fun. <strong>Theme will be given before
												time of the event</strong>.</p>
											<br><br>
											<ul>
												<li><strong>Schedule : </strong>26th Oct : 4-5pm </li>
												<li><strong>Event Co-ordinator : </strong>Arunima Bhowmick | Puneet Mehta</li>
												<li><strong>Contact :</strong> +91-9596997279 | +91-9419-351611</li>

											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">

								<div class="md-trigger" data-modal="modal-29">
									<span class="icon-eye">CARICATURE-MAKING</span>
									<p>Make  a
										caricature  of your best enemy</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-29">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="5" data-event="55">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>CARICATURE-MAKING</h3>
										<div>
											<p>A  <strong>caricature</strong>  is  a rendered image showing the features of its subject in a
												simplified or exaggerated way.</p>
												<p>In literature, a caricature is a description of a person using exaggeration of some characteristics and oversimplification of others.</p>
												<p>Caricatures can be insulting or complimentary and can serve a political purpose or be drawn solely for entertainment. Caricatures of politicians
												 are commonly used in editorial cartoons. While caricatures of movie stars are often found in entertainment magazines. </p>
												<p>Make  a caricature  of your best enemy and have a chance to showcase your rage
												in public. Have fun and win prize. <strong>Bingo!!</strong></p>
											<br><br>
											<ul>
												<li><strong>Schedule : </strong>26th Oct : 10:30am - 12pm </li>
												<li><strong>Event Co-ordinator : </strong>Arpita | Himanshu Bharanwal</li>
												<li><strong>Contact :</strong> +91- 9018-718271 | +91-8716-055931</li>

												
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">

								<div class="md-trigger" data-modal="modal-30">
									<span class="icon-eye">POSTER-MAKING</span>

									<p>Make Posters and express yourself.</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-30">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="5" data-event="56">Register</button>
											<button class="md-close close">Close!</button>
										</div>
									<span class="icon-eye">POSTER-MAKING</span>
										<h3></h3>
										<div>
											<p><strong>Posters</strong>  are  a  great  way  to  present  information  in  a  visual  format.  The poster’s  topic  should  be  clear  at  a  quick  glance  and  appealing  so  that
												people  will  stop  and  read  more.</p>

											<p>Here are some tips to make sure that your poster looks good:  </p>
											<p>• Make sure your poster is attention getting.  Remember you want people to take 
											the time to read about what you have done. • Include information that is brief and
											 easy to read. • Make it neat!  Even if you have really great information on your poster, 
											 no one is going to take time to read it if it is messy! • Watch out for clutter!  
											 Don’t try to put too much information or graphics on a poster.
											  • Include pictures or charts if they help explain your project work.
											   • Check your spelling and then check it again. Misspelled words can be very
											    distracting.    • Use intense colours. Try dark lettering against a light background.
											     This is usually easiest for people to read.   </p>
											     <p>Before you begin designing your poster, think about what the audience needs to know about a single subject or topic. Create a list to help narrow your main points.
													Theme provided before event.</p>
											<br><br>
											<ul>
												<li><strong>Schedule : </strong>27th Oct : 9-11am</li>
												<li><strong>Event Co-ordinator : </strong>Damanjot Kaur | Shreya</li>
												<li><strong>Contact :</strong> +91- 8283-835234 |  +91-9086-120809</li>

											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->

							<div class="uc-container">

								<div class="md-trigger" data-modal="modal-31">
									<span class="icon-eye">LOGO-DESIGN</span>

									<p>Design  a  logo  for  the  world’s  most  economy  booster  company  named
										“frame­inn”.</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-31">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="5" data-event="57">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>LOGO-DESIGN</h3>
										<div>
											<p>A  logo  is  a  graphic  mark  or  emblem  commonly  used  by  commercial
												<strong>enterprises</strong>,  <strong>organizations</strong>  and  even  <strong>individuals</strong>  to  aid  and  promote
												instant  public  recognition.  Logos  are  either  purely  graphic
												(symbols/icons) or are composed of the name of the organization.</p>
											<p>Design  a  logo  for  the  world’s  most  economy  booster  company  named
												“frame­inn”.  Basically  the  company  deals  with  the  global  modeling
												business,  while  designing  logo  for  the  company  you  should  keep  in
												mind the <strong>purpose</strong> and <strong>simplicity</strong> of logo.</p>
											<br><br>
											<ul>
												<li><strong>Schedule : </strong>26th Oct : 9-10am </li>
												<li><strong>Event Co-ordinator : </strong>Himanshu Bharanwal | Chidananda Arpita</li>
												<li><strong>Contact :</strong> +91-- 8716-055931 |  +91-9018-718271</li>
												
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							
							<div class="uc-container">

								<div class="md-trigger" data-modal="modal-32">
									<span class="icon-eye">LANDSCAPING</span>

									<p>What  you  have  to  do  is  to  landscape  the  “PMC”  lawn.  Of  which  the
										area/plan  will  be  given  before  event. </p>
								</div>
								<div class="md-modal md-effect-11" id="modal-32">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="5" data-event="58">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>LANDSCAPING</h3>
										<div>
											<p><strong>Landscaping</strong>  refers  to  any  activity  that  modifies  the  visible  features  of
												an area of land, including: </p>
											<ul><li>1. Living elements, such as flora or fauna; or what is commonly
											 known to as gardening, the art and craft of growing
											 plants with a goal of creating a beautiful environment within the landscape</li>
											 <li>2. natural elements such as landforms, terrain shape and elevation, or bodies of water;</li>
											 <li>3. human elements such as structures, buildings, fences or other material objects created and/or installed by humans; and</li>
											 <li>4. Abstract elements such as the weather and lighting</li>
											 </ul>
											<ul>

											<br><br>
											<ul>
												<li><strong>Schedule : </strong>26th Oct : 2:30-4:00pm</li>
												<li><strong>Event Co-ordinator : </strong>Puneet Mehta | Arunima Bhowmick </li>
												<li><strong>Contact :</strong> +91-9419-351611 | +91-9596-997279</li>

											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							
						</div><!-- / grid -->
					</div>
				</div>

				<div class="branch" id="ibt">
					<div class="event_heading">
						<span class="heading_text">BioTech</span>
						<div class="event_close" style="display:none">X</div>
					</div>
					<div class="event_content" style="display:none;">
						<div id="grid">
						
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-38">
									<span class="icon-eye">BIO-TECH QUIZ</span>
									<p>Quiz based on new  inventions  in
										bio­tech and other aspects of bio technology.</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-38">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="6" data-event="61">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>BIO-TECH QUIZ</h3>
										<div>
											<p>Students  will  be  asked  various  questions  related  to  new  inventions  in
												bio­tech and other aspects of <strong>bio-technology</strong>.
											</p><br>
											<p>TEAM : 3 Members</p>
											<br><br>
											<ul>
												<li><strong>Schedule : </strong>26th Oct : :2:00-3:30pm</li>
												<li><strong>Event co-ordinator: </strong> Ishan tiwari | Abhishek Singh </li>
												<li><strong>Contact: </strong> +91-9596916580</li>
												

											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">

								<div class="md-trigger" data-modal="modal-34">
									<span class="icon-eye">SPELL-CORRECTLY</span>

									<p>Write the names of micro­-organism correctly.</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-34">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="6" data-event="62">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>SPELL-CORRECTLY</h3>
										<div>
											<p>Students  are  asked  to  write  down  names  of  <strong>micro­organism</strong>  the  one
												who write the most of the name correct wins.</p><br>
											<p>TEAM : 1 member</p>
											<br><br>
											<ul>
												<li><strong>Schedule : </strong>27th Oct : 11:30-1:00pm</li>
												<li><strong>Event co-ordinator: </strong> Shamli Shagotra | Prashant Pandey </li>
												<li><strong>Contact: </strong> +91-946947982</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">

								<div class="md-trigger" data-modal="modal-33">
									<span class="icon-eye">JUMBLE-WORDS</span>

									<p>Lots  of  name  related  to  bio  tech  will  be  jumbled  up  the  one who finds
										the most wins.</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-33">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="6" data-event="63">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>JUMBLE-WORDS</h3>
										<div>
											<p>Lots  of  name  related  to  bio  tech  will  be  <strong>jumbled</strong>  up  the  one who finds

												the most wins.</p><br>
											<p>TEAM : 1 Member</p>
											<br><br>
											<ul>
												<li><strong>Schedule : </strong>27th Oct : 10:00-11:30am</li>
												<li><strong>Event co-ordinator: </strong> Sudhanshu Raj Sagar |  Sabhajeet Yadav</li>
												<li><strong>Contact: </strong> +91-9796858005</li>
												

											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">

								<div class="md-trigger" data-modal="modal-40">
									<span style="font-size: 80%;"class="icon-eye"><em>COMPLEMENTATION</em></span>
									<p>Complete  the  sequence  of  DNA  by  making  their
										complement of the base pairs (ATGC).</p>

								</div>
								<div class="md-modal md-effect-11" id="modal-40">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="6" data-event="64">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>COMPLEMENTATION</h3>
										<div>
											<p>You  have  to  complete  the  sequence  of  <strong>DNA</strong>  by  making  their
												complement of the base pairs <strong>(ATGC)</strong>.
												You have to make the sequence as fast as possible
												Those  who  will  finish  it  first  will  be  the  winner.</p>
												<br>
											<p>TEAM : 2 Members</p>
											<br><br>
											<ul>
												<li><strong>Schedule : </strong>27th Oct : 3-5pm</li>
												<li><strong>Event co-ordinator: </strong> Aman Sharma | Ankit Pandey  </li>
												<li><strong>Contact: </strong> +91-9469285442</li>

											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">

								<div class="md-trigger" data-modal="modal-35">
									<span class="icon-eye">SHOW YOUR MEMORY</span>

									<p>Put your memory to a test.</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-35">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="6" data-event="65">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>SHOW YOUR MEMORY</h3>
										<div>
											<p><strong>Visuals</strong>  will  be  displayed  for  few  seconds
												to  the  contestants.  Contestants  have  to  recall  the  different  names  they
												have seen in the visuals.</p>
												<br>
											<p>TEAM : 1 Member</p>
											<br><br>
											<ul>
												<li><strong>Schedule : </strong>26th Oct : 6:00-7:30pm</li>
												<li><strong>Event co-ordinator: </strong> Lav Kush Raj | Kapil Bagal </li>
												<li><strong>Contact: </strong> +91-9419873842</li>

												
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">

								<div class="md-trigger" data-modal="modal-36">
									<span class="icon-eye">STRUCTURE MODELLING</span>

									<p>Draw the 3-D structure of different compounds and molecules.</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-36">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="6" data-event="66">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>STRUCTURE MODELLING</h3>
										<div>
											<p>Different  <strong>compounds</strong>  or  <strong>molecules</strong>
												structures  will  be  shown  to  the  contestants  for  some  time  they  will  be
												provided  with  the  tools  to  make  the  <strong>3d</strong>  structure  of  the  shown molecule.</p>
											<br>
											<p>TEAM : 1 Member</p>
											<br><br>
											<ul>
												<li><strong>Schedule : </strong>26th Oct : 3:30-5:00pm</li>
												<li><strong>Event co-ordinator: </strong> Poonam Choudhary | Nayan Tiwari </li>
												<li><strong>Contact: </strong> +91-9596855658</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->

							<div class="uc-container">

								<div class="md-trigger" data-modal="modal-52">
									<span class="icon-eye">PUZZLE</span>

									<p>Solve The Bio-Puzzle.</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-52">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="6" data-event="67">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>PUZZLE</h3>
										<div>
											<p>In  this  event,  it  will  be  a  kind  of puzzle you will be shown a picture of
											anything related to biology.</p>
											<p>You  will  be  given  some  materials  and  you  have  to  make  the  same
											replica of that picture and also label it.</p>
											<p>Interested  students  from  all  branches  can  participate  in  groups. </p>
											<br>
											<p>TEAM : 1 or 2 Member</p>
											<br><br>
											<ul>
												<li><strong>Schedule : </strong>26th Oct : 10-12pm</li>
												<li><strong>Event co-ordinator: </strong>Richa Shrivastava | Rahul Chauhan</li>
												<li><strong>Contact: </strong> +91-9697-679161</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							
							
						</div><!-- / grid -->


					</div>
				</div>	
				
				<!-- Gaming Events -->

				<div class="branch" id="game">
					<div class="event_heading">
						<span class="heading_text">Games</span>
						<div class="event_close" style="display:none">X</div>
					</div>
					<div class="event_content" style="display:none;">
						<div id="grid">
						
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-60">
									<span style="color:#fff;" class="icon-eye">FIFA "11"</span>
									<p  style="color:#fff;">Show skills in digital football</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-60">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="7" data-event="71">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>FIFA "11"</h3>
										<div>
												<img  src="img/fifa.jpg">
												<p><strong>Entry Fees :</strong> Rs 50 per person</p><br>

												<p>Rules : Knockout Rounds will be there.
												 Every Participants will play Home & Away. Aggregate result (home & away) will decide winner. </p>

												<p>Prize will be Decided by Coordinators (Cash or Bumper Prize)</p>

												<p>Enroll Asap. And Show passion and Skill toward soccer. Hurry UP! </p>
											<br><br>
											<ul>
												<li><strong>Event co-ordinator: </strong>ADITYA  SHUKLA |  KAVI CHOWDHARY | MANISH  PALIWAL | ANUP CHOWDHARY</li>
												<li><strong>Contact: </strong> +91-9797-602242 | +91-9596-915315 | +91-9086-185529</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-61">
									<span style="color:#fff;" class="icon-eye">"Counter - Strike"</span>
									<p  style="color:#fff;">Strike down Your opponent</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-61">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="7" data-event="72">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>"Counter - Strike"</h3>
										<div>
											<img  src="img/cs.jpg">
											<ul>
												<li><strong>Team Member :</strong> 5</li>
												<li><strong>Entry Fees : </strong>Rs 200 per team</li>
											</ul>
											
											<strong>Maps : </strong>
													<p>DE - DUST2 | DE_INFERNO | DE_NUKE | DE_TRAIN</p>
											<span style="color: rgb(103, 255, 121); font-weight:bold;">"CASH PRIZE FOR THE WINNER "</span>
											<p>Note : Submit your team early to Game Cord on or before 23rd Oct. Hurry UP!</p>
											<ul>
												<li><strong>Event co-ordinator: </strong>Arshit mahajan | Rahul sharma | Rohit bhatt| Mayur kumar |	Anshuman | Akash</li>
												<li><strong>Contact: </strong>+91-9419102622 | +91-7298327221 | +91-9086118480 |  +91-9483542356 </li>
											</ul>
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-62">
									<span style="color:#fff;" class="icon-eye">"Nfs" - "Most Wanted"</span>
									<p  style="color:#fff;">Participate and Show how Quick you are into racing.</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-62">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register" data-branch="7" data-event="73">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>Nfs - "Most Wanted"</h3>
										<div>
											<img  src="img/nfs.jpg">
											<p><a href="https://www.facebook.com/photo.php?fbid=527108154049704&set=a.121600817933775.25810.100002515736257&type=1&theater" style="text-decoration: underline;"  target="_blank">More Info</a></p>
											<br><br>
											<ul>
												<li><strong>Event co-ordinator: </strong>Amrendra Pratap (Boys) | Kritika Sangra(Girls) </li>
												<li><strong>Contact: </strong>+91-8716-041023 | 3rd Yr ECE</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->


						</div>
					</div>

				</div>

			</div>
			
		</section> <!-- events END -->

		
	<section class="page" id="container_gal" data-slide="4">
		
		<div class="container_gal">	
			
			<div class="main">
				
				<div id="ri-grid" class="ri-grid">
					
					<ul>
						<li><a href="#"><img src="img/gallery/1.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/2.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/3.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/4.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/5.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/6.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/7.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/8.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/9.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/10.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/11.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/12.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/13.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/14.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/15.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/16.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/17.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/18.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/19.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/20.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/21.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/22.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/23.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/24.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/25.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/26.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/27.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/28.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/29.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/30.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/31.jpg"/></a></li>
						<li><a href="#"><img src="img/gallery/32.jpg"/></a></li>
										
						
					</ul>
				</div>

				<div id="play-slideshow">
					<img src="img/play.png" alt="Play SlideShow" />

				</div>

			</div>
			
        </div>

        <!-- slideshow gallery -->

        <div class="container_slide" style="display:none;">
        	
	        <div class="sp-slideshow">

	        		<div id="close-slideshow">
        				<img src="img/close.png" alt="Close Slideshow" />
        			</div>
				
					<input id="button-1" type="radio" name="radio-set" class="sp-selector-1" checked="checked" />
					<label for="button-1" class="button-label-1"></label>
					
					<input id="button-2" type="radio" name="radio-set" class="sp-selector-2" />
					<label for="button-2" class="button-label-2"></label>
					
					<input id="button-3" type="radio" name="radio-set" class="sp-selector-3" />
					<label for="button-3" class="button-label-3"></label>
					
					<input id="button-4" type="radio" name="radio-set" class="sp-selector-4" />
					<label for="button-4" class="button-label-4"></label>
					
					<input id="button-5" type="radio" name="radio-set" class="sp-selector-5" />
					<label for="button-5" class="button-label-5"></label>

					<input id="button-6" type="radio" name="radio-set" class="sp-selector-6" />
					<label for="button-6" class="button-label-6"></label>

					<input id="button-7" type="radio" name="radio-set" class="sp-selector-7"  />
					<label for="button-7" class="button-label-7"></label>

					<input id="button-8" type="radio" name="radio-set" class="sp-selector-8"  />
					<label for="button-8" class="button-label-8"></label>

					<input id="button-9" type="radio" name="radio-set" class="sp-selector-9" />
					<label for="button-9" class="button-label-9"></label>

					<input id="button-10" type="radio" name="radio-set" class="sp-selector-10"/>
					<label for="button-10" class="button-label-10"></label>

					<input id="button-11" type="radio" name="radio-set" class="sp-selector-11" />
					<label for="button-11" class="button-label-11"></label>

					<input id="button-12" type="radio" name="radio-set" class="sp-selector-12" />
					<label for="button-12" class="button-label-12"></label>

					<input id="button-13" type="radio" name="radio-set" class="sp-selector-13"  />
					<label for="button-13" class="button-label-13"></label>

					<input id="button-14" type="radio" name="radio-set" class="sp-selector-14"  />
					<label for="button-14" class="button-label-14"></label>

					<input id="button-15" type="radio" name="radio-set" class="sp-selector-15" />
					<label for="button-15" class="button-label-15"></label>

					<input id="button-16" type="radio" name="radio-set" class="sp-selector-16"  />
					<label for="button-16" class="button-label-16"></label>

					<input id="button-17" type="radio" name="radio-set" class="sp-selector-17"  />
					<label for="button-17" class="button-label-17"></label>

					<input id="button-18" type="radio" name="radio-set" class="sp-selector-18" />
					<label for="button-18" class="button-label-18"></label>

					<input id="button-19" type="radio" name="radio-set" class="sp-selector-19" />
					<label for="button-19" class="button-label-19"></label>

					<input id="button-20" type="radio" name="radio-set" class="sp-selector-20" />
					<label for="button-20" class="button-label-20"></label>

					<input id="button-21" type="radio" name="radio-set" class="sp-selector-21"  />
					<label for="button-21" class="button-label-21"></label>

					<input id="button-22" type="radio" name="radio-set" class="sp-selector-22"  />
					<label for="button-22" class="button-label-22"></label>

					<input id="button-23" type="radio" name="radio-set" class="sp-selector-23"  />
					<label for="button-23" class="button-label-23"></label>
					
					<input id="button-24" type="radio" name="radio-set" class="sp-selector-24"  />
					<label for="button-24" class="button-label-24"></label>

					<input id="button-25" type="radio" name="radio-set" class="sp-selector-25"  />
					<label for="button-25" class="button-label-25"></label>

					<input id="button-26" type="radio" name="radio-set" class="sp-selector-26"  />
					<label for="button-26" class="button-label-26"></label>

					<input id="button-27" type="radio" name="radio-set" class="sp-selector-27"/>
					<label for="button-27" class="button-label-27"></label>

					<input id="button-28" type="radio" name="radio-set" class="sp-selector-28"  />
					<label for="button-28" class="button-label-28"></label>
					
					<input id="button-29" type="radio" name="radio-set" class="sp-selector-29"  />
					<label for="button-29" class="button-label-29"></label>

					<input id="button-30" type="radio" name="radio-set" class="sp-selector-30"  />
					<label for="button-30" class="button-label-30"></label>

					<input id="button-31" type="radio" name="radio-set" class="sp-selector-31"  />
					<label for="button-31" class="button-label-31"></label>

					<input id="button-32" type="radio" name="radio-set" class="sp-selector-32"  />
					<label for="button-32" class="button-label-32"></label>
					


					<label for="button-1" class="sp-arrow sp-a1"></label>
					<label for="button-2" class="sp-arrow sp-a2"></label>
					<label for="button-3" class="sp-arrow sp-a3"></label>
					<label for="button-4" class="sp-arrow sp-a4"></label>
					<label for="button-5" class="sp-arrow sp-a5"></label>
					<label for="button-6" class="sp-arrow sp-a6"></label>
					<label for="button-7" class="sp-arrow sp-a7"></label>
					<label for="button-8" class="sp-arrow sp-a8"></label>
					<label for="button-9" class="sp-arrow sp-a9"></label>
					<label for="button-10" class="sp-arrow sp-a10"></label>
					
					<label for="button-11" class="sp-arrow sp-a11"></label>
					<label for="button-12" class="sp-arrow sp-a12"></label>
					<label for="button-13" class="sp-arrow sp-a13"></label>
					<label for="button-14" class="sp-arrow sp-a14"></label>
					<label for="button-15" class="sp-arrow sp-a15"></label>
					
					<label for="button-16" class="sp-arrow sp-a16"></label>
					<label for="button-17" class="sp-arrow sp-a17"></label>
					<label for="button-18" class="sp-arrow sp-a18"></label>
					<label for="button-19" class="sp-arrow sp-a19"></label>
					<label for="button-20" class="sp-arrow sp-a20"></label>

					<label for="button-16" class="sp-arrow sp-a16"></label>
					<label for="button-17" class="sp-arrow sp-a17"></label>
					<label for="button-18" class="sp-arrow sp-a18"></label>
					<label for="button-19" class="sp-arrow sp-a19"></label>
					<label for="button-20" class="sp-arrow sp-a20"></label>

					<label for="button-21" class="sp-arrow sp-a21"></label>
					<label for="button-22" class="sp-arrow sp-a22"></label>
					<label for="button-23" class="sp-arrow sp-a23"></label>
					<label for="button-24" class="sp-arrow sp-a24"></label>
					<label for="button-25" class="sp-arrow sp-a25"></label>

					<label for="button-26" class="sp-arrow sp-a26"></label>
					<label for="button-27" class="sp-arrow sp-a27"></label>
					<label for="button-28" class="sp-arrow sp-a28"></label>
					<label for="button-29" class="sp-arrow sp-a29"></label>
					<label for="button-30" class="sp-arrow sp-a30"></label>

					<label for="button-31" class="sp-arrow sp-a31"></label>
					<label for="button-32" class="sp-arrow sp-a32"></label>
								
					
					
					<div class="sp-content">
						<div class="sp-parallax-bg"></div>
						<ul class="sp-slider clearfix">
							<li><img src="img/gallery/1.jpg" alt="image01" /></li>
							<li><img src="img/gallery/2.jpg" alt="image02" /></li>
							<li><img src="img/gallery/3.jpg" alt="image03" /></li>
							<li><img src="img/gallery/4.jpg" alt="image04" /></li>
							<li><img src="img/gallery/5.jpg" alt="image05" /></li>

							<li><img src="img/gallery/6.jpg" alt="image01" /></li>
							<li><img src="img/gallery/7.jpg" alt="image02" /></li>
							<li><img src="img/gallery/8.jpg" alt="image03" /></li>
							<li><img src="img/gallery/9.jpg" alt="image04" /></li>
							<li><img src="img/gallery/10.jpg" alt="image05" /></li>
							
							<li><img src="img/gallery/11.jpg" alt="image01" /></li>
							<li><img src="img/gallery/12.jpg" alt="image02" /></li>
							<li><img src="img/gallery/13.jpg" alt="image03" /></li>
							<li><img src="img/gallery/14.jpg" alt="image04" /></li>
							<li><img src="img/gallery/15.jpg" alt="image05" /></li>
							
							<li><img src="img/gallery/16.jpg" alt="image01" /></li>
							<li><img src="img/gallery/17.jpg" alt="image02" /></li>
							<li><img src="img/gallery/18.jpg" alt="image03" /></li>
							<li><img src="img/gallery/19.jpg" alt="image04" /></li>
							<li><img src="img/gallery/20.jpg" alt="image05" /></li>
							
							<li><img src="img/gallery/21.jpg" alt="image01" /></li>
							<li><img src="img/gallery/22.jpg" alt="image02" /></li>
							<li><img src="img/gallery/23.jpg" alt="image03" /></li>
							<li><img src="img/gallery/24.jpg" alt="image04" /></li>
							<li><img src="img/gallery/25.jpg" alt="image05" /></li>
							
							<li><img src="img/gallery/26.jpg" alt="image01" /></li>
							<li><img src="img/gallery/27.jpg" alt="image02" /></li>
							<li><img src="img/gallery/28.jpg" alt="image03" /></li>
							<li><img src="img/gallery/29.jpg" alt="image04" /></li>
							<li><img src="img/gallery/30.jpg" alt="image05" /></li>
							
							<li><img src="img/gallery/31.jpg" alt="image01" /></li>
							<li><img src="img/gallery/32.jpg" alt="image02" /></li>
													

						</ul>
					</div><!-- sp-content -->
					
				</div><!-- sp-slideshow -->
				
			</div>
			<div class="md-overlay"></div><!-- the overlay element -->
		
		</section>


		
		<!-- sponsers page === -->
		
		<section class="page" id="container_sponser" data-slide="5" >
			<div id="sponsor_page" data-stellar-background-ratio='0.5'>
				<div id="spon_head">
					<span>Our Previous Sponsors</span>
				</div>				

				<?php

// Each sponsor is an element of the $sponsors array:


$sponsors = array(
	array('7','Reebok is a producer of athletic shoes, clothing, and accessories.','http://www.reebok.com/'),
	array('4','J&K Bank functions as a universal bank in Jammu & Kashmir and as a specialised bank in the rest of the country.','http://www.jkbank.net/'),
	array('9','TCS is a leader in the global marketplace and among the top 10 technology firms in the world.','http://www.tcs.com/'),
	array('2','The backbone of Indian entertainment and news industry. ','http://www.ddindia.gov.in/'),
	array('5','K.C. Residency is a Landmark in Jammu,located at Residency Road of Jammu in Jammu & Kashmir state.','http://www.kcresidency.com/'),
	array('3','The virtual search engine for Jammu & Kashmir','http://www.jammulinks.com/'),
	array('6','Red Hat, Inc. is an American software company that is engaged in providing open-source software products.','http://www.redhat.com/'),
	array('1','Aircel group is an Indian mobile network operator headquartered in Chennai, which offers voice & data services.','http://www.aircel.com/'),
	array('8','Tata Teleservices Limited is an Indian broadband and telecommunications service provider based in Mumbai, India. .','http://www.tataindicom.com/'),
	array('10','Wipro Ltd. is an Indian information technology consulting and outsourcing service company located in Bangalore, India.','http://www.wipro.com/'),

);

?>
					<div class="sponsorListHolder" >

						
				        <?php
							
							// Looping through the array:
							
						foreach($sponsors as $company)
						{
							echo'
							<div class="thumb scroll">
								<div class="thumb-wrapper">
									<img src="img/sponsors/'.$company[0].'.png" alt="More about '.$company[0].'" />
								</div>
								
								<div class="thumb-detail">
										<a href="'.$company[2].'" target="_blank">'.$company[1].'</a>
								</div>
							</div>
							
							';
						}
						
						?>

				       
				    </div>				   

				    <div id="spon_brochure" >
				    	<a style="color: #C6DAD6; text-decoration : underline;" target="_blank" href="https://docs.google.com/file/d/0B5u8hNVpPKnhSDRGRmZCX1VpcVE/edit?usp=sharing" >Sponsorship Brochure </a>
				    	<div id="spon_query" >
				    		<p>For Sponshorship Queries Contact :</p>
				    		<p>Gaurav Singh</p>
					    	<p>2011eec54@smvdu.ac.in</p>
					    	<span style="color: #42DA97;">+91-9796-446317</span>

				    		<p>Navjot Sasan</p>
					    	<p>navvi.singh4@gmail.com</p>
					    	<span style="color: #42DA97;">91-9622-074246</span>
				    	</div>
				    	
				    </div>

				</div>

		</section>	
		<?php
			if(!isset($_SESSION["is_logged"])){
		?>
		<!-- REGITRATION PAGE -->

		<section class="page" id="register" data-slide="6" >
			<div class="register-form" data-stellar-background-ratio="0.5">
				<div class="msg-Box" style="display:none;">
					<div class="msg-close">X</div>
					<div class="msg-content"></div>
				</div>
				<div class="md-overlay"></div><!-- the overlay element -->

				<div id="reg-part" >
					<div id="reg-head">
						<span>JOIN TITIKSHA</span>
					</div>
					<div id="reg-content">
						<div id="form-part">
							<form id="reg_form" name="reg_form" action="" method="post"  autocomplete="off">
								<table>
									<tbody>
										<tr>
											<th>Name :</th>
											<td>
												<span><img src="img/icomoon/user.png" /></span>
												<input name="name" type="text" size="30"  autocomplete="off" placeholder="Full Name"/>
											</td>
											<td></td>
										</tr>
										<tr>
											<th>Email :</th>
											<td>

												<span><img src="img/icomoon/mail.png" /></span>
												<input name="email" type="email" size="30"   autocomplete="off" placeholder="Email Address"/>
												<div id="email_warning" style="display:none"></div>
											</td>
											<td></td>
										</tr>
										<tr>
											<th>College :</th>
											<td>
												<span><img src="img/icomoon/briefcase.png" /></span>
												<input name="college" type="text" size="40" autocomplete="off" placeholder="University/College"/>
											</td>
											<td></td>
										</tr>
										
										<tr>
											<th>Year of Study : </th>
											<td>
												<span><img src="img/icomoon/bars2.png" /></span>
												<select name="year">
												<option selected="selected" name="1st" value="1st year">1st year</option>
												<option name="2nd" value="2nd year">2nd year</option>
												<option name="3rd" value="3rd year">3rd year</option>
												<option name="4th" value="4th year">4th year</option>
												</select>
											</td>
											<td></td>
										</tr>
										<tr>
											<th>Contact :</th>
											<td>

												<span><img src="img/icomoon/phone.png" /></span>
												<input name="contact" type="tel" size="14" placeholder="+91-**********" autocomplete="off" />

											</td>
											<td></td>
										</tr>
										<tr>
											<th>Gender :</th>
											<td>
												<span><img src="img/icomoon/users.png" /></span>
												<input name="gender" type="radio" value="Male" checked />Male
												<input name="gender" type="radio" value="Female" />Female 
											</td>
											<td></td>
										</tr>
										<tr>
											<th>Password : </th>
											<td>
												<span><img src="img/icomoon/key.png" /></span>
												<input name="password" id="password" type="password" autocomplete="off" placeholder="Desired Password"/>
												<div id="complexity" style="display: none;"></div>
											</td>
											<td></td>
										</tr>
										<tr>
											<th>Repeat Password : </th>
											<td>
												<span><img src="img/icomoon/key2.png" /></span>
												<input name="repassword" id="repassword" type="password" autocomplete="off" placeholder="Re-enter Password"/>
												<div id="password_warning" style="display: none;"></div>
											</td>
											<td></td>
										</tr>


									</tbody>
								</table>
							</form>
						</div>
						<div id="mid-part"></div>
					</div>
					<div id="join">
						<button id="submit_form">Submit Details</button>
					</div>
					
				</div>

				<div id="login-part" >
					<div id="login-box">
						<div id="login-head">
							<span>LOGIN</span> 
						</div>
						<div id="login-content">
							<form id="login_form" name="login" method="POST" autocomplete="off">
								<table>
									<tr>
										<td>
											<span><img src="img/icomoon/mail.png" /></span>
											<input name="email" type="email" size="35" maxlength="100"  autocomplete="off" placeholder="Email Address"/>
											<div id="email_warning" style="display:none"></div>
										</td>
										<td></td>
									</tr>
									<tr>
										<td>
											<span><img src="img/icomoon/key.png" /></span>
											<input name="password" id="password" type="password" autocomplete="off" placeholder="Password"/>
											<div id="warning" style="display: none;"></div>
										</td>
										<td></td>
									</tr>
								</table>	
							</form>
						</div>
						<div id="login">
							<button id="login-button" for="submit">Log In</button>
						</div>	

						<div id="contact-box">
							<div id="query-content">
								<span id="query-head">For any queries, Contact</span>
								<h4>Megha Sharma</h4>
								<p>+91-9086-118089</p>
								<p>meghas19@yahoo.co.in</p><br>
							</div>
						</div>

					</div>
					
				</div>
		    </div>			
		</section>
		
		<?php }else{ ?>
		<!-- Dashboard  -->
		<section class="page" id="container_dash" data-slide="6" >
			<div class="dashboard">
				<div class="dash-head">
					<div id="dash-head-title">Dashboard</div>
					<div id="logout" style="">Logout</div>
				</div>
				<div class="dash-menu">
					<ul>
						<li class="selected-nav" data-id="1">Registered Events</li>
						<li data-id="2">My Details</li>
					</ul>
				</div>
				<div class="dash-content">
					<div class="dash-registered-events" id="content-1">
						<div id="dash_title">
							<div class="dash_h">MEGA</div>
							<div class="dash_h">CSE</div>
							<div class="dash_h">MECH </div>
							<div class="dash_h">ECE </div>
							<div class="dash_h">ARCH </div>
							<div class="dash_h">IBT</div>
							<div class="dash_h">GAMES</div>
						</div>
						<div id="dash_event">
							<div class="reg_event" id="reg_mega"></div>
							<div class="reg_event" id="reg_cse"></div>
							<div class="reg_event" id="reg_mech"></div>
							<div class="reg_event" id="reg_ece"></div>
							<div class="reg_event" id="reg_arch"></div>
							<div class="reg_event" id="reg_ibt"></div>
							<div class="reg_event" id="reg_game"></div>
						</div>
					</div>
					<div class="dash-my-details" id="content-2" style="display: none;">
						<div class="my-details">
							<table>
								<tr>
									<td class="field-name">Name :</td>
									<td class="field-value" id="user-name"></td>
								</tr>
								<tr>
									<td class="field-name">Email-Id :</td>
									<td class="field-value" id="user-email-id"></td>
								</tr>
								<tr>
									<td class="field-name">College Name :</td>
									<td class="field-value" id="user-college-name"></td>
								</tr>
								<tr>
									<td class="field-name">Year Of Study :</td>
									<td class="field-value" id="user-year-of-study"></td>
								</tr>
								<tr>
									<td class="field-name">Gender :</td>
									<td class="field-value" id="user-gender"></td>
								</tr>
								<tr>
									<td class="field-name">Mobile No :</td>
									<td class="field-value" id="user-phone-number"></td>
								</tr>
							</table>
						</div>
						<div class="phone-number-message">
							Note:- Please update your mobile number if not correct.</br>
									<span id="update-number">Click here to update</span>
						</div>
					</div>
			</div>
			
		</section>
		<?php }?>
		<!-- PAGE OF COORDITORS AND CELL COMMITEE -->

<section class="page" id="container_coord" data-slide="7" data-stellar-background-ratio="0.3">
	<div id="coord">
		<div id="co_head">Co-Ordinators</div>
		<div id="co_table">
								
				<ul class="ch-grid">
					<li>Chief Student Coordinator</li>
					<li>
						<div class="ch-item">				
							<div class="ch-info">
								<div class="ch-info-front ch-img-1"></div>
								<div class="ch-info-back">
									<h3>HEAD</h3>
									<p><a href="https://www.facebook.com/dhananjay.me" target="_blank">Dhananjay Singh</a></p>
									<span>+91-9796-405080</span>
									<span>djsanj99@gmail.com</span>
								</div>	
							</div>
						</div>
					</li>
					
					<ul style="float: left; margin: 0;">
						<li>Technical Event Coordinator</li>
						<li>
							<div class="ch-item">				
								<div class="ch-info">
									<div class="ch-info-front ch-img-2"></div>
									<div class="ch-info-back">
										<h3>Tech. Head</h3>
										<p><a href="https://www.facebook.com/I.am.d.Rishabh" target="_blank"> Rishabh Shukla</a></p>
										<span>+91-9086-250987</span>
										<span>rishy.s13@gmail.com</span>
									</div>	
								</div>
							</div>
						</li>
					</ul>	
				</ul>

				<ul class="ch-grid">
					<li>Public Relations</li>
					<li>
						<div class="ch-item">				
							<div class="ch-info">
								<div class="ch-info-front ch-img-3"></div>
								<div class="ch-info-back">
									<h3>Public</h3>
									<p><a href="https://www.facebook.com/profile.php?id=100004947096093" target="_blank"> Megha Sharma</a></p>
									<span>+91-9086-118089</span>
									<span>meghas19@yahoo.co.in</span>
								</div>	
							</div>
						</div>
					</li>
					<ul style="float: left; margin: 0;">
						<li>Media cell</li>
						<li>
							<div class="ch-item">				
								<div class="ch-info">
									<div class="ch-info-front ch-img-30"></div>
									<div class="ch-info-back">
										<h3>Media</h3>
										<p><a href="https://www.facebook.com/kritika.sangra" target="_blank">Kritika Sangra</a></p>
										<span></span>
										<span>2011eec83@smvdu.ac.in</span>
									</div>	
								</div>
							</div>
						</li>
					</ul>	
					
				</ul>
				<ul class="ch-grid">
					<li>Sponsorship Cell</li>
					<li>
						<div class="ch-item">				
							<div class="ch-info">
								<div class="ch-info-front ch-img-4"></div>
								<div class="ch-info-back">
									<h3>Sponsorship</h3>
									<p><a href="https://www.facebook.com/gkpgauravsingh" target="_blank">Gaurav Singh</a></p>
									<span>+91-9796-446317</span>
									<span>2011eec54@gmail.com</span>
								</div>	
							</div>
						</div>
					</li>
					
					<li>
						<div class="ch-item">				
							<div class="ch-info">
								<div class="ch-info-front ch-img-5"></div>
								<div class="ch-info-back">
									<h3>Sponsorship</h3>
									<p><a href="https://www.facebook.com/navjotsingh.sasan" target="_blank">Navjot Singh</a></p>
									<span>+91-9622-074246</span>
									<span>navvi.singh4@gmail.com</span>
								</div>	
							</div>
						</div>
					</li>
					
				</ul>

				<ul class="ch-grid">
					<li>Graphics And Design</li>
					<li>
						<div class="ch-item">				
							<div class="ch-info">
								<div class="ch-info-front ch-img-9"></div>
								<div class="ch-info-back">
									
									<h3>Design</h3>
									<p><a href="https://www.facebook.com/maurya.aakash1" target="_blank">Aakash Maurya</a></p>
									<span>maurya.aakash1@gmail.com</span>
									<span>+91-9797602140</span>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item">				
							<div class="ch-info">
								<div class="ch-info-front ch-img-10"></div>
								<div class="ch-info-back">
									<h3>Design</h3>
									<p><a href="https://www.facebook.com/raza2393" target="_blank">Ahmed Raza</a></p>
									<span>raza2393@gmail.com</span><br>
									<span>+91-9796-288428</span>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item">				
							<div class="ch-info">
								<div class="ch-info-front ch-img-11"></div>
								<div class="ch-info-back">
									<h3>Design</h3>
									<p><a href="https://www.facebook.com/pankajpandey890" target="_blank">Pankaj Pandey</a></p>
									<span>pankajpandey890@gmail.com</span>
									<span>+91-9797-519217</span>
									
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item">				
							<div class="ch-info">
								<div class="ch-info-front ch-img-12"></div>
								<div class="ch-info-back">
									<h3>Graphics</h3>
									<p><a href="https://www.facebook.com/nikhil.kamtam" target="_blank">Nikhil Kamtam</a></p>
									<span> nikhilsascent@gmail.com</span><br>
									<span>+91-9797-517443</span>
									
								</div>	
							</div>
						</div>
					</li>
				</ul>

				<ul class="ch-grid">
					<li>Web Team</li>
					<li>
						<div class="ch-item">				
							<div class="ch-info">
								<div class="ch-info-front ch-img-6"></div>
								<div class="ch-info-back">
									<h3>Front-End</h3>
									<p><a href="https://www.facebook.com/sunnyLA.Gupta" target="_blank">Sunny Gupta</a></p>
									<span>sunnylautner4@gmail.com</span>
									<span>+91-9086-724946</span>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item">				
							<div class="ch-info">
								<div class="ch-info-front ch-img-2"></div>
								<div class="ch-info-back">
									<h3>Front-End</h3>
									<p><a href="https://www.facebook.com/I.am.d.Rishabh" target="_blank">Rishabh Shukla</a></p>
									<span>rishy.s13@gmail.com</span><br>
									<span>+91-9086-250987</span>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item">
							<div class="ch-info">
								<div class="ch-info-front ch-img-7"></div>
								<div class="ch-info-back">
									<h3>Back-End</h3>
									<p><a href="https://www.facebook.com/AKSHAYPRATAP007" target="_blank" style="font-size: 10px" >Akshay Pratap Singh</a></p>
									<span>pratapakshay0@gmail.com</span>
									<span>+91-9086-250656</span>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item">
							<div class="ch-info">
								<div class="ch-info-front ch-img-8"></div>
								<div class="ch-info-back">
									<h3>Web Developer</h3>
									<p><a href="https://ww.facebook.com/parthpankajtiwary" target="_blank" style="font-size: 12px">Parth Pankaj</a></p>
									<span>parthpankajtiwary@gmail.com</span>
									<span>+91-9797-521874</span>
								</div>	
							</div>

						</div>
					</li>
							

						<ul class="ch-grid">
							<li>Committee Incharges</li>
							<li>
								<div class="ch-item">				
									<div class="ch-info">
										<div class="ch-info-front ch-img-13"></div>
										<div class="ch-info-back">
											<h3>Cultural</h3>
											<p><a href="https://www.facebook.com/ashish.sharma.775823" target="_blank"> Ashish Mansotra</a></p>
											<span></span>
											<span>+91-9906-284534</span>
										</div>	
									</div>

								</div>
							</li>
							<li>
								<div class="ch-item">				
									<div class="ch-info">
										<div class="ch-info-front ch-img-14"></div>
										<div class="ch-info-back">
											<h3>Publicity</h3>
											<p><a href="https://www.facebook.com/tribh619" target="_blank">Tribhuvan Khajuria</a></p>
											<span></span>
											<span>+91-9796-063005</span>
										</div>	
									</div>
								</div>
							</li>
							<li>
								<div class="ch-item">
									<div class="ch-info">
										<div class="ch-info-front ch-img-15"></div>
										<div class="ch-info-back">
											<h3 style="font-size:10px;">Documentation</h3>
											<p><a href="https://www.facebook.com/akshay.bhat.31" target="_blank">Akshay Bhat</a></p>
											<span></span>
											<span></span>
										</div>
									</div>
								</div>
							</li>
						
							<li>
								<div class="ch-item">
									<div class="ch-info">
										<div class="ch-info-front ch-img-16"></div>
										<div class="ch-info-back">
											<h3>Management</h3>
											<p><a href="https://www.facebook.com/ranvijay.singh.750983" target="_blank">Ranvijay Singh</a></p>
											<span></span>
											<span>+91-9796-445012</span>
										</div>
									</div>
								</div>
							</li>
						</ul>
						<ul class="ch-grid">
							<li></li>
							<li>
								<div class="ch-item">
									<div class="ch-info">
										<div class="ch-info-front ch-img-17"></div>
										<div class="ch-info-back">
											<h3>Protocol</h3>
											<p><a href="https://www.facebook.com/0SUPERNOVA0" target="_blank">Sahil Khushlani</a></p>
											<span></span>
											<span>+ 91-9622-356797</span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="ch-item">
									<div class="ch-info">
										<div class="ch-info-front ch-img-18"></div>
										<div class="ch-info-back">
											<h3>Logistic</h3>
											<p><a href="https://www.facebook.com/dharmesh.kr2011" target="_blank">Dharmesh Kumar</a></p>
											<span></span>
											<span>+91-9419-909212</span>
										</div>
									</div>

								</div>
							</li>
						</ul>

						<ul class="ch-grid">
							<li>Branch Incharges</li>
							<li>
								<div class="ch-item">
									<div class="ch-info">
										<div class="ch-info-front ch-img-19"></div>
										<div class="ch-info-back">
											<h3>Electronics</h3>
											<p><a href="https://www.facebook.com/" target="_blank">Tanish Slathia</a></p>
											<span></span>
											<span>+ 91-9086-261152</span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="ch-item">
									<div class="ch-info">
										<div class="ch-info-front ch-img-20"></div>
										<div class="ch-info-back">
											<h3>Electronics</h3>
											<p><a href="https://www.facebook.com/mansi.maheshwari.31" target="_blank">Mansi Maheshwari</a></p>
											<span></span>
											<span>+91-9796-290098</span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="ch-item">
									<div class="ch-info">
										<div class="ch-info-front ch-img-21"></div>
										<div class="ch-info-back">
											<h3>Mechanical</h3>
											<p><a href="https://www.facebook.com/nraman01" target="_blank">Nishant Raman</a></p>
											<span></span>
											<span>+ 91-9697-569775</span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="ch-item">
									<div class="ch-info">
										<div class="ch-info-front ch-img-22"></div>
										<div class="ch-info-back">
											<h3>Mechanical</h3>
											<p><a href="https://www.facebook.com/emwfreak" target="_blank">Monica</a></p>
											<span></span>
											<span></span>
										</div>
									</div>
								</div>
							</li>
						</ul>
						<ul class="ch-grid">
							<li></li>
							<li>
								<div class="ch-item">
									<div class="ch-info">
										<div class="ch-info-front ch-img-6"></div>
										<div class="ch-info-back">
											<h3>Computer Sc.</h3>
											<p><a href="https://www.facebook.com/sunnyLA.Gupta" target="_blank">Sunny Gupta</a></p>
											<span></span>
											<span>+ 91-9086-724946</span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="ch-item">
									<div class="ch-info">
										<div class="ch-info-front ch-img-24"></div>
										<div class="ch-info-back">
											<h3>Computer Sc.</h3>
											<p><a href="https://www.facebook.com/shreya.gupta12" target="_blank">Shreya Gupta</a></p>
											<span></span>
											<span></span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="ch-item">
									<div class="ch-info">
										<div class="ch-info-front ch-img-25"></div>
										<div class="ch-info-back">
											<h3>Bio-Tech</h3>
											<p><a href="https://www.facebook.com/lavkush.raj.3" target="_blank">Lav Kush</a></p>
											<span></span>
											<span>+ 91-9419-873842</span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="ch-item">
									<div class="ch-info">
										<div class="ch-info-front ch-img-26"></div>
										<div class="ch-info-back">
											<h3>Bio-Tech</h3>
											<p><a href="https://www.facebook.com/shamli.shagotra" target="_blank">Shamli Shagotra</a></p>
											<span></span>
											<span></span>
										</div>
									</div>
								</div>
							</li>
						</ul>
						<ul class="ch-grid">	
							<li></li>						
							<li>
								<div class="ch-item">
									<div class="ch-info">
										<div class="ch-info-front ch-img-28"></div>
										<div class="ch-info-back">
											<h3>Architecture</h3>
											<p><a href="https://www.facebook.com/puneetmehta2802" target="_blank">Puneet Mehta</a></p>
											<span></span>
											<span>+91-9419-351611</span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="ch-item">
									<div class="ch-info">
										<div class="ch-info-front ch-img-29"></div>
										<div class="ch-info-back">
											<h3>Architecture</h3>
											<p><a href="https://www.facebook.com/arunima.bhowmik" target="_blank">Arunima Bhowmick</a></p>
											<span></span>
											<span>+ 91-9596-997279</span>
										</div>
									</div>
								</div>
							</li>
							
						</ul>


						
				</div>
				
			</div>
			
		</section>

		<!-- container Contact -->

        <section class="page" id="container_contact" data-slide="8">	

			<div class="contact">
				<div id="cont0">
					<div id="c7">
						CONTACTS
					</div>
				</div>


				<div class="assym_black" id="cont1">
					<div id="online">
						<h3>Online Contacts</h3>
						<a href="https://www.facebook.com/titiksha2k13" target="_blank" style="color: #092241; text-decoration: none;"><img src="img/fb_black.png">Facebook Page</a>
						<p>Or Drop us a mail on :</p>
						<i style="color: #2B3752">titiksha.team@gmail.com</i>
					</div>
				</div>

				<div class="assym_black" id="cont2">
					<div id="chief">

						<h4>Chief Student Coordinator</h4>
						<p class="name">Dhananjay Singh</p>
						<p class="tel">+91-9796-405080</p>
						<p clas="mail" >djsanj99@gmail.com</p>

					</div>
				</div>

				<div class="assym_black" id="cont3">
					<div id="web">

						<h4>Web Development Team</h4>
						<p class="name">* Sunny Gupta</p>
						<p class="tel">+91-9086-724946</p>
						<p class="name">* Rishabh Shukla</p>
						<p class="tel">+91-9086-250987</p>

						<p class="name">* Akshay Pratap Singh</p>
						<p class="tel">+91-9086-260656</p>
						<p class="name">* Parth Pankaj Tiwary</p>
						<p class="tel">+91-9797-521874</p>

					</div>					
				</div>

				<div class="assym_black" id="cont4">
					<div id="tech">
						<h4>Technical Event Coordinator</h4>

						<p class="name">Rishabh Shukla</p>
						<p class="tel">+91-9086-250987</p>
						<p class="mail" >rishy.s13@gmail.com</pre>

					</div>					
				</div>

				<div class="assym_black" id="cont5">
					<div id="design">
						<h4>SponsorShip Coordinator</h4>
						<p class="name">Navjot Sasan</p>
						<p class="tel">91-9622-074246</p>
						<p class="mail">navvi.singh4@gmail.com</p><br>
						<p class="name">Gaurav Singh</s>
						<p class="tel">+91-9796-446317 </p>
						<p class="mail">2011eec54@gmail.com</p>
						

					</div>					
				</div>

				<div class="assym_black" id="cont6">
					<div id="media">
						
						<h4>Poster Designer</h4>
						<p class="name">Aakash Maurya</p>
						<p class="tel">+91-9797602140</p>
						<p class="mail" >maurya.aakash1@gmail.com</p>
						<p class="name">Ahmed Raza</p>
						<p class="tel">+91-9796-288428</p>
						<p class="mail" >raza2393@gmail.com</p>
						<p class="name">Pankaj Pandey</p>
						<p class="tel">+91-9797-519217</p>
						<p class="mail" >pankajpandey890@gmail.com</p>
						


					</div>
				</div>

				<div class="assym_black" id="cont7">
					
					<div id="faculty">
						<h4>Chief Faculty Coordinator</h4>
						<p class="name">* Dr. Ankush Anand</p>
						<p class="mail">ankush.anand@smvdu.ac.in</p><br/>
						<h4>Branch Faculty Coordinators</h4>
						<p class="name">- A. Prof. Irfan-ul-Haq</p>
						<p class="mail" >haqmechanical@gmail.com</p>
						<p class="name">- Lect. Abhimanyu Sharma </p>
						<p class="mail" >abhimanyu.sharma@smvdu.ac.in </p>
						<p class="name">- A. Prof. Sudesh Kumar</p>
						<p class="mail" >sudesh.Bhadu@smvdu.ac.in  </p>
						<p class="name">- A. Prof. R.K. Jha</p>
						<p class="mail" >rakesh.jha@smvdu.ac.in</p>
						<p class="name">- Dr. Swarkar Sharma</p>
						<p class="mail" ></p>
						

					</div>
				</div>

				<div class="assym_black" id="cont8">
					<div id="discipline">
						<h4>Public Relations </h4>

						<p class="name">Megha Sharma</p>
						<p class="tel">+91-9086-118089</p>
						<p class="mail">meghas19@yahoo.co.in</p>
					</div>
					
				</div>
				
			</div>
		</section><!-- /container -->	

		<section class="page" id="container_reach" data-slide="9" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="-7250">
			<div id="map_smvdu">
				<br>
				<h3 style="margin: 0px; text-align: center; color: #ccc;">How To Reach</h3><br>			
				<div id="reach_info">Shri Mata Vaishno Devi University is situated 40 Km North of Jammu in the scenic surroundings of  Trikuta foothills,
				 near the holy town of Katra in District -Reasi.
				 The Campus is situated close to the beautiful tourist resort of Jhajjar - Kotli.
				<ul>
					<li>Option 1:  Catch Taxi Directly from Ralway Station / Bus Stand / Airport directly to University Campus (Distance approximately 45 Kms.)</li>
					<li>Option 2:  Board bus from Jammu Bus Stand/Railyway Station  plying to Udhampur/Katra but alight at Domel (Approx. 39 Kms.).  Board Mini Bus fom Domel to University (Approx. 6 Kms.)</li>
				</ul>	
				<div style="width:700px;height:350px; position:relative; margin: 40px auto; ">
					<iframe width="625" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Shri+Mata+Vaishno+Devi+University,+Reasi&amp;aq=0&amp;oq=smvdu&amp;sll=20.983588,82.752628&amp;sspn=47.832907,82.265625&amp;ie=UTF8&amp;hq=Shri+Mata+Vaishno+Devi+University,+Reasi&amp;t=m&amp;ll=32.941232,74.953666&amp;spn=0.012606,0.026822&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Shri+Mata+Vaishno+Devi+University,+Reasi&amp;aq=0&amp;oq=smvdu&amp;sll=20.983588,82.752628&amp;sspn=47.832907,82.265625&amp;ie=UTF8&amp;hq=Shri+Mata+Vaishno+Devi+University,+Reasi&amp;t=m&amp;ll=32.941232,74.953666&amp;spn=0.012606,0.026822&amp;z=15&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
				</div>	

			<footer>
				<div id="copyright">&copy Titiksha, SMVDU</div>
				<div id="openSource">This Website is Developed using open source platform on Github. Play with the code at <a href="https://github.com/smvdu/Titiksha-website" target="_blank"><img src="img/icomoon/github.png" /> <span>Github - Titiksha Website</span></a></div>
				<div id="developedBy">Developed and Maintained By: <a href="https://github.com/smvdu/Titiksha-website/graphs/contributors" target="_blank">Titiksha Web Development Team</a></div>
				
			</footer>				
			
		</section>

		 <!-- JavaScript includes -->
		  
        
        <script type="text/javascript" src="js/jquery.countdown.js"></script>
        <script src="js/classie.js"></script>
		<script src="js/modalEffects.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/functions.js"></script>
        <script type="text/javascript" src="js/main.js"></script>   
        <script type="text/javascript" src="js/stellar.js" ></script>
        <script type="text/javascript" src="js/waypoints.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>	
        <script type="text/javascript" src="js/PxLoader.js"></script>
        <script type="text/javascript" src="js/PxLoaderImage.js"></script>
        <script type="text/javascript" src="js/jquery.parallax.min.js"></script>
        <script type="text/javascript" src="js/sponsor.js"></script>
        <script type="text/javascript" src="js/colorfont.js" ></script>
		<script type="text/javascript" src="js/jquery.gridrotator.js"></script>
		<script type="text/javascript">	
			$(function() {
			
				$( '#ri-grid' ).gridrotator( {
					rows : 4,
					columns : 8,
					maxStep : 2,
					interval : 2000,
					w1024 : {
						rows : 5,
						columns : 6
					},
					w768 : {
						rows : 5,
						columns : 5
					},
					w480 : {
						rows : 6,
						columns : 4
					},
					w320 : {
						rows : 7,
						columns : 4
					},
					w240 : {
						rows : 7,
						columns : 3
					},
				} );
			
			});
		</script>

		
		
		

		<script type="text/javascript">

			$(document).ready(function(){

				//requests javascript files using AJAX
				$.getScript("js/jquery.lettering.js", function(){
							$(".os-phrases, .loader, .covers").fadeIn();
							$("#os-phrases > h3").lettering('words').children("span").lettering().children("span").lettering(); 
				});				

				//preloader for images
				var loader = new PxLoader();

				for(var i= 1; i < 35; i++)
					loader.addImage("img/"+i+".jpg");

				loader.addImage("img/41.jpg");
				loader.addImage("img/42.jpg");

				for(var i = 1; i < 32; i++)
					loader.addImage("img/gallery/"+i+".jpg");
				
				for(var i = 37; i < 41; i++)
					loader.addImage("img/"+i+".png");

				for(var i = 1; i < 10; i++)
					loader.addImage("img/sponsors/"+i+".png");

	        	loader.addCompletionListener(function() {
	        		$("#progress , #loading").fadeOut(500, function(){
	        			$('#enter').fadeIn(700);
	        		});
	        		
	        		
	        	});

	        	loader.addProgressListener(function(e) {
	        		var percent = Math.round(e.completedCount / e.totalCount * 100);
	        		$("#progress").html(percent+"%");

	           	});

	        	loader.start();


				//removes the loader page
				$('#enter').on("click", function(){
					$("#letters").addClass("moveLeft");
					$("#right-part").addClass("moveRight");	
					$(this).fadeOut(200);

					$(".page").fadeIn(1200, function(){
						$("#container").remove();
						$("#main_nav").fadeIn();
						$.waypoints('refresh');						
					});

				});

	        });
			(function(){
				if(loggedIn=="true"){
					pullUserPersonelData();
				}
			})();

		</script>



		<!-- classie.js by @desandro: https://github.com/desandro/classie -->
		
				
		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
        <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-44697804-1', 'smvdu.net.in');
		  ga('send', 'pageview');

		</script>-->
	</body>
</html>