<?php
require 'views/register.php';
require 'models/register.php';
class Register{
	public function pageRegister(){
		$title = "Register";
		RegisterView::getInstance()->showPageRegister($title);
	}
	public function doRegister(){
		if(isset($_POST['btn-register'])){
			$email = trim($_POST['email']);
			$username = trim($_POST['username']);
			$pass1 = trim($_POST['pwd1']);
			$pass2 = trim($_POST['pwd2']);
			if(empty($email) || empty($username) || empty($pass1)){
				echo "<script>alert('Vui lòng điền đủ thông tin'); window.location = '?controller=Register&action=pageRegister'</script>";
			}
			else if($pass1 != $pass2){
				echo "<script>alert('Vui lòng điền khớp mật khẩu'); window.location = '?controller=Register&action=pageRegister'</script>";
			}else{
				RegisterModel::getInstance()->register($email, $username, $pass1);
				echo "<script>alert('Đăng ký thành công bạn có thể đăng nhập ngay bay giờ'); window.location = '?controller=Login&action=pageLogin' </script>";
			}
		}
		else{
			header('location: ?controller=Register&action=pageRegister');
		}
	}
}