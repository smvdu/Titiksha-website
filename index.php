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
<!doctype html>
<html itemscope itemtype="http://schema.org/<?php echo SITE_TYPE; ?>" class=no-js>
<head>
<head>
  <meta charset="utf-8">	
	
  <title><?php echo site_title; ?></title>
		
	
  <meta name="viewport" content="width=device-width,initial-scale=1">	
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	

  <meta itemprop="name" content="<?php print(site_title)?>">
  <meta name="description" content="<?php print(site_description);?>">
  <meta itemprop="description" content="<?php print(site_description);?>">
  <meta itemprop="image" content="<?php print(site_photo_url);?>">
  <meta name="keywords" content="<?php print(site_keywords);?>">
  <meta name="author" content="<?php print(site_author);?>">
	
  <?php get_fb_meta(); ?>
	
  <?php // include site css here ?>	
  <link rel="stylesheet" href="assests/css/style.css"> 
  <link rel="stylesheet" href="assests/css/style.homepage.css">
  <link rel="stylesheet" href="assests/css/lifestream.css">  

	  
  <?php // More ideas for your <head> here: h5bp.com/d/head-Tips ?>

  <?php // All JavaScript at the bottom, except this Modernizr build incl. Respond.js
       // Respond is a polyfill for min/max-width media queries. Modernizr enables HTML5 elements & feature detects; 
      // for optimal performance, create your own custom Modernizr build: www.modernizr.com/download/ ?>
<script src="assests/js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>
<?php /*
  <?php // top fixed navigation ?>  
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

      <?php //Main hero unit for a primary marketing message or call to action ?>
      <div class="hero-unit">
        <h1>Welcome to Titiksha</h1>
        
        <p>Annual tech-fest of Shri Mata Vaishno Devi University</p>
        <p>
          <a class="btn success" href="<?php echo site_titiksha2012_url; ?>">View Events</a>
          <a class="btn success" href="<?php echo site_register_url; ?>">Register &raquo;</a>
        </p>

        <?php //countdown genetrated using jQuery ref: script.js ?>
        <section id="countdown-header" class="countdown"></section>
      </div>

      <div class="alert-message warning" data-alert>
        <a class="close" href="#">×</a>
        <p><strong>Attention!</strong> This website is underconstruction. Expect the thing to change here. No need to worry..!! You can bookmark this site to visit again. :)</p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span-one-third">
          <h2>About</h2>
          <p>The website is in a rapid development mode. It is being updated continuously so expect the things to change here. If you like to suggest or participate in it's development, you are most welcome. Just follow this <a href="https://github.com/smvdu/titiksha-website">link</a> or raise an issue <a href="https://github.com/smvdu/titiksha-website/issues">here.</a></p>
          <!-- <p><a class="btn" href="#">View details &raquo;</a></p> -->
          
        </div>

        <div class="span-one-third">
    			<h2>Quick Links</h2>
          <p>Some quick links to help you understand and participate in Titiksha better. Best of luck!.</p>
          <ul class="quick-link">
            <li><a href="<?php echo site_twitter_url; ?>" class="external link twitter">Twitter Updates</a></li>
            <li><a href="<?php echo site_forum_url; ?>" class="external link forum">Mailing list/ Discussion Forum</a></li>
            <li><a href="<?php echo site_titiksha2012_url; ?>" class="external link events">Events and Rules</a></li>
            <li><a href="<?php echo site_register_url; ?>" class="external link register">Registration Form</a> <span class="label success">New</span></li>          
          </ul>
        </div>
        <div class="span-one-third">
          <h2>Updates</h2>
          <?php // dependency: lifestream.css uses lifestream plugin ?>
          <p id="lifestream"> Loading... </p>
        </div>
      </div> <!--first row (end) -->

      <section id="sponsors">
        <div class="page-header">
          <h1>Our previous Sponsors</h1>
          
        </div>

        <div class="row">
          <div class="span16 icons sponsor-list">
              <?php get_sponsors_list(); ?>
          </div>
        </div>

      </section>


      <footer>
        <p>&copy; Titiksha 2012</p>
      </footer>

    </div> <!-- /container -->

  <!-- JavaScript at the bottom for fast page loading -->
   <?php // Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline ?>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="assests/js/libs/jquery-1.7.1.min.js"><\/script>')</script> 


  <?php //scripts to be concatenated and minified ?>
  <script defer src="assests/js/plugins.js"></script>
  <script defer src="assests/js/script.js"></script>
  <?php //end scripts ?>


  <?php //Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID. ?>
  <script>
    var _gaq=[['_setAccount','UA-16351077-7'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>

</body>
</html>
