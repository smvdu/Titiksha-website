<?php	
	define('site_name',"Titiksha");
	define('site_title', 'Annual Tech-Fest of Shri Mata Vaishn University');
	define('site_type', 'Organisation');
	
	define('site_description', "XparK is annual tech-fest of Shri Mata Vaishno Vaishno Devi Unviersity.");
	
	define('site_keywords', "titiksha 2012, social coding, open-source, competition, programming, coding, annual, smvdu, tech-fest, festival, smvd university, events, discussion");
	define('site_photo_url', "");
	define('site_author', "Saurabh Kumar and contributors (https://github.com/SaurabhKumar/titiksha-website)";
	
	define('site_twitter_url', "https://twitter.com/titikshasmvdu");
	define('site_forum_url', "http://groups.google.com/group/titiksha");
	define('site_url',"http://titiksha.smvdu.net.in");
	define('site_fb_appid','');
	
	
	/*
	 * settings.
	 *
	 ************************************/
	
	define('DEBUG', false);

	# page settings
	define('BASE_URL', get_site_path());
	

	# site settings
	define('USE_DATABASE', FALSE);

	# email settings
	define('FROM_EMAIL_ADDRESS', '');

	# mysql database settings
	if (USE_DATABASE) {
		if (!strstr(BASE_URL, 'projects')) {
			define('DB_HOST', '');
			define('DB_USER', '');
			define('DB_PASS', '');
			define('DB_DATABASE', '');
		} else {
			define('DB_HOST', '127.0.0.1');
			define('DB_USER', 'root');
			define('DB_PASS', 'admin');
			define('DB_DATABASE', 'admin_test');
		}
		connect_database();
	}
