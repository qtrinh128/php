<?php
require 'config/database.php';
class RegisterModel{

	private static $instance = null;

	public static function getInstance(){
		if(!self::$instance){
			self::$instance = new RegisterModel();
		}
		return self::$instance;
	}
	public function register($email, $username, $pass){
		DataBase::getInstance()->connect();
		$sql = "INSERT INTO `user` (`id`, `email`, `username`, `pass`) VALUES (NULL, '$email', '$username', '$pass')";
		DataBase::getInstance()->query($sql);
	}
	
}