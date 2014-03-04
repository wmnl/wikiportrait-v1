<?php
	# config
	define ('DB_HOST', 'localhost'); 		// host for your database. usually 'localhost' will do ok
	define ('DB_USER', 'root'); 			// username for acces to the database
	define ('DB_PASS', ''); 				// password for the database 
	define ('DB_DATABASE', 'uploadwizard'); // the database you have made for the tables of this script	
	
	define ('TB_PREFIX', '');
	define ('TB_MESSAGES', TB_PREFIX.'messages');
	define ('TB_IMAGES', TB_PREFIX.'images');
	
	define ('GE_DEBUG', 0);	
	define ('GE_LANGUAGE', 'nl'); 			// default language
	
	define ('ABSPATH', '/Users/hay/htdocs/uploadwizard/web/');
	define ('GE_URL', 'http://localhost/uploadwizard/web/');
	define ('GE_HOME', GE_URL.'index.php');
	define ('GE_WIZARD', GE_URL.'wizard.php');
	define ('GE_IMAGES_PATH', ABSPATH.'uploads/');
	
	$ALLOWED_EXTENSIONS = array(".png", ".jpg", ".jpeg", ".gif");	 // allowed extensions for image uploads, NOTE THE DOT (.) before every extension!
	define ('GE_MIN_RESOLUTION', 480);
	
	define ('GE_OTRS_MAIL', 'info-nl@wikimedia.org');
	define ('GE_OTRS_FROM', 'uploads@wikiportret.nl');
	
	error_reporting(0); // set this to 'E_ALL ^ E_NOTICE' for normal error reporting, SET TO ZERO FOR PRODUCTION USE!
?>