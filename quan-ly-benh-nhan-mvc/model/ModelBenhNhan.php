<?php
require 'DataBase.php';

class ModelBenhNhan
{
	private static $instance = null;
	private function __construct(){
		
	}
	public static function getInstance(){
		if (!self::$instance) {
			self::$instance = new ModelBenhNhan();
		}
		return self::$instance;
	}

	public function nhanDanhSachBenhNhan(){
		DataBase::getInstance()->connect();
		$sql = "SELECT * FROM khoa INNER JOIN benhnhan ON benhnhan.makhoa = khoa.id";
		// echo $sql;
		DataBase::getInstance()->query($sql);
		$mangBenhNhan = [];
		while ($data= DataBase::getInstance()->fetch()) {
			$mangBenhNhan[] = $data;
		}
		return $mangBenhNhan;
	}
	public function nhanTenKhoa(){
		DataBase::getInstance()->connect();
		$sql = "SELECT * FROM khoa";
		DataBase::getInstance()->query($sql);
		$mangKhoa = [];
		while ($data= DataBase::getInstance()->fetch()) {
			$mangKhoa[] = $data;
		}
		return $mangKhoa;
	}
	public function themBenhNhan($tenbn, $ns, $nnv, $nrv, $mk){
		DataBase::getInstance()->connect();
		$sql = "INSERT INTO `benhnhan` (`mabenhnhan`, `tenbenhnhan`, `ngaysinh`, `ngaynhapvien`, `ngayravien`, `makhoa`) VALUES (NULL, '$tenbn', '$ns', '$nnv', '$nrv', '$mk')";
		DataBase::getInstance()->query($sql);
	}
	public function thongTinBenhNhan($mabenhnhan){
		DataBase::getInstance()->connect();
		$sql = "SELECT * FROM benhnhan WHERE mabenhnhan = $mabenhnhan";
		DataBase::getInstance()->query($sql);
		$data= DataBase::getInstance()->fetch();
		return $data;
	}
	public function xoaBenhNhan($mabenhnhan){
		DataBase::getInstance()->connect();
		$sql = "DELETE FROM `qlbenhnhan`.`benhnhan` WHERE `benhnhan`.`mabenhnhan` = $mabenhnhan";
		DataBase::getInstance()->query($sql);
	}
}