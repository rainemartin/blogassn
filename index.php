<?php

/*
	 * Name: Raine Padilla
	 * Date: 05/21/2017
	 * Controller for the Gubble Blogs website.
	 */
	
	// require the autoload file
	require_once('vendor/autoload.php');
	
	session_start();
	
	// Create an instance of the base class
	$f3 = Base::instance();
	$f3->set('DEBUG', 3);
	
	// Define a default route
	$f3->route('GET /', function(){
		$view = new View;
		echo $view->render('pages/home.html');
		}
	);
	
	// Define other routes for each page
	$f3->route('GET /about', function(){
		$view = new View;
		echo $view->render('pages/about.html');
		}
	);
	
	$f3->route('GET /login', function(){
		$view = new View;
		echo $view->render('pages/login.html');
		}
	);
	
	$f3->route('GET /register', function(){
		$view = new View;
		echo $view->render('pages/register.html');
		}
	);
	