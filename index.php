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
  <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200' rel='stylesheet'> 

	  
  <?php // More ideas for your <head> here: h5bp.com/d/head-Tips ?>

  <?php // All JavaScript at the bottom, except this Modernizr build incl. Respond.js
       // Respond is a polyfill for min/max-width media queries. Modernizr enables HTML5 elements & feature detects; 
      // for optimal performance, create your own custom Modernizr build: www.modernizr.com/download/ ?>
<script src="assests/js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>

  <?php // top fixed navigation ?>  
  <div class="topbar" data-scrollspy="scrollspy">
      <div class="fill">
        <div class="container">
          <a class="brand" href="#">Titiksha <?php echo date('Y')?></a>
          <ul class="nav pull-right">
            <li class="active"><a href="">Home</a></li>
            <li class="dropdown" data-dropdown="dropdown" >
              <!-- <a href="<?php echo site_event_url; ?>">Events</a> -->

              <a href="#" class="dropdown-toggle">Events</a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo site_titiksha2012_url; ?>/category/all-events/mega-event">
                  Mega Events</a></li>
                
                <li class="divider"></li>
                
                <li><a href="<?php echo site_titiksha2012_url; ?>/category/all-events/computer-science-events">
                  Computer Science</a></li>
                <li><a href="<?php echo site_titiksha2012_url; ?>/category/all-events/electronics-n-communication-events">
                  Electronics</a></li>
                <li><a href="<?php echo site_titiksha2012_url; ?>/category/all-events/mechanical-events">
                  Mechnical</a></li>
                <li><a href="<?php echo site_titiksha2012_url; ?>/category/all-events/bio-technology-events">
                  Industrial Bio-Tech.</a></li>
                <li><a href="<?php echo site_titiksha2012_url; ?>/category/all-events/architecture">
                  Architecture</a></li>
                
                <li class="divider"></li>
                
                <li><a href="<?php echo site_titiksha2012_url; ?>/category/all-events/gaming">
                  Gaming</a></li>
                <li><a href="<?php echo site_titiksha2012_url; ?>/category/all-events/non-core-events">
                  Misc. Events</a></li>
                
                <li class="divider"></li>
                <li><a href="<?php echo site_titiksha2012_url; ?>">All Events</a></li>
              </ul>

            </li>
            <li><a href="<?php echo site_forum_url; ?>">Forum</a></li>
            <li><a href="#sponsors">Sponsors</a></li>
            <li><a href="<?php echo site_contact_url; ?>">Contact</a></li>
          </ul>
          <form class="pull-right" action="<?php echo site_titiksha2012_url; ?>" method="get">
              <input type="text" placeholder="Search" name="s">
          </form>

        </div>
      </div>
    </div>

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

<!--       <div class="alert-message success" data-alert>
        <a class="close" href="#">×</a>
        <p><strong>Attention!</strong> The scheduled dated for Titksha 2012 is <strong>25th - 26th</strong> March. Checkout the events <a href="<?php echo site_register_url; ?>">here.</a></p>
      </div> -->
    
      <section id="introduction"><!-- Example row of columns -->
        <div class="row">
          <div class="span-one-third">
            <h2>About</h2>
            <div id="p-about"><?php get_about(); ?></div>            
            
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
        </div> <!--first row (end) --></section>

      <section id="sponsors">
        <div class="page-header">
          <h1>Our Sponsors</h1>
          
        </div>

        <div class="row">
          <div class="span16 icons sponsor-list">
              <?php get_sponsors_list(); ?>
          </div>
        </div>

        <div class="page-header">
          <h1>Our Previous Sponsors</h1>
          
        </div>

        <div class="row">
          <div class="span16 icons sponsor-list">
              <?php get_prev_sponsors_list(); ?>
          </div>
        </div>

     </section>


      <footer>
        <div class="row">
          <div class="span6">&copy; Titiksha 2012 | Shri Mata Vaishno Devi University</div>
          <div class="span10" id="left">
            <a href="#">Home</a> | 
            <a href="https://github.com/smvdu/Titiksha-website">Develop</a> | 
            <a href="https://www.facebook.com/Titiksha2k12/">Facebook</a> |
            <a href="2012/">Events</a> |
            <a href="2012/contacts">Contacts</a> 
          </div>
        </div>
        
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
