<?php
class DataBase
{
	private static $instanse = null;
	private $hostName = 'localhost';
	private $userName = 'root';
	private $password = '';
	private $dbNname = 'test';
	private $conn = null;
	private $result = null;

	private function __construct(){}

	public static function getInstance(){
		if (!self::$instanse) {
			self::$instanse = new DataBase();
		}
		return self::$instanse;
	}

	public function connect(){
		$this->conn = mysqli_connect($this->hostName, $this->userName, $this->password, $this->dbNname);

		if (!$this->conn){
			die("Kết nối thất bại");
			mysqli_close($this->conn);
		}else{
			mysqli_set_charset($this->conn, 'utf8');
		}
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

	public function fetch(){
		if($this->result){
			$data = mysqli_fetch_assoc($this->result);
		}else{
			$data = 0;
		}
		return $data;
	}
	
	public function affected(){
		if($this->result){
			$num = mysqli_affected_rows($this->conn);
		}else{
			$num = 0;
		}
		return $num;
	}
}