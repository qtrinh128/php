<?php
	class LoginView{
		
		
		private static $instance = null;
		
		private function __construct(){}
		
		public static function getInstance(){
			if(!self::$instance){
				self::$instance = new LoginView();
			}
			return self::$instance;
		}
		
		
		public function loadPageLogin($title){
			require 'template/login_temp/login.php';
		}
	}	