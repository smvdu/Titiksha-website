<?php 
	/* Local configurations/ overrides
	***********************************************/	

	
	include ('php/functions.php');
?>


<!doctype html>
<html itemscope itemtype="http://schema.org/<?php print(site_type); ?>" class=no-js>
<head>
<head>
	<meta charset="utf-8">
	
	<title>	<?php print(site_title); ?> </title>
		
	<meta name="viewport" content="width=device-width,initial-scale=1">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<meta itemprop="name" content="<?php print(site_title)?>">
	<meta name="description" content="<?php print(site_description);?>">
	<meta itemprop="description" content="<?php print(site_description);?>">
	<meta itemprop="image" content="<?php print(site_photo_url);?>">
	<meta name="keywords" content="<?php print(site_keywords);?>">
	<meta name="author" content="<?php print(site_author);?>">
	
	<?php get_fb_meta() ;?>
	
	<link rel="stylesheet" href="assests/css/style.css">	

	  
  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build incl. Respond.js
       Respond is a polyfill for min/max-width media queries. Modernizr enables HTML5 elements & feature detects; 
       for optimal performance, create your own custom Modernizr build: www.modernizr.com/download/ -->
	<script src="assests/js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>
    <?php /*
	<div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="#">Titiksha</a>
          <ul class="nav pull-right">
            <li class="active"><a href="">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Forum</a></li>
            <li><a href="#contact">Contact</a></li>
            <ul class="nav secondary-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle">Login</a>
              <ul class="dropdown-menu">
                <li><a href="#">Secondary link</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Another link</a></li>
              </ul>
            </li>
          </ul>
          </ul>
        </div>
      </div>
    </div>
*/ ?>
    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Welcome to Titiksha</h1>
        <p><?php print(site_title)?></p>
        <!-- <p><a class="btn primary large" href="register.php">Register. It's Free!! &raquo;</a></p> -->
      </div>

<?php /*
      <!-- Example row of columns -->
      <div class="row">
        <div class="span-one-third">
          <h2>About</h2>
          <p>Will be updated soon. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
          
        </div>
        <div class="span-one-third">
  			<h2>Register</h2>
			<ul>
  				<li><a href="#">Rules and Regulations</a></li>
  				<li><a href="#">Rules and Regulations</a></li>
       </div>
        <div class="span-one-third">
          <h2>Udates</h2>
          <p id="lifestream"></p>          
        </div>
      </div>
*/?>
      <footer>
        <p>&copy; Titiksha 2012</p>
      </footer>

    </div> <!-- /container -->

  <!-- JavaScript at the bottom for fast page loading -->

   <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="assests/js/libs/jquery-1.7.1.min.js"></script>')</script> 


  <!-- scripts concatenated and minified via build script -->
  <script defer src="assests/js/plugins.js"></script>
  <script defer src="assests/js/script.js"></script>
  <!-- end scripts -->


  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-16351077-7'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
</body>
</html>
