<?php
// load config file
require_once(PATH_INCLUDES.'config.php');

class Database {

	private $server;
	private $dbname;
	private $dbuser;
	private $dbpass;
	private $charset;
	private $db;

	function __construct($charset='utf8') {

		$this->server 	= DB_HOST;
		$this->dbname 	= DB_NAME;
		$this->dbuser 	= DB_USER;
		$this->dbpass 	= DB_PASS;
		$this->charset 	= $charset;
		// first make a connection to the database
		$this->connect();

	

	}


	public function connect() {

		try {
			
			$this->db = new PDO('mysql:host='.  $this->server.';dbname='.  $this->dbname.
							';charset='.$this->charset, $this->dbuser, $this->dbpass);
			
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
		} 
		catch (Exception $ex) {

			die($ex->getMessage());
			
		}

	}


	/**************************************************************************
	*		PDOStatement::fetch 											  
	***************************************************************************
	*	Fetches a row from a result set associated with a PDOStatement object.
	*	Gets a row by predefined sql and binding in the current model 
	***************************************************************************/
	public function fetchRow($sql, $binding = null) {
	
		try{
			
			$var = $this->db->prepare($sql);
			$var->execute($binding);	
			return $var->fetch(PDO::FETCH_ASSOC);
			
		} 
		catch (Exception $ex) {

			die($ex->getMessage());
		}
	}
	
	/**************************************************************************
	*		PDOStatement::fetchAll  											  
	***************************************************************************
	*	Returns an array containing all of the result set rows 
	*	Get an array of collection by predefined sql and binding in the current model 
	***************************************************************************/
	
	// 
	public function fetchArray($sql, $binding = null) {
		
		try{
           
			$var = $this->db->prepare($sql);
            
			$var->execute($binding);
			
			return $var->fetchAll(PDO::FETCH_ASSOC);
			
		} catch (Exception $ex) {

			die($ex->getMessage());
		}
	}
    
    public function countRows($sql, $binding = null) {
		
		try{
			$var = $this->db->prepare($sql);
			$var->execute($binding);
			
			$var->fetchAll(PDO::FETCH_ASSOC);
            
            return $var->rowCount();
			
		} catch (Exception $ex) {

			die($ex->getMessage());
		}
	}

	// extends all base built in database functions
	public function execute($sql, $binding = null) {
		
		try{

			$var = $this->db->prepare($sql);
			
			return $var->execute($binding);;
           
			
		} catch (Exception $ex) {

			die($ex->getMessage());
		}
	}


	



}

$Db = new Database();
?>