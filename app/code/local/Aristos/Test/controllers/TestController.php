<?php

class Aristos_Test_TestController extends Mage_Core_Controller_Front_Action {
	public function goodbyeAction() {
		echo 'Aristos TEST Goodbye';
	}
	
	public function indexAction() {
		$this->loadLayout();
		$this->renderLayout();
	}
	
	public function testAction() {
		$this->loadLayout();
		$this->renderLayout();
	}
}