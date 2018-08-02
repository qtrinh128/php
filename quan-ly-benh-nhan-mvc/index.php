<?php
if (isset($_GET["controller"]) || isset($_GET["action"])) {
	$controller = $_GET["controller"];
	$action = $_GET["action"];
	require 'controller/'.$controller.'.php';
	$obj = new $controller();
	$obj->$action();
}else{
	require 'controller/BenhNhan.php';
	$benhnhan = new BenhNhan();
	$benhnhan-> hienThiBenhNhan();
}