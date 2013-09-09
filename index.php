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

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript" src="js/PxLoader.js"></script>
        <script type="text/javascript" src="js/PxLoaderImage.js"></script>
		
	</head>
	<body>
	<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

		<section id="container">	
			
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

			<div id="progress"></div>

        	<div class="loader">
			  <span>L</span>
			  <span>O</span>
			  <span>A</span>
			  <span>D</span>
			  <span>I</span>
			  <span>N</span>
			  <span>G</span>
			  
			  <div class="covers">
			    <span></span>
			    <span></span>
			    <span></span>
			    <span></span>
			    <span></span>
			    <span></span>
			    <span></span>
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
                    <p>4th - 6th October 2013</p>
                </div>

                <div id="loaderWrapper">
                	
                	<div id="enter">Enter Site</div>

                </div>

			</div>

		</section><!-- /container of loader -->

        
		<!-- added menu here -->
		<section id="container_menu">
            <img src="img/7.jpg" id="bg"/>
            <div class="header">
                <div id="h-text">
                    <p>Titiksha 2k13</p>
                </div>
            </div>
            
            <div class="content">
                <ul class="ca-menu">
                    <li>
                        <a href="#">
                            <span class="ca-icon">F</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Events</h2>
                                <h3 class="ca-sub">Personalized to your needs</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon">H</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Workshop</h2>
                                <h3 class="ca-sub">Advanced use of technology</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon" id="heart">N</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Competitions</h2>
                                <h3 class="ca-sub">Understanding visually</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon">K</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Register Now</h2>
                                <h3 class="ca-sub">Professionals in action</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#container_contact">
                            <span class="ca-icon">L</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Contact Us</h2>
                                <h3 class="ca-sub">24/7 for you needs</h3>
                            </div>
                        </a>
                    </li>
                </ul>
                <div id="countdown"></div>
                <p id="note"></p>
                
            </div><!-- content -->
            
        </section><!-- container_menu -->

        <div class="container_contact" id="container_contact">	
			<div class="contact">

				<div id="cont0">
					<div id="c7">
						<pre>CONTACTS</pre>
					</div>
				</div>


				<div class="assym" id="cont1">
					<div id="online">
						<h3>Online Contacts</h3>
						<a href="https://www.facebook.com/titiksha2k13" target="_blank" style="color: #3b5998; text-decoration: none;"><img src="img/fb_black.png">Facebook Page</a>
						<pre>Or Drop us a mail on :</pre>
						<i style="color: #2B3752">titiksha2k13@gmail.com</i>
					</div>
				</div>

				<div class="assym" id="cont2">
					<div id="chief">
						<h4>Titiksha Coordinator</h4>
						<pre>Dhananjay Singh</pre>
						<pre>+91-9796405080</pre>
						<pre style="color: #2B3752">djsanj99@gmail.com</pre>
					</div>
				</div>

				<div class="assym" id="cont3">
					<div id="web">
						<h4>Web Development</h4>
						<pre>###########</pre>
						<pre>+91-127312</pre>
						<pre style="color: #fff">******@gmail.com</pre>
						<pre>###########</pre>
						<pre>+91-127312</pre>
						<pre style="color: #fff">******@gmail.com</pre>
						<pre>###########</pre>
						<pre>+91-127312</pre>
						<pre style="color: #fff">******@gmail.com</pre>
					</div>					
				</div>

				<div class="assym" id="cont4">
					<div id="tech">
						<h4>Technical Coordinators</h4>
						<pre>Rishabh Shukla</pre>
						<pre>+91-9086250987</pre>
						<pre style="color: #337899">rishy.s13@gmail.com</pre>
					</div>					
				</div>

				<div class="assym" id="cont5">
					<div id="design">
						<h4>Designer</h4>
						<pre>##########</pre>
						<pre>+91-1217219823</pre>
						<pre style="color: #1C008B">#####@gmail.com</pre>
					</div>					
				</div>

				<div class="assym" id="cont6">
					<div id="media">
						<h4>Media & Publications</h4>
						<pre>##########</pre>
						<pre>+91-1217219823</pre>
						<pre style="color: #337899">#####@gmail.com</pre>
					</div>
				</div>
				<div class="assym" id="cont7">
					
					<div id="faculty">
						<h4>Chief Faculty</h4>
						<pre>Dr. Ankush Anand</pre>
						<pre style="color: #120041">  *ankush.anand@smvdu.ac.in</pre><br/>
						<h4>Branch Faculty</h4>
						<pre>- Mr. Irfan-ul-Haq</pre>
						<pre style="color: #120041">  *haqmechanical@gmail.com</pre>
						<pre>- Mr. Abhimanyu Sharma </pre>
						<pre style="color: #120041">  *abhimanyu.sharma@smvdu.ac.in </pre>
						<pre>- Mr. Sudesh Kumar</pre>
						<pre style="color: #120041">  *sudesh.Bhadu@smvdu.ac.in  </pre>
						<pre>- Mr. R.K. Jha</pre>
						<pre style="color: #120041">  *rakesh.jha@smvdu.ac.in</pre>
						<pre>- Dr. Swarkar Sharma</pre>
						<pre style="color: #120041"></pre>
						

					</div>
				</div>

				<div class="assym" id="cont8">
					<div id="discipline">
						<h4>Discipline</h4>
						<pre>##########</pre>
						<pre>+91-1217219823</pre>
						<pre style="color: #5EA89F">#####@gmail.com</pre>
					</div>
					
				</div>
				
			</div>
		</div><!-- /container -->



		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
        
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        
		 <!-- JavaScript includes -->
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script src="js/jquery.countdown.js"></script>
        <script src="js/script.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		<script src="js/jquery.lettering.js"></script>
		<script>
			$(document).ready(function() {
				$("#os-phrases > h3").lettering('words').children("span").lettering().children("span").lettering(); 
				
				//removes the loader page
				$("#enter").click(function(){
					$("#container").addClass("open");
                    $("#container_menu").addClass("open").fadeIn(500);
				});
			})
		</script>
		<script type="text/javascript">
			
			$(document).ready(function(){


				var loader = new PxLoader();

				for(var i= 1; i < 19; i++)
					loader.addImage("../img/"+i+".jpg");
				

	        	loader.addCompletionListener(function() {
	        		$("#progress , .loader").fadeOut();
	        		$("#enter").fadeIn();
	        	});

	        	loader.addProgressListener(function(e) {
	        		var percent = Math.round(e.completedCount / e.totalCount * 100);
	        		$("#progress").html(percent+"%");

	           	});

	        	loader.start();
	        });
		</script>

		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
	</body>
</html>