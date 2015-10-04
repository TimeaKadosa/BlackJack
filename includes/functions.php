<?php
	spl_autoload_register('autoload');
	function autoload($classname)
	{
		if (preg_match('/[a-zA-Z]+Controller$/', $classname)) {
			$sFile = '/controllers/' . $classname . '.class.php';
		} 
		elseif (preg_match('/[a-zA-Z]+Model$/', $classname)) {
			$sFile = '/models/' . $classname . '.class.php';
		} 
		elseif (preg_match('/[a-zA-Z]+View$/', $classname)) {
			$sFile = '/views/' . $classname . '.class.php';
		}

		if (file_exists($_SERVER['DOCUMENT_ROOT'].$sFile)) {
			include($_SERVER['DOCUMENT_ROOT'].$sFile);
			return true;
		}

		return false;
	}
	
	function routeIsId($mRoutePart) {
				
		if (empty($mRoutePart) || is_numeric($mRoutePart) ) {
			return true;
		}
		
		return false;
	}
	