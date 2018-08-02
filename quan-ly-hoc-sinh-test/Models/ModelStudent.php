<?php
require 'lib/DataBase.php';

Class ModelStudent
{
	private static $instance = null;

	private function __construct(){}

	public static function getInstance(){
		if (!self::$instance) {
			self::$instance = new ModelStudent();
		}
		return self::$instance;
	}
	
	public function getAllStudent($start, $end){
		Database::getInstance()->connect();
		$sql = "SELECT * FROM student LIMIT $start, $end";
		Database::getInstance()->query($sql);
		$arrayStudent = [];
		while($data = Database::getInstance()->fetch()){
			$arrayStudent[] = $data;
		}
		return $arrayStudent;
	}
	
	public function addStudent($nameStudent, $birthDate, $emailStudent, $phoneNumber, $pictureProfile){
		Database::getInstance()->connect();
		$sql = "INSERT INTO `student` (`id`, `nameStudent`, `birthDate`, `emailStudent`, `phoneNumber`, `pictureProfile`) VALUES (NULL, '$nameStudent', '$birthDate', '$emailStudent', '$phoneNumber', '$pictureProfile')";
		Database::getInstance()->query($sql);
		if (Database::getInstance()->affected() > 0){
			return true;
		}
		return false;
	}
	
	public function numRecords(){
        Database::getInstance()->connect();
        $sql = 'SELECT * FROM student';
        Database::getInstance()->query($sql);
        return Database::getInstance()->row();
    }
}