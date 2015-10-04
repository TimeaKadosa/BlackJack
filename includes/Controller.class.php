<?php

class Controller {
	

	public function __construct() {

			$this->construct();
	}


	public function getOne($iId) {
            
        $this->Model->getRow($iId);
        return $this->Model->fields; 
    }


	
}


?>