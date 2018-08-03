<?php
class RegisterView{

	private static $instance = null;

	public static function getInstance(){
		if(!self::$instance){
			self::$instance = new RegisterView();
		}
		return self::$instance;
	}
	public function showPageRegister($title){
		require 'layouts/register.html';
	}
	
}