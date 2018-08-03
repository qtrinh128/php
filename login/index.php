<?php
if(isset($_GET['controller']) && isset($_GET['action'])){
	$nameController = $_GET['controller'];
	$method = $_GET['action'];
	require 'controllers/'.$nameController.'.php';
	$controller = new $nameController();
	$controller->$method();
}else{
	require 'controllers/Login.php';
	$res = new Login();
	$res->pageLogin();
}