<?php

	class AccountController extends Controller{

		public function construct() {

			$this->Model = new AccountModel();
			$this->View = new AccountView();
		}


		public function signup($aPosted) {

			// check if the inputs are valide 
			if($this->Model->put($aPosted)) {
				
				// if so then store them 
 				$this->Model->store();

			}
		}

		public function login($username, $password) {

			// take username and password and check in the database
			if($this->Model->authenticate($username, $password)) {

				$result = $this->Model->login();
				
				return $result;
			}
			else {

				return false;
			}
		}

		public function logout() {

              session_destroy();			
		}


		public function loggedin() {

			if(isset($_SESSION['user'])) {
				
				return true;
			}
			else {
				return false;
			}
		}

		public function getUser($iId) {

			$result = $this->Model->getUser($iId);

			return $result;
		}

		public function getTotalChips($iId) {

			$result = $this->Model->getTotal($iId);
			
			return $result;

		}


		public function updateChips($userChips) {

			return $this->Model->edit($userChips);
			
		}

		public function editAccount() {

			
		}



	}




?>