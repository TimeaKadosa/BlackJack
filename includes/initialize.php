
<?php
		/*
	 * Set character encoding
	 */
	ini_set('default_charset', 'utf-8');
	header('Content-Type: text/html; charset=utf-8');
    
    ini_set('display_errors', 1);
    error_reporting(E_ALL & ~E_NOTICE);
    
	session_start();

		/*
	 * Include configs, bootstraps and such
	 */
	include('/includes/config.php');

	/*
	 * Include base classes
	 */
	require_once(PATH_INCLUDES . 'user.class.php');


	/*
	 * Include libs
	 */
	include(PATH_LIB . 'Smarty/libs/Smarty.class.php');

	//include('/includes/Database.class.php');
	include('/includes/Model.class.php');
	include('/includes/View.class.php');
	include('/includes/Controller.class.php');
	
	//include('/includes/Validation.class.php');
	//include('/includes/ErrorHandler.class.php');
	
	include('/includes/functions.php');
	
	// Load core objects
	// require_once(LIB_PATH. '\session.php');
	// require_once(LIB_PATH. '\databse.php');


	/*
	 * Routing
	 */
	/*
	 * Make uriParts of the uri to use in a router
	 */
	$uri = $_SERVER['REQUEST_URI'];

	// Explode the uri into uriParts
	$route = explode('/', $uri);

	// remove the first empty part  (BlackJack)
	array_shift($route);

	// Set the internal pointer of an array to its last element
	$endArray = end($route);
	// remove the end if its empty
	if (empty($endArray)) {	
		
		array_pop($route);	// Pop the element off the end of array
	} 

	if (empty($route)) {
		$route[0] = 'home';
	}


	$GLOBALS['route'] = $route;
	//var_dump($GLOBALS['route']);




?>