<?php
require 'views/admin.php';
class Admin{
	public function pageAdmin(){
		$title = 'Trang chủ';
		AdminView::getInstance()->showPageAdmin($title);
	}
}