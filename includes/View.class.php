<?php
	class View extends Smarty {
		
	
		protected $sView;
		
		


        public function __construct() {

			parent::__construct();
			
			$this->template_dir		= $_SERVER['DOCUMENT_ROOT'] . '/templates/';
			$this->compile_dir		= $_SERVER['DOCUMENT_ROOT'] . '/cache/templates_c/';
			$this->cache_dir		= $_SERVER['DOCUMENT_ROOT'] . '/cache/smarty_cache/';
			$this->config_dir		= $_SERVER['DOCUMENT_ROOT'] . '/include/smarty/configs/';
			
			# Dev settings
			$this->debugging		= false;
			$this->caching			= false;
			$this->cache_lifetime	= 120;
			
			 //$smarty->error_reporting = E_ALL & ~E_NOTICE;
			
			if (method_exists($this, 'construct')) {
				
				$this->construct();
			}
		}
        
        
		# ============== DYNAMIC VIEW ================ #
		public function getView ($sView, $aData, $message = null) {
    
			if(isset($message)){

				$this->assign('message', $message);

			}
    			
				$this->assign('data', $aData);
				return $this->fetch($sView);

		}


		public function getMainContent($sView, $aData, $message = null) {

			
		}
        
	}