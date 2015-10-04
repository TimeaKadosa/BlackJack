<?php

// load database file
require_once(PATH_INCLUDES.'Database.class.php');

class User extends Database {

	protected static $table_name = 'users';

	protected static $db_fields = ['id','sername','password', 'email', 'first_name', 'last_name'];

	public $id;
	public $username;
	public $email;
	public $password;
	public $first_name;
	public $last_name;

	public function __construct () {

		global $Db;
		$this->Db = $Db;
	}


	/*
	 *  INSERT 
	 */
	public function insert() {
		
		include PATH_INCLUDES.'Password.class.php';
		$hashedPassword = Password::password_encrypt($this->password);

		
		$var = $this->Db->prepare("INSERT INTO ".self::$table_name. "(username, email, password, first_name, last_name) 
			VALUES(:username, :email, :password, :first_name, :last_name)");
		
		$aBinding = array(':username' 	=> $this->username,
						':email'		=> $this->email,
						':password'		=> $hashedPassword,
						':first_name'	=> $this->first_name,
						':last_name'	=> $this->last_name


			);

		$var->execute($aBinding);
		
	}

	public function authenticate() {


	}

	public function login() {


	}
}