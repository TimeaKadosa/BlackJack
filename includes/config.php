<?php

	// Database Constants
	defined('DB_HOST') 		? null : define('DB_HOST', 'localhost'); // if defined then (?) return null else (:) define
	defined('DB_USER')   	? null : define('DB_USER', 'root');
	defined('DB_PASS')   	? null : define('DB_PASS', '');
	defined('DB_NAME')   	? null : define('DB_NAME', 'black_jack');
	defined('DB_CHARSET') 	? null : define('DB_CHARSET',	'utf8');


	define('DOCROOT', $_SERVER['DOCUMENT_ROOT']); // 'C:/wamp/www/

	define('SITE_ROOT', DOCROOT.'BlackJack');


	/*
	 * Paths
	 */
    define('PATH_INCLUDES', 	'/includes/');
    define('PATH_LIB',          '/lib/');

    define('BOOTSTRAP_CSS',		'/bootstrap/css/');
	define('BOOTSTRAP_JS',		'/bootstrap/js/');
	define('JS',				'/js/');

	define('URL_CSS',           '/css/');
	define('MAIN_IMAGES',       '/images/main/');
	define('CARDS',       		'/images/cards/');
	define('CHIPS',       		'/images/chips/');


?>												