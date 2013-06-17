<?php
	require_once('php_helper_class_library/class.biNu.php');
	
	// Assign application configuration variables during constructor
	$app_config = array (
		'dev_id' => 17768,								// Your DevCentral developer ID goes here
		'app_id' => 5924,								// Your DevCentral application ID goes here
		'app_name' => 'Telecel Helpdesk App',				// Your application name goes here
		'app_home' => 'http://binu-telecel.azurewebsites.net/',	// Publically accessible URI
		'ttl' => 1										// Your page "time to live" parameter here
	);

	try {
		// Construct biNu object
		$binu_app = new biNu_app($app_config);	
		$binu_app->time_to_live = 60;
			
		//Define Styles
		$binu_app->add_style( array('name' => 'header', 'color' => '#FF000', 'size' => '20') );
		$binu_app->add_style( array('name' => 'intro', 'color' => '#FF0000') );
		$binu_app->add_style( array('name' => 'body_text', 'color' => '#0000FF') );	
		
		$binu_app->add_text("Telecel Helpdesk App -> Home -> Experiences",'header');	
		$binu_app->add_text("",'intro');		
		
		;
		
		$binu_app->add_link("#", "facebook_like_comes_here", "intro");
		$binu_app->add_link("#", "twitter_follow_comes_here", "intro");
		
		$binu_app->add_link($binu_app->application_URL , "App Home", "intro");
		$binu_app->add_link("../home/" , "Back to Home Menu", "intro");
		$binu_app->add_link("http://apps.binu.net/apps/mybinu/index.php" , "biNu Home", "intro");
				
		/* Show biNu page */
		$binu_app->generate_BML();
	
	} catch (Exception $e) {
		app_error('Error: '.$e->getMessage());
	}

?>
