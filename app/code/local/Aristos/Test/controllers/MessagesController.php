<?php
class Aristos_Test_MessagesController extends Mage_Core_Controller_Front_Action{
	public function goodbyeAction()
	{
		echo 'Aristos Goodbye';
	}
	public function testAction(){
		$this->loadLayout();
		$this->renderLayout();
	}
}
