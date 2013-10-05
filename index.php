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

        <!--  Timer css scripts   !-->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" />
        <link rel="stylesheet" href="css/jquery.countdown.css" />

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/sponsor.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>	
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="js/functions.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
        	
	</head>
	<body>
	<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

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
                    <li data-slide="6">
                        <a href="#container_sponser">
                            <span class="ca-icon" id="heart">P</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Sponsors</h2>
                                <h3 class="ca-sub">Our Trusty Believer's</h3>
                            </div>
                        </a>
                    </li>
                    <li data-slide="4">
                        <a href="#register">
                            <span class="ca-icon">U</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Register Now</h2>
                                <h3 class="ca-sub">Register and get started</h3>
                            </div>
                        </a>
                    </li>
                    <li data-slide="5">
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
						<section class="main demo-2">
						
						<div id="grid" class="grid clearfix">
						
							<div class="uc-container">
								<div class="uc-initial-content">
									<span class="icon-eye">mega one</span>
								</div>
								<div class="uc-final-content">
									<p>This event is Really exciting and Fun. Participate and Grab bunch of Prizes</p>
									<div class="title"><h4>The Professor</h4> by Dan Matutina <a href="http://drbl.in/dMLS" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->
							
							<div class="uc-container">
								<div class="uc-initial-content">
									<span class="icon-eye">mega one</span>
								</div>
								<div class="uc-final-content">
									<p>This event is Really exciting and Fun. Participate and Grab bunch of Prizes</p>
									<div class="title"><h4>The Professor</h4> by Dan Matutina <a href="http://drbl.in/dMLS" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="uc-initial-content">
									<span class="icon-eye">mega one</span>
								</div>
								<div class="uc-final-content">
									<p>This event is Really exciting and Fun. Participate and Grab bunch of Prizes</p>
									<div class="title"><h4>The Professor</h4> by Dan Matutina <a href="http://drbl.in/dMLS" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="uc-initial-content">
									<img src="" alt="image02" />
									<span class="icon-eye"></span>
								</div>
								<div class="uc-final-content">
									<img src="" alt="image02-large" />
									<div class="title"><h4>Planet</h4> by Dan Matutina <a href="http://drbl.in/eZoL" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

							

							<div class="uc-container">
								<div class="uc-initial-content">
									<img src="" alt="image04" />
									<span class="icon-eye"></span>
								</div>
								<div class="uc-final-content">
									<img src="" alt="image04-large" />
									<div class="title"><h4>Ero Senin</h4> by Dan Matutina <a href="http://drbl.in/dJfK" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="uc-initial-content">
									<img src="" alt="image04" />
									<span class="icon-eye"></span>
								</div>
								<div class="uc-final-content">
									<img src="" alt="image04-large" />
									<div class="title"><h4>Ero Senin</h4> by Dan Matutina <a href="http://drbl.in/dJfK" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

						</div><!-- / grid -->
						
					</section>
				</div>
			</div>

				<div class="branch" id="cse">
					<div class="event_heading">
						<span class="heading_text">Computer</span>
					</div>
					<div class="event_content" style="display:none;">
						<section class="main demo-2">
						
						<div id="grid" class="grid clearfix">
						
							<div class="uc-container">
								<div class="uc-initial-content">
									<span class="icon-eye">mega one</span>
								</div>
								<div class="uc-final-content">
									<p>This event is Really exciting and Fun. Participate and Grab bunch of Prizes</p>
									<div class="title"><h4>The Professor</h4> by Dan Matutina <a href="http://drbl.in/dMLS" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->
							
							<div class="uc-container">
								<div class="uc-initial-content">
									<span class="icon-eye">mega one</span>
								</div>
								<div class="uc-final-content">
									<p>This event is Really exciting and Fun. Participate and Grab bunch of Prizes</p>
									<div class="title"><h4>The Professor</h4> by Dan Matutina <a href="http://drbl.in/dMLS" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="uc-initial-content">
									<span class="icon-eye">mega one</span>
								</div>
								<div class="uc-final-content">
									<p>This event is Really exciting and Fun. Participate and Grab bunch of Prizes</p>
									<div class="title"><h4>The Professor</h4> by Dan Matutina <a href="http://drbl.in/dMLS" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="uc-initial-content">
									<img src="" alt="image02" />
									<span class="icon-eye"></span>
								</div>
								<div class="uc-final-content">
									<img src="" alt="image02-large" />
									<div class="title"><h4>Planet</h4> by Dan Matutina <a href="http://drbl.in/eZoL" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

							

							<div class="uc-container">
								<div class="uc-initial-content">
									<img src="" alt="image04" />
									<span class="icon-eye"></span>
								</div>
								<div class="uc-final-content">
									<img src="" alt="image04-large" />
									<div class="title"><h4>Ero Senin</h4> by Dan Matutina <a href="http://drbl.in/dJfK" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="uc-initial-content">
									<img src="" alt="image04" />
									<span class="icon-eye"></span>
								</div>
								<div class="uc-final-content">
									<img src="" alt="image04-large" />
									<div class="title"><h4>Ero Senin</h4> by Dan Matutina <a href="http://drbl.in/dJfK" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->


						</div><!-- / grid -->
						
					</section>
					</div>
				</div>
				
				<div class="branch" id="mech">
					<div class="event_heading">
						<span class="heading_text">Mechanical</span>
					</div>
					<div class="event_content" style="display:none;">
						<section class="main demo-2">
						
						<div id="grid" class="grid clearfix">
						
							<div class="uc-container">
								<div class="uc-initial-content">
									<span class="icon-eye">mega one</span>
								</div>
								<div class="uc-final-content">
									<p>sfajkshfaslkgsaflgsjf;gjasjflg;sfjgjsf;gas
									sglsjfgjas;fjgals;fjg;lsflgs;fljgsf</p>
									<div class="title"><h4>The Professor</h4> by Dan Matutina <a href="http://drbl.in/dMLS" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="uc-initial-content">
									<img src="" alt="image02" />
									<span class="icon-eye"></span>
								</div>
								<div class="uc-final-content">
									<img src="" alt="image02-large" />
									<div class="title"><h4>Planet</h4> by Dan Matutina <a href="http://drbl.in/eZoL" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="uc-initial-content">
									<img src="" alt="image03" />
									<span class="icon-eye"></span>
								</div>
								<div class="uc-final-content">
									<img src="" alt="image03-large" />
									<div class="title"><h4>Angry Nerd Blofeld</h4> by Dan Matutina <a href="http://drbl.in/eLEa" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="uc-initial-content">
									<img src="" alt="image04" />
									<span class="icon-eye"></span>
								</div>
								<div class="uc-final-content">
									<img src="" alt="image04-large" />
									<div class="title"><h4>Ero Senin</h4> by Dan Matutina <a href="http://drbl.in/dJfK" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="uc-initial-content">
									<img src="" alt="image04" />
									<span class="icon-eye"></span>
								</div>
								<div class="uc-final-content">
									<img src="" alt="image04-large" />
									<div class="title"><h4>Ero Senin</h4> by Dan Matutina <a href="http://drbl.in/dJfK" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

						</div><!-- / grid -->
						
					</section>
					</div>
				</div>
				
				<div class="branch" id="ece">
					<div class="event_heading">
						<span class="heading_text">Electronics</span>
					</div>
					<div class="event_content" style="display:none;">
						<section class="main demo-2">
						
						<div id="grid" class="grid clearfix">
						
							<div class="uc-container">
								<div class="uc-initial-content">
									<span class="icon-eye">mega one</span>
								</div>
								<div class="uc-final-content">
									<p>sfajkshfaslkgsaflgsjf;gjasjflg;sfjgjsf;gas
									sglsjfgjas;fjgals;fjg;lsflgs;fljgsf</p>
									<div class="title"><h4>The Professor</h4> by Dan Matutina <a href="http://drbl.in/dMLS" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="uc-initial-content">
									<img src="" alt="image02" />
									<span class="icon-eye"></span>
								</div>
								<div class="uc-final-content">
									<img src="" alt="image02-large" />
									<div class="title"><h4>Planet</h4> by Dan Matutina <a href="http://drbl.in/eZoL" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="uc-initial-content">
									<img src="" alt="image03" />
									<span class="icon-eye"></span>
								</div>
								<div class="uc-final-content">
									<img src="" alt="image03-large" />
									<div class="title"><h4>Angry Nerd Blofeld</h4> by Dan Matutina <a href="http://drbl.in/eLEa" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="uc-initial-content">
									<img src="" alt="image04" />
									<span class="icon-eye"></span>
								</div>
								<div class="uc-final-content">
									<img src="" alt="image04-large" />
									<div class="title"><h4>Ero Senin</h4> by Dan Matutina <a href="http://drbl.in/dJfK" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="uc-initial-content">
									<img src="" alt="image04" />
									<span class="icon-eye"></span>
								</div>
								<div class="uc-final-content">
									<img src="" alt="image04-large" />
									<div class="title"><h4>Ero Senin</h4> by Dan Matutina <a href="http://drbl.in/dJfK" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

						</div><!-- / grid -->
						
					</section>
					</div>
				</div>

				<div class="branch" id="arch">
					<div class="event_heading">
						<span class="heading_text">Architecture</span>
					</div>
					<div class="event_content" style="display:none;">
						<section class="main demo-2">
						
						<div id="grid" class="grid clearfix">
						
							<div class="uc-container">
								<div class="uc-initial-content">
									<span class="icon-eye">mega one</span>
								</div>
								<div class="uc-final-content">
									<p>sfajkshfaslkgsaflgsjf;gjasjflg;sfjgjsf;gas
									sglsjfgjas;fjgals;fjg;lsflgs;fljgsf</p>
									<div class="title"><h4>The Professor</h4> by Dan Matutina <a href="http://drbl.in/dMLS" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="uc-initial-content">
									<img src="" alt="image02" />
									<span class="icon-eye"></span>
								</div>
								<div class="uc-final-content">
									<img src="" alt="image02-large" />
									<div class="title"><h4>Planet</h4> by Dan Matutina <a href="http://drbl.in/eZoL" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="uc-initial-content">
									<img src="" alt="image03" />
									<span class="icon-eye"></span>
								</div>
								<div class="uc-final-content">
									<img src="" alt="image03-large" />
									<div class="title"><h4>Angry Nerd Blofeld</h4> by Dan Matutina <a href="http://drbl.in/eLEa" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="uc-initial-content">
									<img src="" alt="image04" />
									<span class="icon-eye"></span>
								</div>
								<div class="uc-final-content">
									<img src="" alt="image04-large" />
									<div class="title"><h4>Ero Senin</h4> by Dan Matutina <a href="http://drbl.in/dJfK" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="uc-initial-content">
									<img src="" alt="image04" />
									<span class="icon-eye"></span>
								</div>
						`		<div class="uc-final-content">
									<img src="" alt="image04-large" />
									<div class="title"><h4>Ero Senin</h4> by Dan Matutina <a href="http://drbl.in/dJfK" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

						</div><!-- / grid -->
						
					</section>
					</div>
				</div>

				<div class="branch" id="ibt">
					<div class="event_heading">
						<span class="heading_text">Bio-Tech</span>
					</div>
					<div class="event_content" style="display:none;">
						<section class="main demo-2">
						
						<div id="grid" class="grid clearfix">
						
							<div class="uc-container">
								<div class="uc-initial-content">
									<span class="icon-eye">mega one</span>
								</div>
								<div class="uc-final-content">
									<p>sfajkshfaslkgsaflgsjf;gjasjflg;sfjgjsf;gas
									sglsjfgjas;fjgals;fjg;lsflgs;fljgsf</p>
									<div class="title"><h4>The Professor</h4> by Dan Matutina <a href="http://drbl.in/dMLS" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="uc-initial-content">
									<img src="" alt="image02" />
									<span class="icon-eye"></span>
								</div>
								<div class="uc-final-content">
									<img src="" alt="image02-large" />
									<div class="title"><h4>Planet</h4> by Dan Matutina <a href="http://drbl.in/eZoL" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="uc-initial-content">
									<img src="" alt="image03" />
									<span class="icon-eye"></span>
								</div>
								<div class="uc-final-content">
									<img src="" alt="image03-large" />
									<div class="title"><h4>Angry Nerd Blofeld</h4> by Dan Matutina <a href="http://drbl.in/eLEa" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="uc-initial-content">
									<img src="" alt="image04" />
									<span class="icon-eye"></span>
								</div>
								<div class="uc-final-content">
									<img src="" alt="image04-large" />
									<div class="title"><h4>Ero Senin</h4> by Dan Matutina <a href="http://drbl.in/dJfK" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

							<div class="uc-container">
								<div class="uc-initial-content">
									<img src="" alt="image04" />
									<span class="icon-eye"></span>
								</div>
								<div class="uc-final-content">
									<img src="" alt="event 5" />
									<div class="title"><h4>Ero Senin</h4> by Dan Matutina <a href="http://drbl.in/dJfK" class="icon-link"></a></div>
									<span class="icon-cancel"></span>
								</div>
							</div><!-- / uc-container -->

						</div><!-- / grid -->
						
					</section>
					</div>
				</div>	
			</div>
			
		</section> <!-- events END -->

		
		<!-- sponsers page === -->
		
		<section class="page" id="container_sponser" data-slide="6">
			<div id="sponsor_page">
				<div id="spon_head">
					<span>Our Previous Sponsors</span>
				</div>				

				<?php

// Each sponsor is an element of the $sponsors array:


$sponsors = array(
	array('qou','The Biggest Qouttion and Answer Forum.','http://www.quora.com/'),
	array('adobe','The leading software developer targeted at web designers and developers.','http://www.adobe.com/'),
	array('microsoft','One of the top software companies of the world.','http://www.microsoft.com/'),
	array('sony','A global multibillion electronics and entertainment company ','http://www.sony.com/'),
	array('dell','One of the biggest computer developers and assemblers.','http://www.dell.com/'),
	array('ubuntu','Free Operating System.','http://www.ubuntu.com/'),
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

				</div>

		</section>	
		<!-- REGITRATION PAGE -->

		<section class="page" id="register" data-slide="4">
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
		    </div>	
		</div>
			
			
		</section>
		
		<!-- container Contact -->

        <section class="page" id="container_contact" data-slide="5">	

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
        
        <script type="text/javascript" src="js/stellar.js" ></script>
        <script type="text/javascript" src="js/waypoints.min.js"></script>
		 <!-- JavaScript includes -->
        
        <script src="js/jquery.countdown.js"></script>
        <script src="js/script.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
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
					});
				});


				//jparallax on menu page
				$(".bub").parallax({
					mouseport: $("#bubble_area")
				});

	        });

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
				
			});
		</script>

		<script type="text/javascript" src="js/jquery.pfold.js"></script>
		
		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
	</body>
</html>