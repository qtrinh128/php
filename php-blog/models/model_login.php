<?php
require 'config/DataBase.php';
class LoginModel{
	
	private static $instance = null;
	
	private function __construct(){}
	
	public static function getInstance(){
		if(!self::$instance){
			self::$instance = new LoginModel();
		}
		return self::$instance;
	}
	
    public function checkLogin($email, $pwd){
        DataBase::getInstance()->connect();
        $sql = "SELECT * FROM login WHERE email = '%s' and password = '%s'";
        $query = sprintf($sql, mysql_real_escape_string($email), mysql_real_escape_string($pwd)) ;
       	DataBase::getInstance()->query($query);
        if(DataBase::getInstance()->row() == 1){
            return true;
        }
        return false;
    }
}