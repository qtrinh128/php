<?php
class Success
{
	private static $instance = null;

	private function __construct(){}

	public static function getInstance(){
		if(!self::$instance){
			self::$instance = new Success();
		}
		return self::$instance;
	}

	public function success($success, $controller, $action){
		require 'layout/Success.php';
	}
}