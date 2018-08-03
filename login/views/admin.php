<?php
class AdminView{

	private static $instance = null;

	public static function getInstance(){
		if(!self::$instance){
			self::$instance = new AdminView();
		}
		return self::$instance;
	}
	public function showPageAdmin($title){
		require 'layouts/admin.html';
	}
}