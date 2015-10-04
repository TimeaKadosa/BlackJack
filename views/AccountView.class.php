<?php


class AccountView extends View {

	protected $tplAccount;
	protected $tplEditAccount;


	public function construct() {

		$this->tplAccount = 'account.tpl';
		$this->tplEditAccount = 'editAccount.tpl';
	}


	public function getAccount ($Data) {
  
	 	return $this->getView($this->tplAccount, $Data);

	} 

	public function editAccount ($Data) {
  
	 	return $this->getView($this->tplEditAccount, $Data);

	} 
		

}