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
	            	<div id="enter">Enter</div>
            	</div>

			</div>

		</section><!-- /container of loader -->

        
		<!-- added menu here -->

		<section class="page" id="container_menu" data-stellar-background-ratio="0.8">
            

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
                    <li> 
                        <a href="#container_about">
                            <span class="ca-icon">T</span>
                            <div class="ca-content">
                                <h2 class="ca-main">About</h2>
                                <h3 class="ca-sub">An OverView of Titiksha</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon">D</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Events</h2>
                                <h3 class="ca-sub">Test yourself against the technology</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon" id="heart">P</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Schedule</h2>
                                <h3 class="ca-sub">Timings of Events</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#register">
                            <span class="ca-icon">U</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Register Now</h2>
                                <h3 class="ca-sub">Register and get started</h3>
                            </div>
                        </a>
                    </li>
                    <li>
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


		<section class="page" id="container_about" >
			<div class="about_us" id="about">
				<img src="pics/1.jpg">
				<img src="pics/2.jpg">
				<img src="pics/3.jpg">
				<img src="pics/4.jpg">
				<img src="pics/5.jpg">
				<img src="pics/6.jpg">
				<img src="pics/7.jpg">
				<img src="pics/8.jpg">
				<img src="pics/9.jpg">
				<img src="pics/10.jpg">
				<img src="pics/11.jpg">
				<img src="pics/12.jpg">
				<img src="pics/13.jpg">
				<img src="pics/14.jpg">
				<img src="pics/15.jpg">
				<img src="pics/16.jpg">
				<img src="pics/17.jpg">
				<img src="pics/18.jpg">
				<img src="pics/19.jpg">
				<img src="pics/20.jpg">
				<img src="pics/21.jpg">
				<img src="pics/22.jpg">
				<img src="pics/23.jpg">
				<img src="pics/24.jpg">
				<img src="pics/25.jpg">
				<img src="pics/26.jpg">
				<img src="pics/27.jpg">
				<img src="pics/28.jpg">
				<img src="pics/29.jpg">
				<img src="pics/30.jpg">
				<img src="pics/31.jpg">
				<img src="pics/32.jpg">
				<img src="pics/33.jpg">
				<img src="pics/34.jpg">
				
				<div id="left_about">
					<span>Effect of earth</span>
				</div>

				<div id="right_about">
					<div id="top"><p>
					 Shri Mata Vaishno  Devi University, India’s  one of the  top ranking  technical university,
					 proudly announces  the  embarkment of Titiksha 2013.
					 SMVDU located  on the foothills of  holy shrine of Mata Vaishno  Devi  is
				     surrounded  by  the  nature’s  scenic  beauty  which enthralls  all the
				     students and visitors. 
				     </div>
		
					<div id="bottom"><p> Titiksha, J&k’s largest annual  technical festival , this time is on it’s way to boggle
					 the minds of young  tech savvies around the nation. We , at SMVDU, for 
					 technical excellence, invite more than 100 of colleges /universities  from the
					 nation to participate in this  fiesta. Different events  will be held by the different
				     branches of the university for three  exuberant days.  Mechanical, electroics and
		     	     communication, computer science , biotechnology and architectural events will
				     emit their aura in this fest and this time TItiksha is going to be a huge  </br>
				     success than ever.
					</p> </div>
				</div>
				
				
			</div>
			
		</section>

		<!-- script for images -->
		

		<!-- REGITRATION PAGE -->

		<section class="page" id="register">
		<div class="register_form">
			
			<div id="form">
				<div id="reg_head">
					<span>REGISTRATIONS</span`>
				</div>	
				<form id="reg_form" action=" " method=" ">
					<table>
						<tbody>
							<tr>
								<th>Name :</th>
								<td>
									<input name="name" type="text" size="30" maxlength="25" />
								</td>
							</tr>
							<tr>
								<th>Email :</th>
								<td>
									<input name="email" type="text" size="30" maxlength="25" />
								</td>
							</tr>
							<tr>
								<th>College :</th>
								<td>
									<input name="college" type="text" placeholder="Your College Name" size="40" maxlength="35" />
								</td>
							</tr>
							
							<tr>
								<th>Year of Study : </th>
								<td><select name="year">
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
									<input name="contact" type="text" size="14" placeholder="+91-9012345678" />
								</td>
							</tr>
							<tr>
								<th>Gender :</th>
								<td>
									<input name="gender" type="radio" value="male" />Male </br>
									<input name="gender" type="radio" value="female" />Female
								</td>
							</tr>
							<tr>
								<th>Password : </th>
								<td>
									<input name="password" type="password" />
								</td>
							</tr>
							<tr>
								<th>Repeat Password : </th>
								<td>
									<input name="rep-password" type="password" />
								</td>
							</tr>


						</tbody>
					</table>

				</form>

				<div id="join">
					<button>Join Titiksha</button>
				</div>
		    </div>	
		</div>
			
			
		</section>
		
		<!-- container Contact -->

        <section class="page" id="container_contact" >	

			<div class="contact">
				<div id="cont0">
					<div id="c7">
						<pre>CONTACTS</pre>
					</div>
				</div>


				<div class="assym black" id="cont1">
					<div id="online">
						<h3>Online Contacts</h3>
						<a href="https://www.facebook.com/titiksha2k13" target="_blank" style="color: #3b5998; text-decoration: none;"><img src="img/fb_black.png">Facebook Page</a>
						<pre>Or Drop us a mail on :</pre>
						<i style="color: #2B3752">titiksha2k13@gmail.com</i>
					</div>
				</div>

				<div class="assym black" id="cont2">
					<div id="chief">
						<h4>Titiksha Coordinator</h4>
						<pre>Dhananjay Singh</pre>
						<pre>+91-9796405080</pre>
						<pre style="color: #2B3752">djsanj99@gmail.com</pre>
					</div>
				</div>

				<div class="assym black" id="cont3">
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

				<div class="assym black" id="cont4">
					<div id="tech">
						<h4>Event Coordinator</h4>
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

				<div class="assym black" id="cont6">
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

				<div class="assym black" id="cont8">
					<div id="discipline">
						<h4>Discipline</h4>
						<pre>##########</pre>
						<pre>+91-1217219823</pre>
						<pre style="color: #5EA89F">#####@gmail.com</pre>
					</div>
					
				</div>
				
			</div>
		</section><!-- /container -->		

		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        
        <script type="text/javascript" src="js/stellar.js" ></script>
		 <!-- JavaScript includes -->
        
        <script src="js/jquery.countdown.js"></script>
        <script src="js/script.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript" src="js/PxLoader.js"></script>
        <script type="text/javascript" src="js/PxLoaderImage.js"></script>

		<script type="text/javascript">
			
			$(document).ready(function(){


				//removes the loader page
				$("#enter").click(function(){
					$("#container").addClass("open", function(){
						$(this).remove();
					});

                    $(".page").fadeIn(500).addClass("open");
				});


				//requests javascript files using AJAX
				$.getScript("js/jquery.lettering.js", function(){
							$(".os-phrases, .loader, .covers").fadeIn();
							$("#os-phrases > h3").lettering('words').children("span").lettering().children("span").lettering(); 
				});				

							

				var loader = new PxLoader();

				for(var i= 1; i < 12; i++)
					loader.addImage("../img/"+i+".jpg");
				

	        	loader.addCompletionListener(function() {
	        		$("#progress , #loading").fadeOut();
	        		$("#enter").fadeIn(1500);
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