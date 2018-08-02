<?php
require 'model/ModelBenhNhan.php';
require 'view/ViewBenhNhan.php';

class BenhNhan
{
	public function hienThiBenhNhan(){
		$benhnhan = ModelBenhNhan::getInstance()->nhanDanhSachBenhNhan();
		ViewBenhNhan::getInstance()->hienThiDanhSachBenhNhan($benhnhan);
	}
	public function hienThiTrangThemBenhNhan(){
		$khoa = ModelBenhNhan::getInstance()->nhanTenKhoa();
		ViewBenhNhan::getInstance()->hienTrangThemBenhNhan($khoa);
	}
	public function themBenhNhan(){
		if ($_POST['add']) {
			$tenBenhNhan = ucfirst($_POST['tenbenhnhan']);
			$namSinh = $_POST['ngaysinh'];
			$ngayNhapVien = $_POST['ngaynhapvien'];
			$ngayRaVien = $_POST['ngayravien'];
			$maKhoa = $_POST['makhoa'];

			$thoiGianSinh = strtotime($namSinh);
			$thoiGianVaoVien = strtotime($ngayNhapVien);
			$thoiGianRavien = strtotime($ngayRaVien);

			$thoiGianTrongVien = $thoiGianVaoVien + 864000;

			if($tenBenhNhan == "" || $namSinh == "" || $ngayNhapVien == "" || $ngayRaVien == ""){
				echo "<script>alert('Vui lòng điền dữ liệu'); window.location ='?controller=BenhNhan&action=hienThiTrangThemBenhNhan'</script>";
			}else{
				if ($thoiGianVaoVien > $thoiGianRavien) {
					echo "<script>alert('Dữ liệu ngày không chính xác'); window.location ='?controller=BenhNhan&action=hienThiTrangThemBenhNhan'</script>";
				}else if($thoiGianRavien > $thoiGianTrongVien){
					echo "<script>alert('Bệnh nhân không được ở viện quá 10 ngày'); window.location ='?controller=BenhNhan&action=hienThiTrangThemBenhNhan'</script>";
				}else if($thoiGianSinh > $thoiGianVaoVien){
					echo "<script>alert('Dữ liệu năm sinh không chính xác'); window.location ='?controller=BenhNhan&action=hienThiTrangThemBenhNhan'</script>";
				}else{
					ModelBenhNhan::getInstance()->themBenhNhan($tenBenhNhan, $namSinh, $ngayNhapVien, $ngayRaVien, $maKhoa);
					echo "<script>alert('Thêm thành công'); window.location ='?controller=BenhNhan&action=hienThiBenhNhan'</script>";
				}
			}
		}
	}
	public function xoaBenhNhan(){
		$id = $_GET['id'];
		ModelBenhNhan::getInstance()->xoaBenhNhan($id);
		echo "<script>alert('Xóa thành công'); window.location ='?controller=BenhNhan&action=hienThiBenhNhan'</script>";;
	}
	public function trangXoaBenhNhan(){
		$id = $_GET['id'];
		$benhnhan = ModelBenhNhan::getInstance()->thongTinBenhNhan($id);
		ViewBenhNhan::getInstance()->trangXoaBenhNhan($benhnhan);
	}

}