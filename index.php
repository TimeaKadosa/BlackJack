<?php
/*
	 * Include configs, bootstraps and such
	 */
	include('/includes/initialize.php');

	switch($route[0]) {

		

		/**********************************************************
		*		ACCOUNT
		**********************************************************/
		case 'account':

			switch($route[1]) {

				case routeIsId($route[1]):

					$Controller = new AccountController();
					$Account 	= $Controller->getUser($route[1]);

					$AccountView 		= new AccountView();
					$sMainContentView 	= $AccountView->getAccount($Account);

					break; 


				switch ($route[2]) {

					# account/$iId/edit
					case 'edit':

					$Controller = new AccountController();
					$Account 	= $Controller->getUser($route[1]);

					$AccountView 		= new AccountView();
					$sMainContentView 	= $AccountView->editAccount($Account);

						
						break;

					# account/$iId/delete
					case 'delete':

						break;

				}
			}

		break;		
		

		case 'signup':

			$signupView = new View();
			$sMainContentView = $signupView->fetch('signup.tpl');


			if($_POST){

				$Controller = new AccountController();

				if ($Controller->signup($_POST)) {
							
							
				} 
				else {
							
					/*$errors = $Controller->getErrors();
							
					$errorView = new AccountView();
					$sMainContentView = $errorView->signup($errors);*/
				}
					
			}

			break;	

		case 'login':


			$loginView = new View();
			$sMainContentView = $loginView->fetch('login.tpl');

			if($_POST){

				$Controller = new AccountController();

				$user = $Controller->login($_POST['username'],$_POST['password']);
				
			}
			

			break;

		case 'logout':

			$Controller = new AccountController();
			$Controller->logout();

			header('location:/home');	


		/*********************************************************
		*		GAME
		*********************************************************/	
		case 'instructions':

			$rulesView = new View();
			$sMainContentView = $rulesView->fetch('rules.tpl');

			break;

		case 'play':

			$CardsView 			= new CardsView();
			$userController		= new AccountController();

			$userId = $_SESSION['user']['id'];

			if (isset($userId)) {

				$totalChips = $userController->getTotalChips($userId);

				$sMainContentView 	= $CardsView->getMainPlay($totalChips);
			}
			else{
				$sMainContentView 	= $CardsView->fetch('play.tpl');

			}
			

			if(isset($_POST)) {

				$CardsController 	= new CardsController();
				$MessageController 	= new MessageController();
				$CardsView 			= new CardsView();


				if(isset($_POST['deal'])){

					$bet = $_POST['bet'];
					$bankroll = $_POST['bankroll'];
					
					$cards = $CardsController->deal($bet, $bankroll);
			
					$sMainContentView = $CardsView->getCards($cards,$message);
				

				}
				elseif(isset($_POST['hit'])) {

					$previousRound = $_SESSION['cards'];
					$previousRound['user_id'] = $_POST['userId'];

					$cards = $CardsController->hit($previousRound);
					
					$message = $MessageController->gameResult($cards);
					$sMainContentView = $CardsView->getCards($cards, $message);

				}
				elseif(isset($_POST['stand'])) {

					$previousRound = $_SESSION['cards'];
					$previousRound['user_id'] = $_POST['userId'];
					
					$cards 		= $CardsController->stand($previousRound);

					$message 	= $MessageController->gameResult($cards);
					
					$sMainContentView = $CardsView->getCards($cards, $message);	
				}


			}
			
			break;

		case 'buyChips':

			break;
			

		case 'home':

			$homeView = new View();
			$sMainContentView = $homeView->fetch('home.tpl');

		default: 

		break;


	}


	

	/*
	 * Menu
	 */
	$MenuCtrl 	= new MenuController();

	$active = $route[0]; 
	$sMenuView 	= $MenuCtrl->getMenu($active);

	/*
	* NavMap
	*/
	$sNavMapView 	= $MenuCtrl->getNavMap($active);

	/*
	 * Display the page
	 */
	$Mainview = new View(); 
	// load the main content
	$Mainview->assign('sMainContentView', isset($sMainContentView) ? $sMainContentView : null);
	$Mainview->assign('sNavMapView', isset($sNavMapView) ? $sNavMapView : null);
	$Mainview->assign('sMenuView', isset($sMenuView) ? $sMenuView : null);
	
	$Mainview->display("index.tpl");
	

