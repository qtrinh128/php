<?php
class DataBase
{
	private static $instance = null;
	private $localhost = 'localhost';
	private $username = 'root';
	private $password = '';
	private $dbName = 'qlbenhnhan';
	private $conn = null;
	private $result = null;

	private function __construct(){}

	public static function getInstance(){
		if (!self::$instance) {
			self::$instance= new DataBase();
		}
		return self::$instance;
	}
	public function connect(){
		$this->conn = mysqli_connect($this->localhost, $this->username, $this->password, $this->dbName);
		mysqli_set_charset($this->conn, 'utf8');
	}
	public function query($sql){
		$this->result = mysqli_query($this->conn, $sql);
	}
	public function row(){
		if ($this->result) {
			$row = mysqli_num_rows($this->result);
		}else{
			$row = 0;
		}
		return $row;
	}
	public function fetch(){
		if ($this->result) {
			$data = mysqli_fetch_assoc($this->result);
		}else{
			$data = 0;
		}
		return $data;
	}
}