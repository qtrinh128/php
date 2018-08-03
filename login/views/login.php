<?php
class LoginView{

	private static $instance = null;

	public static function getInstance(){
		if(!self::$instance){
			self::$instance = new LoginView();
		}
		return self::$instance;
	}
	public function showPageLogin($title){
		require 'layouts/login.html';
	}
	
}