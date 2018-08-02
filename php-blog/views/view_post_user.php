<?php
	class PostUser{
		
		
		private static $instance = null;
		
		private function __construct(){}
		
		public static function getInstance(){
			if(!self::$instance){
				self::$instance = new PostUser();
			}
			return self::$instance;
		}
		
		public function loadAllPost($post, $title){
			require 'template/post_temp_user/list_post.php';
		}
		public function loadContentPost($contentPost, $title){
			require 'template/post_temp_user/content_post.php';
		}
	}	