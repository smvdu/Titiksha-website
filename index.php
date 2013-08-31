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
		
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
		
	</head>
	<body>
	<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

		<div class="container">	
			
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
				<div id="right-header">
					<span id="header-text">SMVDU</span>
				</div>
                
                <div id="mid-text">
                    <h2>Titiksha 2k13</h2>
                    <p>4th - 6th October 2013</p>
                </div>
			</div>
		</div><!-- /container -->

		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		<script src="js/jquery.lettering.js"></script>
		<script>
			$(document).ready(function() {
				$("#os-phrases > h3").lettering('words').children("span").lettering().children("span").lettering(); 
			})
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