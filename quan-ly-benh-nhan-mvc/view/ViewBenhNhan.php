<?php
class ViewBenhNhan
{
	private static $instance = null;
	private function __construct(){
		
	}
	public static function getInstance(){
		if (!self::$instance) {
			self::$instance = new ViewBenhNhan();
		}
		return self::$instance;
	}
	public function hienThiDanhSachBenhNhan($benhnhan){
		require 'temp/danhsachbenhnhan.php';
	}
	public function hienTrangThemBenhNhan($khoa){
		require 'temp/thembenhnhan.php';
	}
	public function trangXoaBenhNhan($benhnhan){
		require 'temp/xoabenhnhan.php';
	}
}