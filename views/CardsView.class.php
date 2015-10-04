<?php


	class CardsView extends View {

		protected $tplPlay;
		protected $tplMainPlay;

		public function construct() {

			$this->tplPlay = 'play.tpl';
			$this->tplMainPlay = 'mainPlay.tpl';
		}

		public function getCards ($aData, $message = null) {
  
	 		return $this->getView($this->tplPlay, $aData, $message);

		} 

			public function getMainPlay ($aData, $message = null) {
  
	 		return $this->getView($this->tplMainPlay, $aData, $message);

		} 


		
	}