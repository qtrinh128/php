<?php
	include_once 'config/DataBase.php';
	class CategoryModel{
		
		private static $instance = null;
		
		private function __construct(){}
		
		public static function getInstance(){
			if(!self::$instance){
				self::$instance = new CategoryModel();
			}
			return self::$instance;
		}
		
		public function getAllCategory(){
			DataBase::getInstance()->connect();
			$sql = 'SELECT * FROM Category';
			DataBase::getInstance()->query($sql);
			$arrayData = [];
			while($data = DataBase::getInstance()->fetch()){
				$arrayData[] = $data;
			}
			return $arrayData;
		}
		
		public function showListPostInCategory($idCategory){
			DataBase::getInstance()->connect();
			$sql = 'SELECT * FROM post WHERE id_category = '.$idCategory;
			DataBase::getInstance()->query($sql);
			$arrayData = [];
			while($data = DataBase::getInstance()->fetch()){
				$arrayData[] = $data;
			}
			return $arrayData;
		}
		public function add($name){
			DataBase::getInstance()->connect();
			$sql = "INSERT INTO category (id, name) VALUES (null, '$name')";
			DataBase::getInstance()->query($sql);
			if(DataBase::getInstance()->affected() > 0){
				return true;
			}
			return false;
		}
	}		