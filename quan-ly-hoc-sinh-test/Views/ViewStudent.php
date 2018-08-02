<?php
// Nhận dữ liệu đổ ra giao diện html
class ViewStudent
{
	private static $instance = null;

	private function __construct(){}

	public static function getInstance(){
		if(self::$instance == null){
			return self::$instance = new ViewStudent();
		}
		return self::$instance;
	}
	
	public function showListStudent($student, $numPage){
		require 'templates/ListStudent.php';
	}

	public function showPageAddStudent(){
		require 'templates/PageAddStudent.php';
	}
}