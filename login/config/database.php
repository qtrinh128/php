<?php
class DataBase{
	private static $instance = null;
	private $host = 'localhost';
	private $user = 'root';
	private $pass = '';
	private $dbName = 'login';
	private $result = null;
	private $conn = null;

	public static function getInstance(){
		if(!self::$instance){
			self::$instance = new DataBase();
		}
		return self::$instance;
	}

	public function connect(){
		$this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->dbName);
		mysqli_set_charset($this->conn, 'utf8');
	}
	public function query($sql){
		$this->result = mysqli_query($this->conn, $sql);
	}
	public function row(){
		if($this->result){
			$row = mysqli_num_rows($this->result);
		}else{
			$row = 0;
		}
		return $row;
	}
	public function fecth(){
		if($this->result){
			$data = mysqli_fetch_assoc($this->result);
		}else{
			$data = 0;
		}
		return $data;
	}
	public function affected(){
		if($this->result){
			$num = mysqli_affected_rows($this->result);
		}else{
			$num = 0;
		}
		return $num;
	}
}