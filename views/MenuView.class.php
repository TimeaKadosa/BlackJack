<?php

	class MenuView extends View {

		protected $tplPageMenu;
		protected $tplNavMap;

		protected function construct() {

			$this->tplPageMenu = 'menu.tpl';
			$this->tplNavMap = 'nav_map.tpl';
		}

		public function getMenuView($Data, $active) {

			return $this->getView($this->tplPageMenu, $Data, $active);

		}

		public function getNavMapView($Data, $active) {

			return $this->getView($this->tplNavMap, $Data, $active);

		}


	}


?>