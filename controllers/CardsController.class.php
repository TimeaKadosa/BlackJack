<?php

	class CardsController extends Controller {

		public function construct() {

			$this->Model = new CardsModel();
			$this->View = new CardsView();
			
		}


		public function deal($bet, $bankroll) {

			
			$deck = $this->Model->createDeck();
			// draw the first 2 cards 
			$cards 	= $this->drawCard($deck);

			$cards['playerResult'] 	= $this->getRoundResult($cards['hand']);
			$cards['dealerResult'] 	= $this->getRoundResult($cards['dealer']);
			$cards['deal'] 			= true;

			$cards['bet'] = $bet;
			$cards['bankroll'] = $bankroll;
			$_SESSION['cards'] = $cards;
			

			return $cards;
			
		}

		public function drawCard($deck) {
			
			// randomize the order of the elements in the deck
			shuffle($deck);

			$cards = [];

			// get the first 2 cards with their name and value and put them in cards array
			for ($i = 0; $i < 2; $i++) {

	    		$cards['hand'][] = array_shift($deck);
	    		$cards['dealer'][] = array_shift($deck);

			}
				$cards['remainsCards'] = $deck;

			return $cards;

		}

		public function stand($cards) {

			while ($cards['dealerResult'] <= 16) {

				$card  = array_shift($cards['remainsCards']);
				array_push($cards['dealer'], $card);

				$cards['dealerResult'] 	= $this->getRoundResult($cards['dealer']);
				
				$_SESSION['cards'] = $cards;
					
			}
			
			$cards['stand'] = true;
			$cards = $this->checkGameResult($cards);
			
			return $cards;
		}


		public function hit($cards) {
		
			$card  = array_shift($cards['remainsCards']);
			array_push($cards['hand'], $card);

			$cards['playerResult'] 	= $this->getRoundResult($cards['hand']);
			$cards['hit'] = true;
			$cards = $this->checkGameResult($cards);

			$_SESSION['cards'] = $cards;
			
			return $cards;
		}

	
		public function getRoundResult ($cards) {
			
			$result = 0;
		
			foreach ($cards as $card) {
			
				$result += $card['value'];	
			}

			return $result;
		}


		public function checkGameResult ($cards) {

			$user = new AccountController();
			
			if(isset($cards['stand']) && $cards['playerResult'] <= $cards['dealerResult'] && $cards['dealerResult'] <= 21) {				
				// lose
				$cards['win'] = 0;
				$user->updateChips($cards);				
			}
			
			elseif (isset($cards['stand']) && $cards['playerResult'] <= 21 && $cards['playerResult'] > $cards['dealerResult'] ) {
				// win
				$cards['win'] = $cards['bet'] *2;
				$cards['bankroll'] = $cards['win'] + $cards['bankroll'];
				$user->updateChips($cards);
			}

			elseif (isset($cards['stand']) && $cards['playerResult'] <= 21 && $cards['dealerResult'] > 21) {
				// win
				$cards['win'] = $cards['bet'] *2;
				$cards['bankroll'] = $cards['win'] + $cards['bankroll'];
				$user->updateChips($cards);
			}
		
			elseif ($cards['playerResult'] > 21) {
				// lose
				$cards['win'] = 0;
				$user->updateChips($cards);
			}	

			return $cards;	

			}


		

	}

?>