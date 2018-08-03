<?php
require 'views/login.php';
require 'models/login.php';
class Login{
	public function pageLogin(){
		$title = "Login";
		LoginView::getInstance()->showPageLogin($title);
	}
	public function doLogin(){
		session_start();
		if(isset($_POST['btn-login'])){
			$username = trim($_POST['username']);
			$pass1 = trim($_POST['pwd1']);
			if(empty($username) || empty($pass1)){
				echo "<script>alert('Vui lòng điền đủ thông tin'); window.location = '?controller=Login&action=pageLogin'</script>";
			}else{
				$_SESSION['username'] = $username;
				$_SESSION['pass'] = $pass1;
				if(isset($_POST['remember'])){
					setcookie("username", $username, time()+(86400 * 30), "/");
					setcookie("pass", $pass1, time()+(86400 * 30), "/");
				}
				$check = LoginModel::getInstance()->login($username, $pass1);
				if($check == true){
					echo "<script>alert('Đăng nhập thành công'); window.location = '?controller=Admin&action=pageAdmin'</script>";
				}else{
					echo "<script>alert('Đăng nhập thất bại'); window.location = '?controller=Login&action=pageLogin'</script>";
				}
			}
		}
		else{
			header('location: ?controller=Login&action=pageLogin');
		}
	}
	public function logout(){
		session_start();
		session_destroy();
		// setcookie("username", $email, time() - 3600, "/");
  //       setcookie("pass", $pwd1, time() - 3600, "/");
        header('location: ?controller=Login&action=pageLogin');
	}
}