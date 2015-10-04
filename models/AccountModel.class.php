<?php

	include PATH_INCLUDES.'/Password.class.php';
	
	class AccountModel extends Model {

		public $fields = [];
		
		public function construct() {

			$this->table = 'users';

			
			$this->fieldsConfig = [
				'id'			=> [
					'validate'	=> [
						'required'	=> false
					]
				],
				'username'		=> [
					'validate'	=> [
						'required'	=> true,
						'maxlength'	=> 20,
						'minlength'	=> 6,
					]
				],
				'first_name'			=> [
					'validate'	=>[
						'required'	=> true,
						'minlength' => 6,
					]
					
				],
				'last_name'		=>	[
					'validate'	=>	[
						'required'	=> true,
						'minlength' => 6,
					]
				],
				'email'			=>	[
					'validate'	=>	[
						'required'	=> true,
						'email'		=> true,
					]
				],
				'password'		=> [
					'retrieve'	=> false,
					'hash'		=> true,
					'validate' => array(
						'required'	=> true,
						'password'	=> true,
						'minlength' => 6,
					)
				],

				'total_chips'		=> [
					'validate' => array(
						'required'	=> false,
					)
				],

				'user_id'		=> [
					'validate' => array(
						'required'	=> false,
					)
				]
			];

			$this->makeFields($this->fieldsConfig);
			
		}

		public function store() {


			
			$hashedPassword = Password::password_encrypt($this->fields['password']);

			$sValuesClause = ":username,:password,:first_name,:last_name,:email  ";

			$fieldName = "username,password,first_name ,last_name ,email";

			$aBinding = array(

						':username' 	=> $this->fields['username'],
						':password' 	=> $hashedPassword,
						':first_name'	=> $this->fields['first_name'],
						':last_name'	=> $this->fields['last_name'],
						':email'		=> $this->fields['email'],
						
						);
		
                
            return $this->insert($sValuesClause,$fieldName,$aBinding);
		}


		public function authenticate($username, $password) {

			// first make the password to the hashed version as it is in the database
			$hashedPassword = Password::password_encrypt($password);

			$sWhereClause = " WHERE username=:username AND password=:password";

			// prepare binding
			$aBinding = array(
				':username' => $username,
				':password' => $hashedPassword

			);
			// get an array limited to one user by username and password
			$this->getRow($sWhereClause, $aBinding);

			// if the result is array and not empty
			if(is_array($this->collection) && count($this->collection) > 0) {

				return true;
			}
		}

		public function login () {

            $_SESSION['user'] = $this->collection[0];
           
            header('location:/home');
			
		}


		public function getTotal($iId) {

			
			$sJoin = " RIGHT JOIN `chips` ON `users`.`id` = `chips`.`user_id` ";
			$sWhereClause = " WHERE `users`.`id`=". $iId;
			// prepare binding
			$aBinding = array(
				':`user`.`id`' => $iId,
				
			);

			$this->getRow($sWhereClause, $aBinding, $sJoin);

			// if the result is array and not empty
			if(is_array($this->collection) && count($this->collection) > 0) {

					return $this->collection[0]['total_chips'];
				
			}
		}

		public function getUser($iId) {

			$sJoin = " RIGHT JOIN `chips` ON `users`.`id` = `chips`.`user_id` ";
			$sWhereClause = " WHERE `users`.`id`=". $iId;
			
			$aBinding = array(
				':`user`.`id`' => $iId,
				
			);

			$this->getRow($sWhereClause, $aBinding, $sJoin);
        
        	return $this->fields; 
		}
		

		public function edit($user) {

			$sSetClause  = " chips.total_chips=" . $user['bankroll'];
			$sJoin = " RIGHT JOIN `chips` ON `users`.`id` = `chips`.`user_id` ";
			$sWhereClause = " WHERE `users`.`id`=". $user['user_id'];
			
			
			$this->update($sSetClause,$aBinding,$sJoin, $sWhereClause);


		}
	}


?>