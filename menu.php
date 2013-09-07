<?php
	/**
  *
  * Titiksha official website
  * http://github.com/smvdu/titiksha
  *
  */

	include('php/functions.php');
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
	    <!-- css for menu in menu.php -->
	    <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />
	    <!-- =========================================== -->
	    <link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">

        <!--  Timer css scripts   !-->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" />
        <link rel="stylesheet" href="css/style_time.css" />
        <link rel="stylesheet" href="css/jquery.countdown.css" />
        <!-- --------------------------- ------>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>


	</head>
	<body>
	<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div class="container">
            <img src="img/3.jpg" id="bg"/>
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
                            <span class="ca-icon">N</span>
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
                        <a href="#">
                            <span class="ca-icon">L</span>
                            <div class="ca-content">
                                <h2 class="ca-main">About Us</h2>
                                <h3 class="ca-sub">24/7 for you needs</h3>
                            </div>
                        </a>
                    </li>
                </ul>
                <div id="countdown"></div>
                <p id="note"></p>
                
            </div><!-- content -->
            <div class="footer">
                <a target="_blank" href="https://www.facebook.com/titiksha2k13"><img src="img/fb.png"></a> 
                <span>&nbsp &nbsp</span>
                <img src="img/twi.png"></span>
            </div>
        </div>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
        


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>


        <!-- JavaScript includes -->
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script src="assets/countdown/jquery.countdown.js"></script>
        <script src="assets/js/script.js"></script>

		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
	</body>

</html>