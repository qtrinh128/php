<?php
class DataBase
{
	private static $instance = null;
	private $hostname = 'localhost';
	private $username = 'root';
	private $password = '';
	private $db_name = 'blog';
	private $conn = null;
	private $result = null;

	private function __construct(){}
	public function getInstance(){
		if(!self::$instance){
			self::$instance = new DataBase();
		}
		return self::$instance;
	}

	public function connect(){
		$this->conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->db_name);
		mysqli_set_charset($this->conn, 'utf8');
		if(!$this->conn){
			die('Ket noi that bai');
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