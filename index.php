<?php 
  /**
  *
  * Titiksha official website
  * http://github.com/smvdu/titiksha
  *
  */

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

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
       	
	</head>
	<body>
	<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="small_screen">Your Screen Size is too small to access this Website.</div>

        <nav id="main_nav">
        	<ul>
        		<li data-slide="1"></li>
        		<li data-slide="2"></li>
        		<li data-slide="3"></li>
        		<li data-slide="4"></li>
        		<li data-slide="5"></li>
        		<li data-slide="6"></li>
        	</ul>

        	<div data-slide="1"></div>
        	<div data-slide="2"></div>
        	<div data-slide="3"></div>
        	<div data-slide="4"></div>
        	<div data-slide="5"></div>
        	<div data-slide="6"></div>
        	
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
                            <span class="ca-icon" id="heart">P</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Sponsors</h2>
                                <h3 class="ca-sub">Our Trusty Believer's</h3>
                            </div>
                        </a>
                    </li>
                    <li data-slide="5">
                        <a href="#register">
                            <span class="ca-icon">U</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Register</h2>
                                <h3 class="ca-sub">Register and get started</h3>
                            </div>
                        </a>
                    </li>
                    <li data-slide="6">
                        <a href="#container_contact">
                            <span class="ca-icon">B</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Contacts</h2>
                                <h3 class="ca-sub">24/7 for your support</h3>
                            </div>
                        </a>
                    </li>
                </ul>
                <div id="countdown"></div>
                <p id="note"></p>
                
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
			<div id="event">
				<div class="branch" id="mega">
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
											<button class="md-register register">Register</button>
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
											and final round. In which they  will have to debate on topics assigned to them.
											There will be two students assigned for one topic , one as ‘for’ side and other ‘against’ side.
											The language of debate could be either “English” or “Hindi” .  but  both ‘for’ and ‘against’
											 participant will have to use same language.</p>
											 <p>The topic  of debate will be published one week prior to event.</p>
											<br><br>
											<ul>
												<li><strong>Event Co-ordinator :</strong> Shubham Tiwari</li>
												<li><strong>Contact :</strong> +91-9796-289195</li>
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
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>ROBO - MATRIX</h3>
										<div>
											<p>There  is  a  complete  matrix  of  Robotic  events,  each  one
												focusing on introducing a particular trait into the robot.</p>
											<ul>
												<li>1. Robot Adventure</li>
												<li>2. Robot Basketball</li>
												<li>3. Robot Race</li>
												<li>4. Robot-Arena/war</li>
												<li>5. Line-Follower Robot</li>
												<li>6. Robot Soccer</li>
											</ul>
												<p>The  robot  winning  in  max  categories  of  Robo­matrix  will  be  awarded
													as the “BEST ROBOT”. </p>
													 <br>


											<ul>
												<li><strong>Event Co-ordinator :</strong> Vipin Tripathi</li>
												<li><strong>Contact :</strong> +91-9086-252113</li>
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
											<button class="md-register register">Register</button>
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
												<li><strong>Event Co-ordinator :</strong> Ashish Singh</li>
												<li><strong>Contact :</strong> +91-9596-997294</li>
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
											<button class="md-register register">Register</button>
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
												<li><strong>Event Co-ordinator :</strong> Ashish Kumar Singh</li>
												<li><strong>Contact :</strong> +91-9596-997294</li>
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
											<button class="md-register register">Register</button>
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
												<li><strong>Event Co-ordinator :</strong> Daud Shareef | Navin Ray</li>
												<li><strong>Contact :</strong>       +91-9697-679928    |     +91-9086-251103</li>
												
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
											<button class="md-register register">Register</button>
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
											<button class="md-register register">Register</button>
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
											
											<p><strong>TIME </strong>- Round 1: 20 min. <br>
											Round 2: 30 min.</p>
											
											<br><br>
											
											<ul>
												<li><strong>Event Co-ordinator : </strong>Mohan Dutt Parashar</li>
												<li><strong>Contact :</strong> +91-9086-240-290</li>
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
											<button class="md-register register">Register</button>
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
									<span class="icon-eye"><em>KILL-EM</em></span>
									<p>Troubleshoot PC and Show you are Computer Guy</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-50">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>KILL-EM</h3>
										<div>
											<p>This  event  is  similar  to  the  "Troubleshooting"  event  of  the
												titiksha 2k12. In  this  event, the  participants  will  be  given  6­8  problems
												of which 5 will easier and others will be little tough.
												The  participants  have  to  solve  and  trooubleshoot  all  the  problems  or
												most of them and they will be ranked accordingly.</p>
											<br><br>
										<ul>
											<li><strong>Event Co-ordinator : </strong>Ravi Prakash Giri</li>
											<li><strong>Contact :</strong> +91-9469-443565</li>
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
											<button class="md-register register">Register</button>
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
											
											<br><br>
											<ul>
												<li><strong>Event Co-ordinator : </strong>Prateek Sharma</li>
												<li><strong>Contact :</strong> +91-9086-120891</li>
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
											<button class="md-register register">Register</button>
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
												<li><strong>Event Co-ordinator : </strong>Aman Kumar </li>
												<li><strong>Contact :</strong> +91-9697-569-168</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-11">
									<span class="icon-eye"><em>Online Treasure Hunt</em></span>
									<p>Search The Treasure Online Using Your Intelligent Brain</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-11">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>Online Treasure Hunt</h3>
										<div>
											<p>It  will  be  a  unique race  against  time​
											game  exclusively  devoted  to
											testing your agility and numerical skills.</p>
											<p>Question's  Will  Be  based  on  basic  programming,  IQ  and  logical
											reasoning,and are bound to test the efficiency of your grey cells.</p>
											<p><em><strong>Details</strong> </em>: <br>
 												It  will  have  various  level  of  difficulties  in  the  form  of  various  Puzzles
												And Multimedia. <br>
												U  have to Complete First Level to go to the Next Level.Student's From
												Every Year Can Participate.</p>
											<p><strong>Rules</strong> :
												1. You have to register with a unique id and password.<br>
												2. Only One Chance is allowed for answering a question.<br>
												3. Each Team Will be allotted a computer.
											<br>	<strong>Team </strong> : ( 1 - 2 Member )
											</p>

											<br><br>
											<ul>
												<li><strong>Event Co-ordinator : </strong>Aditya Agraval</li>
												<li><strong>Contact :</strong> +91-9797-520203</li>
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
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>Binary Battles</h3>
										<div>
											<p>This  will  be  a  very  straight­forward  programming  event,  wherein
											certain  algorithmic  challanges  will  be  given  to  participants  and  they
											can solve it using C/C++ and Java.
											Event  will  be  divided  into  two  stages  and  after  clearing  the  first  stage
											participants will be promoted to next one.</p>
											<br>
											<p><strong>Team</strong> : 2 Member</p>
											
											<br><br>
											<ul>
												<li><strong>Event Co-ordinator : </strong>Akshay Pratap Singh</li>
												<li><strong>Contact :</strong> +91-9086250656</li>
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
											<button class="md-register register">Register</button>
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
												<li><strong>Event Co-ordinator : </strong>Sanjeev</li>
												<li><strong>Contact :</strong> +91-8716-058339</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-14">
									<span class="icon-eye"> <em>CONCLAVE</em></span>
									<p>Share Your ideas on Topics related to Mechnical Engineering</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-14">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3> CONCLAVE</h3>
										<div>
											<p>If  your  mind  could  be  a  cupola  of new ideas and thoughts, then we are
												providing  you  a  platform  to  express  your  views  on  different  topics
												related  to  mechanical  engineering.  Your  idea  can  do  technical  reforms
												which  can  make  this  world  a  better  place  to  live  in.  so  pump  in  your
												adrenaline,  get ready to “ROAR” and let the whole world see the might
												of your ideas.</p>
											<ul>
												<li>Round  1 :  Abstract  Submission.  The  abstract  could  be  submitted either in .pdf  or .doc format.</li>
												<li>Round  2­ : Presentation  Round:  The  selected  candidates  have  to  give
												Power­point  presentation.  They  should  also  bring  with  them  a  hard
												copy  for  explaining  their  presentation  consisting  of  maximum  15
												pages including various data, diagram etc.</li>
											</ul>
											
											<br><br>
											<ul>
												<li><strong>Event Co-ordinator : </strong>Vikas Singla</li>
												<li><strong>Contact :</strong> +91-9086-118374</li>
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
											<button class="md-register register">Register</button>
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
												<li><strong>Event Co-ordinator : </strong>Saddam Zoya</li>
												<!-- <li><strong>Contact :</strong> +91-9086-118374</li> -->
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
											<button class="md-register register">Register</button>
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
												<li><strong>Event Co-ordinator : </strong>Manish Paliwal</li>
												<!-- <li><strong>Contact :</strong> +91-</li> -->
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
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>CLUEDO</h3>
										<div>
											<p>This  event  is  like  a  clue  finding  event,  the  participants  are  to  be
												divided  in  group  of  two.  Each  group  will  be  provided  with  a  clue  the
												participants  have  to  go  to  the  place  indicated  by  the  clue,  where  they
												will  be  provided  with  a question paper and clue for the next place. The
												participants  have  to  submit  the  solved  paper  to  organizers  present  at
												that  place.  Each  group has to solve such 5 question paper consisting of
												10  questions  in  limited  time  period  the  groups  will  be  evaluated  on
												basis of marks and time taken by them to complete the questions.</p>
											<br><br>
											<ul>
												<li><strong>Event Co-ordinator : </strong>Vivek Mishra</li>
												<li><strong>Contact :</strong> +91-9018-876131</li>
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
											<button class="md-register register">Register</button>
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
											<br><br>
											<ul>
												<li><strong>Event Co-ordinator : </strong>Rajesh Baranwal</li>
												<!-- <li><strong>Contact :</strong> +91-</li> -->
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
											<button class="md-register register">Register</button>
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
											<br><br>
											<ul>
												<li><strong>Event Co-ordinator : </strong>Anand</li>
												<li><strong>Contact :</strong> +91-9906-007341</li>
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
									<span class="icon-eye">WAVEMANIA</span>

									<p>Check whether you have the basic knowledge of electrical components.</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-19">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
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


												<li><strong>Event Co-ordinator : </strong>Suraj Gupta</li>
												<li><strong>Contact : </strong>+91-9596913682</li>


											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">

								<div class="md-trigger" data-modal="modal-20">
									<span class="icon-eye">ELECTRO-QUIZ</span>
									<p>A quiz regarding lab instruments and related to technology.</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-20">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>ELECTRO-QUIZ</h3>
										<div>
											<p>Questions  will  be  based  on  knowledge  regarding  with  lab  instruments and  related  to  technology.  The  quiz  will  be  held  in  two  <strong>rounds</strong>. Those
												qualifying  the  preliminary  round  will be permitted to participate in the
												final.</p>
											<br><br>
											<ul>


												<li><strong>Event co-ordinator: </strong> Brijesh Kumar</li>
												<li><strong>Contact:</strong> +91-9086255280</li> 
											

										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">

								<div class="md-trigger" data-modal="modal-21">
									<span class="icon-eye">ELECTRO-AVATAR</span>

									<p>This  event  is  a  blend  of  science  and  imagination.  Design  your  own
										super  hero  and  win  prizes.</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-21">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>ELECTRO-AVATAR</h3>
										<div>
											<p>This  event  is  a  blend  of  <strong>science</strong>  and  <strong>imagination</strong>.  Design  your  own
												super  hero  and  win  prizes.  Participants  will  form  pairs,  and  they  have
												to  write  a fictitious short  story  based  on  the  picture  shown  to  them  at
												the  event  venue.
												The  top  participants  will  make  a  short  movie  on  their  superhero of the
												length  of  their  choice  and  the  best  video  would  be  shown  in  the
												Matrika Auditorium during the valedictory of Titiksha.</p>
											<br><br>
											<ul>


												<li><strong>Event co-ordinator: </strong> Ashish Singh</li>
												<li><strong>Contact: </strong> +91-9596997294</li>

											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">

								<div class="md-trigger" data-modal="modal-22">
									<span class="icon-eye">CIRCUIT-BUG</span>

									<p>An event for those obsessed with circuits, comprising of two rounds.</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-22">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
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


												<li><strong>Event co-ordinator: </strong> Munib Chauhan</li>
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
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>MICROCONTROLLER CODING</h3>
										<div>
											<p>Using  <strong>microprocessor/microcontroller</strong>  build  a  real  life  application
											(only software)</p>
											<br><br>
											<ul>


												<li><strong>Event co-ordinator: </strong> Munib Chauhan</li>
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
											<button class="md-register register">Register</button>
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


												<li><strong>Event co-ordinator: </strong> Danish</li>
												<li><strong>Contact: </strong> +91-9086255280</li>


											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							
							<div class="uc-container">

								<div class="md-trigger" data-modal="modal-55">
									<span class="icon-eye">ELECTRO TRADE</span>

									<p>Get your Technology knowledge checked here.</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-55">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>ELECTRO TRADE</h3>
										<div>
											<p>
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
											</p>
											
											<br><br>
											<ul>


												<li><strong>Event co-ordinator: </strong> Prayag Varshney</li>
												<li><strong>Contact: </strong> +91-9697992483</li>


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
											<button class="md-register register">Register</button>
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
												<li><strong>Event Co-ordinator : </strong>Anand upadhayay</li>
												<li><strong>Contact :</strong> +91- 9697-679672</li>

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
											<button class="md-register register">Register</button>
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

												<li><strong>Event Co-ordinator : </strong>Anuksha amla</li>
												<li><strong>Contact :</strong> +91-9797-517532</li>

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
											<button class="md-register register">Register</button>
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

												<li><strong>Event Co-ordinator : </strong>Shreya</li>
												<li><strong>Contact :</strong> +91- 9086-120809</li>

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
											<button class="md-register register">Register</button>
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

												<li><strong>Event Co-ordinator : </strong>Arpita</li>
												<li><strong>Contact :</strong> +91- 9018-718271 / 9796-424714</li>

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
											<button class="md-register register">Register</button>
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

												<li><strong>Event Co-ordinator : </strong>Arunima Bhowmick </li>
												<li><strong>Contact :</strong> +91-9596997279 / 9018397409</li>

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
											<button class="md-register register">Register</button>
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
												<li><strong>Event Co-ordinator : </strong>Damanjot Kaur</li>
												<li><strong>Contact :</strong> +91- 8283-835234</li>

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
											<button class="md-register register">Register</button>
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

												<li><strong>Event Co-ordinator : </strong>Puneet Mehta </li>
												<li><strong>Contact :</strong> +91-9419-351611</li>

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
											<button class="md-register register">Register</button>
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
												<li><strong>Event Co-ordinator : </strong>Himanshu Bharanwal</li>
												<li><strong>Contact :</strong> +91-- 8716-055931</li>

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
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>BIO-TECH QUIZ</h3>
										<div>
											<p>Students  will  be  asked  various  questions  related  to  new  inventions  in
												bio­tech and other aspects of <strong>bio-technology</strong>.
											</p>
											<br><br>
											<ul>
												<li><strong>Event co-ordinator: </strong> Ishan tiwari  </li>
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
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>SPELL-CORRECTLY</h3>
										<div>
											<p>Students  are  asked  to  write  down  names  of  <strong>micro­organism</strong>  the  one
												who write the most of the name correct wins.</p>
											<br><br>
											<ul>
												<li><strong>Event co-ordinator: </strong> Shamli Shagotra</li>
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
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>JUMBLE-WORDS</h3>
										<div>
											<p>Lots  of  name  related  to  bio  tech  will  be  <strong>jumbled</strong>  up  the  one who finds

												the most wins.</p>
											<br><br>
											<ul>
												<li><strong>Event co-ordinator: </strong> Sudhanshu Raj Sagar</li>
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
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>COMPLEMENTATION</h3>
										<div>
											<p>You  have  to  complete  the  sequence  of  <strong>DNA</strong>  by  making  their
												complement of the base pairs <strong>(ATGC)</strong>.
												You have to make the sequence as fast as possible
												Those  who  will  finish  it  first  will  be  the  winner.</p>
											<br><br>
											<ul>


												<li><strong>Event co-ordinator: </strong> Aman Sharma</li>
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
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>SHOW YOUR MEMORY</h3>
										<div>
											<p><strong>Visuals</strong>  will  be  displayed  for  few  seconds
												to  the  contestants.  Contestants  have  to  recall  the  different  names  they
												have seen in the visuals.</p>
											<br><br>
											<ul>


												<li><strong>Event co-ordinator: </strong> Lav Kush Raj </li>
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
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>STRUCTURE MODELLING</h3>
										<div>
											<p>Different  <strong>compounds</strong>  or  <strong>molecules</strong>
												structures  will  be  shown  to  the  contestants  for  some  time  they  will  be
												provided  with  the  tools  to  make  the  <strong>3d</strong>  structure  of  the  shown molecule.</p>
											<br><br>
											<ul>
												<li><strong>Event co-ordinator: </strong> Poonam Choudhary</li>
												<li><strong>Contact: </strong> +91-9596855658</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							
							
						</div><!-- / grid -->
					</div>
				</div>	
			</div>
			
		</section> <!-- events END -->

		
		<!-- sponsers page === -->
		
		<section class="page" id="container_sponser" data-slide="4">
			<div id="sponsor_page">
				<div id="spon_head">
					<span>Our Previous Sponsors</span>
				</div>				

				<?php

// Each sponsor is an element of the $sponsors array:


$sponsors = array(
	array('reebok','Reebok is a producer of athletic shoes, clothing, and accessories.','http://www.reebok.com/'),
	array('jkbank','J&K Bank functions as a universal bank in Jammu & Kashmir and as a specialised bank in the rest of the country.','http://www.jkbank.net/'),
	array('tcs','TCS is a leader in the global marketplace and among the top 10 technology firms in the world.','http://www.tcs.com/'),
	array('doordarshan','The backbone of Indian entertainment and news industry. ','http://www.ddindia.gov.in/'),
	array('kcresidency','K.C. Residency is a Landmark in Jammu,located at Residency Road of Jammu in Jammu & Kashmir state.','http://www.kcresidency.com/'),
	array('jammulinks','The virtual search engine for Jammu & Kashmir','http://www.jammulinks.com/'),
	array('redhat','Red Hat, Inc. is an American software company that is engaged in providing open-source software products.','http://www.redhat.com/'),
	array('aircel','Aircel group is an Indian mobile network operator headquartered in Chennai, which offers voice & data services.','http://www.aircel.com/'),
	array('tata','Tata Teleservices Limited is an Indian broadband and telecommunications service provider based in Mumbai, India. .','http://www.tataindicom.com/'),
	array('wipro','Wipro Ltd. is an Indian information technology consulting and outsourcing service company located in Bangalore, India.','http://www.wipro.com/'),

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

				    <div id="spon_cord">
				    	<h3>Sponsorship Co-ordinator</h3>
				    	<div id="co_left">
					    	<p>Navjot Sasan</p>
					    	<p>*********@gmail.com</p>
					    	<span style="color: #000;">+91-1413245252</span>
				    	</div>
				    	<div id="co_right">
					    	<p>Gaurav Singh</p>
					    	<p>abc#gmail.com</p>
					    	<span style="color: #000;">+91-9796-446317</span>
				    	</div>
				    </div>

				    <div id="spon_brochure">
				    	<a style="color: #C6DAD6; text-decoration : underline;" target="_blank" href="https://docs.google.com/file/d/0B5u8hNVpPKnhSDRGRmZCX1VpcVE/edit?usp=sharing" >Sponsorship Brochure </a>
				    	<div id="spon_query">
				    		<p>For Sponshorship Queries Contact :</p>
				    		<p>Gaurav Singh</p>
					    	<p>2011eec54@smvdu.ac.in</p>
					    	<span style="color: #42DA97;">+91-9796-446317</span>
				    	</div>
				    	
				    </div>

				</div>

		</section>	
		<!-- REGITRATION PAGE -->

		<section class="page" id="register" data-slide="5">
		<div class="register_form">
			
			<div id="form">
				<div id="reg_head">
					<span>JOIN TITIKSHA</span`>
				</div>	
				<div class="msg-Box" style="display:none;">
					<div class="msg-close">X</div>
					<div class="msg-content"></div>
				</div>
				<div class="md-overlay"></div><!-- the overlay element -->
				<form id="reg_form" name="reg_form" action="" method="post"  autocomplete="off">
					<table>
						<tbody>
							<tr>
								<th>Name :</th>
								<td>
									<span><img src="img/icomoon/user.png" /></span>
									<input name="name" type="text" size="30" maxlength="35" autocomplete="off" placeholder="Full Name"/>
								</td>
								<td></td>
							</tr>
							<tr>
								<th>Email :</th>
								<td>

									<span><img src="img/icomoon/mail.png" /></span>
									<input name="email" type="email" size="30" maxlength="35"  autocomplete="off" placeholder="Email Address"/>
									<div id="email_warning" style="display:none"></div>
								</td>
								<td></td>
							</tr>
							<tr>
								<th>College :</th>
								<td>
									<span><img src="img/icomoon/briefcase.png" /></span>
									<input name="college" type="text" size="40" maxlength="35" autocomplete="off" placeholder="University/College"/>
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

				<div id="join">
					<button id="submit_form">Submit Details</button>
				</div>
				<div id="reg_query">
					<span>For any queries, Contact</span>
					<h4>Megha Sharma</h4>
					<p>+91-9086-118089</p>
					<p>meghas19@yahoo.co.in</p><br>

				</div>
		    </div>	
		</div>
			
			
		</section>
		
		<!-- container Contact -->

        <section class="page" id="container_contact" data-slide="6">	

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
						<h4>Event Coordinator</h4>

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
						<h4>Media & Publications</h4>

						<p class="name">Megha Sharma</p>
						<p class="tel">+91-9086-118089</p>
						<p class="mail">meghas19@yahoo.co.in</p>

					</div>
				</div>

				<div class="assym_black" id="cont7">
					
					<div id="faculty">
						<h4>Chief Faculty Coordinator</h4>
						<p class="name">* Dr. Ankush Anand</p>
						<p class="mail">ankush.anand@smvdu.ac.in</p><br/>
						<h4>Branch Faculty Coordinators</h4>
						<p class="name">- Mr. Irfan-ul-Haq</p>
						<p class="mail" >haqmechanical@gmail.com</p>
						<p class="name">- Mr. Abhimanyu Sharma </p>
						<p class="mail" >abhimanyu.sharma@smvdu.ac.in </p>
						<p class="name">- Mr. Sudesh Kumar</p>
						<p class="mail" >sudesh.Bhadu@smvdu.ac.in  </p>
						<p class="name">- Dr. R.K. Jha</p>
						<p class="mail" >rakesh.jha@smvdu.ac.in</p>
						<p class="name">- Dr. Swarkar Sharma</p>
						<p class="mail" ></p>
						

					</div>
				</div>

				<div class="assym_black" id="cont8">
					<div id="discipline">
						<h4>Designer</h4>

						<p class="name">Akash Maurya</p>
						<p class="tel">+91-9797602140</p>
						<p class="mail" >maurya.aakash1@gmail.com</p>
					</div>
					
				</div>
				
			</div>
		</section><!-- /container -->	

		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

		 <!-- JavaScript includes -->
        
        <script type="text/javascript" src="js/jquery.countdown.js"></script>
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


		<script type="text/javascript">
			
			$(document).ready(function(){

				//requests javascript files using AJAX
				$.getScript("js/jquery.lettering.js", function(){
							$(".os-phrases, .loader, .covers").fadeIn();
							$("#os-phrases > h3").lettering('words').children("span").lettering().children("span").lettering(); 
				});				

							

				//preloader for images
				var loader = new PxLoader();

				for(var i= 1; i < 2; i++)
					loader.addImage("img/"+i+".jpg");
				
				for(var i = 1; i < 4; i++)
					loader.addImage("img/"+i+".png");

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
					/*$("#container").addClass("open", function(){
						$(this).remove();
					});*/

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

		</script>
		<!-- classie.js by @desandro: https://github.com/desandro/classie -->
		<script src="js/classie.js"></script>
		<script src="js/modalEffects.js"></script>
				
		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-44697804-1', 'smvdu.net.in');
		  ga('send', 'pageview');

		</script>
	</body>
</html>