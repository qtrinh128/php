<?php
require 'config/database.php';
class LoginModel{

	private static $instance = null;

	public static function getInstance(){
		if(!self::$instance){
			self::$instance = new LoginModel();
		}
		return self::$instance;
	}
	public function login($username, $pass){
		DataBase::getInstance()->connect();
		$sql = "SELECT * FROM `user` WHERE username ='$username' and pass = '$pass'";
		DataBase::getInstance()->query($sql);
		$row = DataBase::getInstance()->row();
		if($row > 0){
			return true;
		}else{
			return false;
		}
	}
	
}