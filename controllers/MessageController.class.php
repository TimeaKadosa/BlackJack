<?php

	class MessageController {

		protected $message;

		public function gameResult($cards) {

			// set message
			if(isset($cards['stand']) && $cards['playerResult'] <= $cards['dealerResult'] && $cards['dealerResult'] <= 21) {
				$message = '<div id="game_result" class="alert alert-danger">
  								<strong>Dealer Won</strong> 
							</div>';
				
			}
			
			elseif (isset($cards['stand']) && $cards['playerResult'] <= 21 && $cards['playerResult'] > $cards['dealerResult'] ) {
				$message = '<div id="game_result" class="alert alert-success">
  								<strong>You Won</strong> 
							</div>';
			}

			elseif (isset($cards['stand']) && $cards['playerResult'] <= 21 && $cards['dealerResult'] > 21) {
				$message = '<div id="game_result" class="alert alert-success">
  								<strong>You Won</strong> 
							</div>';
			}
		
			elseif ($cards['playerResult'] > 21) {
				return $message = 	'<div id="game_result" class="alert alert-danger">
  										<strong>Busted</strong> 
									</div>';
			}	

			return $message;	
		}

	}