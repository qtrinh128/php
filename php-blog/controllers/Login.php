<?php
require 'views/view_login.php';
require 'models/model_login.php';
require 'views/view_post_admin.php';

class Login{

    // Hiển thị trang đăng nhập
    public function loadPageLogin(){
        $title = "Đăng nhập";
        LoginView::getInstance()->loadPageLogin($title);
    }

    // Kiểm tra đăng nhập
    public function checkLogin(){
        if(!isset($_POST['email']) && !isset($_POST['pwd'])){
            echo"<script>alert('Vui lòng đăng nhập lại'); window.location='?controller=login&action=loadPageLogin';</script>";
        }else{
            $email = trim($_POST['email']);
            $pwd = trim($_POST['pwd']);   
            if(LoginModel::getInstance()->checkLogin($email, $pwd)){
                session_start();
                $_SESSION['email'] = $email ;
                if(isset($_POST['remember'])){
                    setcookie("username", $email, time() +(86400 * 30), "/");
                    setcookie("password", $pwd, time() +(86400 * 30), "/");
                }
                header('location: ?controller=PostAdmin&action=loadAllPost');
            }else{
                echo"<script>alert('Sai thông tin đăng nhập'); window.location='?controller=login&action=loadPageLogin';</script>";
            }
        }
    }
    
    // Đăng xuất - hủy session và cookie
    // Load về trang đăng nhâp
    public function sessionDestroy(){
        session_start();
        session_destroy();
        setcookie("username", $email, time() - 3600, "/");
        setcookie("password", $pwd, time() - 3600, "/");
        header('location: ?controller=Login&action=loadPageLogin');
    }
}