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
		
		<link rel="shortcut icon" href="intersection.ico"> 
		<link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
		
	</head>
	<body>
	<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

		<div class="container_contact">	
			<div class="contact">
				<div id="cont1">
					<div id="online">
						<h3>Online Contacts</h3>
						<a href="https://www.facebook.com/titiksha2k13" target="_blank" style="color: #3b5998; text-decoration: none;"><img src="img/fb_black.png">Facebook Page</a>
						<pre>Or Drop us a mail on :</pre>
						<i style="color: #2B3752">titiksha2k13@gmail.com</i>
					</div>
				</div>
				<div id="cont2">
					<div id="chief">
						<h4>Titiksha Coordinator</h4>
						<pre>Dhananjay Singh</pre>
						<pre>+91-9796405080</pre>
						<pre style="color: #2B3752">djsanj99@gmail.com</pre>
					</div>
				</div>
				<div id="cont3">
					<div id="web">
						<h4>Web Development</h4>
						<pre>###########</pre>
						<pre>+91-127312</pre>
						<pre style="color: #000000">******@gmail.com</pre>
						<pre>###########</pre>
						<pre>+91-127312</pre>
						<pre style="color: #000000">******@gmail.com</pre>
						<pre>###########</pre>
						<pre>+91-127312</pre>
						<pre style="color: #000000">******@gmail.com</pre>
					</div>

					
				</div>
				<div id="cont4">
					<div id="tech">
						<h4>Technical Coordinators</h4>
						<pre>Rishabh Shukla</pre>
						<pre>+91-9086250987</pre>
						<pre style="color: #2B3752">rishy.s13@gmail.com</pre>
					</div>
					
				</div>
				<div id="cont5">
					<div id="design">
						<h4>Designer</h4>
						<pre>##########</pre>
						<pre>+91-1217219823</pre>
						<pre style="color: #120F18">#####@gmail.com</pre>
					</div>
					
				</div>
				<div id="cont6">
					<div id="media">
						<h4>Media & Publications</h4>
						<pre>##########</pre>
						<pre>+91-1217219823</pre>
						<pre style="color: #120F18">#####@gmail.com</pre>
					</div>
				</div>
				<div id="cont7">
					<div id="c7">
						<pre>CONTACTS</pre>
					</div>
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
				<div id="cont8">
					<div id="discipline">
						<h4>Discipline</h4>
						<pre>##########</pre>
						<pre>+91-1217219823</pre>
						<pre style="color: #120F18">#####@gmail.com</pre>
					</div>
					
				</div>
				
				</div>
		</div><!-- /container -->

		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
	</body>
</html>