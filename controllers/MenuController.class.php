<?php

	class MenuController extends Controller {

		protected function construct() {

			$this->Model 	= new MenuModel();
			$this->View 	= new MenuView();


		}


		public function getMenu($active = null) {

			$this->Model->getRow();

			return $this->View->getMenuView($this->Model->collection, $active);

		}

		public function getNavMap($active = null) {

			return $this->View->getNavMapView($this->Model->collection, $active);

		}

	}



?>