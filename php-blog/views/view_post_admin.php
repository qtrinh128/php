<?php
	class ViewPostAdmin{
		
		
		
		private static $instance = null;
		
		private function __construct(){}
		
		public static function getInstance(){
			if(!self::$instance){
				self::$instance = new ViewPostAdmin();
			}
			return self::$instance;
		}
		
		public function loadAllPost($post, $title){
			require 'template/post_temp_admin/list_post.php';
		}

		public function loadContentPost($post, $title){
			require 'template/post_temp_admin/content_post.php';
		}

		public function pageAdd($category, $title){
			require 'template/post_temp_admin/page_add_post.php';
		}

		public function editPost($post, $category, $title){
			require 'template/post_temp_admin/edit_post.html';
		}
		
		public function error(){
			require 'layout/error_admin.php';
		}
	}	