<?php


	class CardsModel extends Model {


		protected $colors;
		protected $cards;


		public function __construct() {

				// Set colors and cards
			$this->colors = array ('Spades', 'Hearts', 'Clubs', 'Diamonds'); 

			$this->cards	= array (
						'Two' 	=> 2, 
						'Three' => 3, 
						'Four' 	=> 4, 
			    		'Five'	=> 5, 
			    		'Six'	=> 6, 
			    		'Seven'	=> 7, 
			    		'Eight' => 8, 
			    		'Nine'	=> 9, 
			    		'Ten'	=> 10, 
			    		'Jack' 	=> 10, 
			    		'Queen' => 10, 
			    		'King' 	=> 10, 
			    		'Ace' 	=> 11
	    				);

			}
		
		public function createDeck() {



			foreach ($this->colors as $color) {
			    
			    foreach ($this->cards as $card => $value) {

			        $deck[] = array('card'=>$card, 'color'=>$color, 'value' => $value );
			    }
			}

			// Return the deck
		
			return $deck;
		
		}




	}