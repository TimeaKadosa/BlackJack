<?php

	class MenuModel extends Model {

		public function construct() {

			$this->table = 'menu';

			
			$this->fieldsConfig = [

				'id'			=> [
					'validate'	=> [
						'required'	=> false
					]
				],
				'name'		=> [
					'validate'	=> [
						'required'	=> false
					]
				],
				'type'			=> [
					'validate'	=>[
						'required'	=> false
					]
					
				],

				'path'			=> [
					'validate'	=>[
						'required'	=> false
					]
					
				]
				
			];

			$this->makeFields($this->fieldsConfig);

		}
	}

?>