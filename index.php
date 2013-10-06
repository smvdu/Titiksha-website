<?php 
  /**
  *
  * Titiksha official website
  * http://github.com/smvdu/titiksha
  *
  */

	/* Local configurations/ overrides
	***********************************************/	

	include ('php/functions.php');
  
?>
<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/<?php echo SITE_TYPE; ?>" lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title><?php echo site_title; ?></title>
	    <meta itemprop="name" content="<?php print(site_title)?>">
	    <meta name="description" content="<?php print(site_description);?>">
	    <meta itemprop="description" content="<?php print(site_description);?>">
	    <meta itemprop="image" content="<?php print(site_photo_url);?>">
	    <meta name="keywords" content="<?php print(site_keywords);?>">
	    <meta name="author" content="<?php print(site_author);?>">
		
	  	<?php get_fb_meta(); ?>
	  	<!-- css for menu.php -->
	  	
        <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />
		<!-- ======================== -->
		<link rel="shortcut icon" href="intersection.ico"> 
		
		
		<link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/component.css" />

        <!--  Timer css scripts   !-->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" />
        <link rel="stylesheet" href="css/jquery.countdown.css" />

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/sponsor.js"></script>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="js/functions.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
        	
	</head>
	<body>
	<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <nav id="main_nav">
        	<ul>
        		<li data-slide="1"></li>
        		<li data-slide="2"></li>
        		<li data-slide="3"></li>
        		<li data-slide="4"></li>
        		<li data-slide="5"></li>
        		<li data-slide="6"></li>
        	</ul>
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

                <div id="loaderWrapper">
	            	<div id="loading">LOADING</div>
	            	<div id="progress"></div>
	            	<div id="enter"><a>ENTER</a></div>
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
                    <p>Titiksha 2k13</p>
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
                                <h2 class="ca-main">Register Now</h2>
                                <h3 class="ca-sub">Register and get started</h3>
                            </div>
                        </a>
                    </li>
                    <li data-slide="6">
                        <a href="#container_contact">
                            <span class="ca-icon">B</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Contact Us</h2>
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
				<img src="img/1.jpg">
				<img src="img/2.jpg">
				<img src="img/3.jpg">
				<img src="img/4.jpg">
				<img src="img/5.jpg">
				<img src="img/6.jpg">
				<img src="img/7.jpg">
				<img src="img/8.jpg">
				<img src="img/9.jpg">
				<img src="img/10.jpg">
				<img src="img/11.jpg">
				<img src="img/12.jpg">
				<img src="img/13.jpg">
				<img src="img/14.jpg">
				<img src="img/15.jpg">
				<img src="img/16.jpg">
				<img src="img/17.jpg">
				<img src="img/18.jpg">
				<img src="img/19.jpg">
				<img src="img/20.jpg">
				<img src="img/21.jpg">
				<img src="img/22.jpg">
				<img src="img/23.jpg">
				<img src="img/24.jpg">
				<img src="img/25.jpg">
				<img src="img/26.jpg">
				<img src="img/27.jpg">
				<img src="img/28.jpg">
				<img src="img/29.jpg">
				<img src="img/30.jpg">
				<img src="img/31.jpg">
				<img src="img/32.jpg">
				<img src="img/33.jpg">
				<img src="img/34.jpg">
				
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
					 technical excellence, invite more than 100 of colleges /universities  from the
					 nation to participate in this  fiesta. Different events  will be held by the different
				     branches of the university for three  exuberant days.  Mechanical, Electronics and
		     	     communication, Computer science , Biotechnology and Architectural events will

				     emit their aura in this fest and this time TItiksha is going to be bigger than ever.
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
											<p>The  event  aims  to  gather diverse perspectives from participants around
											the  country  regarding  the  problems  being  faced  in  their  states  and  to
											come  up  to  solutions  to  these  problems  through  a  rigorous  mutual
											discussion  among the representatives of different 28 states. "All izz not
											well" will be held in two rounds. </p>
											<p><em>ROUND 1­</em> : A short essay is given to all the participated candidates.
											(Topic ­ define at­least five problems of your state with their
											feasible solutions if u are the chief minister of your state).
											</p>
											<p><em>ROUND 2</em> :­Candidates  qualified  in round 1 are eligible to present their
											state’  problems  with  feasible  solutions  in  front  of  the  jury,  which  will
											decide the winner.</p>
											
											<ul>
												<li><strong>Event Co-ordinator :</strong>Shubham Tiwari</li>
												<li><strong>Contact :</strong> +91-9469-762638</li>
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
												<li><strong>Event Co-ordinator :</strong> Alpha Beta</li>
												<li><strong>Contact :</strong> +91-1251354713</li>
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
										<h3>ELECTRO-AVTAAR</h3>
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
												TITIKSHA 2013 PROPOSAL Page 2length  of  their  choice  and  the  best  video  would  be  shown  in
												the valedictory ceremony in auditorium.</p>
											<ul>
												<li><strong>Event Co-ordinator :</strong> Alpha Beta</li>
												<li><strong>Contact :</strong> +91-1251354713</li>
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
												<li><strong>Event Co-ordinator :</strong> Alpha Beta</li>
												<li><strong>Contact :</strong> +91-1251354713</li>
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
												<li><strong>Event Co-ordinator :</strong> Alpha Beta</li>
												<li><strong>Contact :</strong> +91-1251354713</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-6">
									<span class="icon-eye"><em>SCI-FI</em></span>
									<p>Show your imagination</p>
								</div>
								<div class="md-modal md-effect-11" id="modal-6">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>SCI-FI</h3>
										<div>
											<p>1. Presentation of Any Latest sci­fi technology which is not present.
												Technology must be new to all. Presentation is Submitted before the Event.
												<br>2. Selected top 10 or 5 ppt. will be in next round.
												<br>3. Presentation of ppt. in front of judges.</p>
											<br><br>
											<ul>
												<li><strong>Event Co-ordinator :</strong> Alpha Beta</li>
												<li><strong>Contact :</strong> +91-1251354713</li>
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
					</div>
					<div class="event_content" style="display:none;">
						<div id="grid">
						
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-7">
									<span class="icon-eye">Event one</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-7">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>Tech Roadies</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>Close:</strong> click on the button below to close the modal.</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-8">
									<span class="icon-eye">second Events</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-8">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>second events</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>Close:</strong> click on the button below to close the modal.</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-9">
									<span class="icon-eye">Third Events</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-9">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>second events</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>Close:</strong> click on the button below to close the modal.</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-10">
									<span class="icon-eye">Fourth Events</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-10">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>second events</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>Close:</strong> click on the button below to close the modal.</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-11">
									<span class="icon-eye">Fifth Events</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-11">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>second events</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>Close:</strong> click on the button below to close the modal.</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-12">
									<span class="icon-eye">sixth Events</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-12">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>second events</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>heuya:</strong> click on the button below to close the modal.</li>
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
					</div>
					<div class="event_content" style="display:none;">
						<div id="grid">
						
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-13">
									<span class="icon-eye">Event one</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-13">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>Tech Roadies</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>Close:</strong> click on the button below to close the modal.</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-14">
									<span class="icon-eye">second Events</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-14">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>second events</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>Close:</strong> click on the button below to close the modal.</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-15">
									<span class="icon-eye">Third Events</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-15">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>second events</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>Close:</strong> click on the button below to close the modal.</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-16">
									<span class="icon-eye">Fourth Events</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-16">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>second events</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>Close:</strong> click on the button below to close the modal.</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-17">
									<span class="icon-eye">Fifth Events</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-17">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>second events</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>Close:</strong> click on the button below to close the modal.</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-18">
									<span class="icon-eye">sixth Events</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-18">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>second events</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>heuya:</strong> click on the button below to close the modal.</li>
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
					</div>
					<div class="event_content" style="display:none;">
						<div id="grid">
						
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-19">
									<span class="icon-eye">Event one</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-19">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>Tech Roadies</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>Close:</strong> click on the button below to close the modal.</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-20">
									<span class="icon-eye">second Events</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-20">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>second events</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>Close:</strong> click on the button below to close the modal.</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-21">
									<span class="icon-eye">Third Events</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-21">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>second events</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>Close:</strong> click on the button below to close the modal.</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-22">
									<span class="icon-eye">Fourth Events</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-22">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>second events</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>Close:</strong> click on the button below to close the modal.</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-23">
									<span class="icon-eye">Fifth Events</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-23">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>second events</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>Close:</strong> click on the button below to close the modal.</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-24">
									<span class="icon-eye">sixth Events</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-24">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>second events</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>heuya:</strong> click on the button below to close the modal.</li>
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
					</div>
					<div class="event_content" style="display:none;">
						<div id="grid">
						
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-25">
									<span class="icon-eye">Event one</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-25">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>Tech Roadies</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>Close:</strong> click on the button below to close the modal.</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-26">
									<span class="icon-eye">second Events</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-26">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>second events</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>Close:</strong> click on the button below to close the modal.</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-27">
									<span class="icon-eye">Third Events</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-27">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>second events</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>Close:</strong> click on the button below to close the modal.</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-28">
									<span class="icon-eye">Fourth Events</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-28">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>second events</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>Close:</strong> click on the button below to close the modal.</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-29">
									<span class="icon-eye">Fifth Events</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-29">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>second events</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>Close:</strong> click on the button below to close the modal.</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-30">
									<span class="icon-eye">sixth Events</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-30">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>second events</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>heuya:</strong> click on the button below to close the modal.</li>
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
						<span class="heading_text">Bio-Tech</span>
					</div>
					<div class="event_content" style="display:none;">
						<div id="grid">
						
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-31">
									<span class="icon-eye">Event one</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-31">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>Tech Roadies</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>Close:</strong> click on the button below to close the modal.</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-32">
									<span class="icon-eye">second Events</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-32">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>second events</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>Close:</strong> click on the button below to close the modal.</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-33">
									<span class="icon-eye">Third Events</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-33">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>second events</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>Close:</strong> click on the button below to close the modal.</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-34">
									<span class="icon-eye">Fourth Events</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-34">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>second events</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>Close:</strong> click on the button below to close the modal.</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-35">
									<span class="icon-eye">Fifth Events</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-35">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>second events</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>Close:</strong> click on the button below to close the modal.</li>
											</ul>
											
										</div>
									</div>
								</div>
								<div class="md-overlay"></div><!-- the overlay element -->
							</div><!-- / uc-container -->
							<div class="uc-container">
								<div class="md-trigger" data-modal="modal-36">
									<span class="icon-eye">sixth Events</span>
								</div>
								<div class="md-modal md-effect-11" id="modal-36">
									<div class="md-content">
										<div class="md-header">
											<button class="md-register register">Register</button>
											<button class="md-close close">Close!</button>
										</div>
										<h3>second events</h3>
										<div>
											<p>This is a modal window. You can do the following things with it:</p>
											<ul>
												<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
												<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
												<li><strong>heuya:</strong> click on the button below to close the modal.</li>
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
	array('mysql','The most popular open source database engine.','http://www.mysql.com/'),
	array('hp','One of the biggest computer manufacturers.','http://www.hp.com/'),
);

?>
					<div class="sponsorListHolder">

						
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
										<a href="'.$company[2].'">'.$company[1].'</a>
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

				</div>

		</section>	
		<!-- REGITRATION PAGE -->

		<section class="page" id="register" data-slide="5">
		<div class="register_form">
			
			<div id="form">
				<div id="reg_head">
					<span>JOIN TITIKSHA</span`>
				</div>	
				<div class="warning"></div>
				<div class="confirmMessage"></div>
				<form id="reg_form" name="reg_form" action="" method="post" onsubmit="return validateForm()"  autocomplete="off">
					<table>
						<tbody>
							<tr>
								<th>Name :</th>
								<td>
									<span><img src="img/icomoon/user.png" /></span><input name="name" type="text" size="30" maxlength="35" autocomplete="off" placeholder="Full Name"/>
								</td>
							</tr>
							<tr>
								<th>Email :</th>
								<td>

									<span><img src="img/icomoon/mail.png" /></span><input name="email" type="email" size="30" maxlength="35" onchange="checkEmail()" autocomplete="off" placeholder="Email Address"/>
									<div class="email warning"></div>
									
								</td>
							</tr>
							<tr>
								<th>College :</th>
								<td>
									<span><img src="img/icomoon/briefcase.png" /></span><input name="college" type="text" size="40" maxlength="35" autocomplete="off" placeholder="University/College"/>
								</td>
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
							</tr>
							<tr>
								<th>Contact :</th>
								<td>

									<span><img src="img/icomoon/phone.png" /></span><input name="contact" type="tel" size="14" placeholder="+91-**********" autocomplete="off" />

								</td>
							</tr>
							<tr>
								<th>Gender :</th>
								<td>
									<span><img src="img/icomoon/users.png" /></span><input name="gender" type="radio" value="male" /><label for="gender">Male</label> 
									<input name="gender" type="radio" value="female" /><label for="gender">Female</label> 
								</td>
							</tr>
							<tr>
								<th>Password : </th>
								<td>
									<span><img src="img/icomoon/key.png" /></span><input name="password" type="password" autocomplete="off" placeholder="Desired Password"/>
								</td>
							</tr>
							<tr>
								<th>Repeat Password : </th>
								<td>
									<span><img src="img/icomoon/key2.png" /></span><input name="rep-password" type="password" autocomplete="off" placeholder="Re-enter Password"/>
								</td>
							</tr>


						</tbody>
					</table>

				</form>

				<div id="join">
					<button id="submit_form">Join Titiksha</button>
				</div>
				<div id="reg_query">
					<span>For any queries : Contact</span>
					<h4>Megha Sharma</h4>
					<p>+91-9086-118089</p>
					<p>meghas19@yahoo.co.in</p><br>

					<h4>Sahil Khuslani</h4>
					<p>+91-9622-356797</p>
					<p>***********@gmail.com</p>
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
						<i style="color: #2B3752">titiksha2k13@gmail.com</i>
					</div>
				</div>

				<div class="assym_black" id="cont2">
					<div id="chief">

						<h4>Chief Student Coordinator</h4>
						<p class="name">Dhananjay Singh</p>
						<p class="tel">+91-9796405080</p>
						<p clas="mail" >djsanj99@gmail.com</p>

					</div>
				</div>

				<div class="assym_black" id="cont3">
					<div id="web">

						<h4>Web Development Team</h4>
						<p class="name">* Sunny Gupta</p>
						<p class="tel">+91-9086724946</p>
						<p class="name">* Rishabh Shukla</p>
						<p class="tel">+91-9086250987</p>

						<p class="name">* Akshay Pratap Singh</p>
						<p class="tel">+91-9086260656</p>
						<p class="name">* Parth Pankaj Tiwary</p>
						<p class="tel">+91-9797521874</p>
						

					</div>					
				</div>

				<div class="assym_black" id="cont4">
					<div id="tech">
						<h4>Event Coordinator</h4>

						<p class="name">Rishabh Shukla</p>
						<p class="tel">+91-9086250987</p>
						<p class="mail" >rishy.s13@gmail.com</pre>

					</div>					
				</div>

				<div class="assym_black" id="cont5">
					<div id="design">
						<h4>Designer</h4>

						<p class="name">Akash Maurya</p>
						<p class="tel">+91-9797602140</p>
						<p class="mail" >maurya.aakash1@gmail.com</p>

					</div>					
				</div>

				<div class="assym_black" id="cont6">
					<div id="media">
						<h4>Media & Publications</h4>

						<p class="name">Megha Sharma</p>
						<p class="tel">+91-9086118089</p>
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
						<p class="name">- Mr. R.K. Jha</p>
						<p class="mail" >rakesh.jha@smvdu.ac.in</p>
						<p class="name">- Dr. Swarkar Sharma</p>
						<p class="mail" ></p>
						

					</div>
				</div>

				<div class="assym_black" id="cont8">
					<div id="discipline">
						<h4>Discipline</h4>
						<p class="name">Sahil Khuslani</p>
						<p class="tel">+91-9622356797</p>
					</div>
					
				</div>
				
			</div>
		</section><!-- /container -->	

		



		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

		 <!-- JavaScript includes -->
        
        <script src="js/jquery.countdown.js"></script>
        <script src="js/script.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>        
        <script type="text/javascript" src="js/stellar.js" ></script>
        <script type="text/javascript" src="js/waypoints.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>	
        <script type="text/javascript" src="js/PxLoader.js"></script>
        <script type="text/javascript" src="js/PxLoaderImage.js"></script>
        <script type="text/javascript" src="js/jquery.parallax.min.js"></script>

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
				
				for(var i = 1; i < 3; i++)
					loader.addImage("img/"+i+".png");

	        	loader.addCompletionListener(function() {
	        		$("#progress , #loading").fadeOut();
	        		$("#enter").fadeIn(1500);
	        	});

	        	loader.addProgressListener(function(e) {
	        		var percent = Math.round(e.completedCount / e.totalCount * 100);
	        		$("#progress").html(percent+"%");

	           	});

	        	loader.start();


				//removes the loader page
				$("#enter").click(function(){
					/*$("#container").addClass("open", function(){
						$(this).remove();
					});*/

					$("#letters").addClass("moveLeft");
					$("#right-part").addClass("moveRight");	

					$(".page").fadeIn(1200, function(){
						$("#container").remove();
						$("#main_nav").fadeIn();
					});
				});


				//jparallax on menu page
				$(".bub").parallax({
					mouseport: $("#bubble_area")
				});

	        });

/*
			$(function() {

				// say we want to have only one item opened at one moment
				var opened = false;

				$( '#grid > div.uc-container' ).each( function( i ) {

					var $item = $( this ), direction;

					switch( i ) {
						case 0 : direction = ['right','bottom']; break;
						case 1 : direction = ['left','bottom']; break;
						case 2 : direction = ['left','bottom']; break;
						case 3 : direction = ['right','top']; break;
						case 4 : direction = ['right','top']; break;
						case 5 : direction = ['left','top']; break;
					
					}
					
					var pfold = $item.pfold( {
						folddirection : direction,
						speed : 300,
						onEndFolding : function() { opened = false; },
					} );

					$item.find( 'span.icon-eye' ).on( 'click', function() {

						if( !opened ) {
							opened = true;
							pfold.unfold();
						}


					} ).end().find( 'span.icon-cancel' ).on( 'click', function() {

						pfold.fold();

					} );

				} );
				
			});*/
		</script>
		<!-- classie.js by @desandro: https://github.com/desandro/classie -->
		<script src="js/classie.js"></script>
		<script src="js/modalEffects.js"></script>
				
		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
	</body>
</html>