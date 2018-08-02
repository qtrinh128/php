<?php
class Error
{
	private static $instance = null;

	private function __construct(){}

	public static function getInstance(){
		if(!self::$instance){
			self::$instance = new Error();
		}
		return self::$instance;
	}

	public function error($failure, $controller, $action){
		require 'layout/Failure.php';
	}
}