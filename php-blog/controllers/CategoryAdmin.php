<?php
require 'views/view_category_admin.php';
require 'models/model_category.php';

class CategoryAdmin{

    // Hiển thị danh sách danh mục
    public function loadAllCategory(){
        $title = "Danh sách danh mục";
    	$category = CategoryModel::getInstance()->getAllCategory();
		ViewCategoryAdmin::getInstance()->loadAllCategory($category, $title);
    }

    // Hiển thị danh sách tiêu đề bài viết có trong danh mục
    public function showListPostInCategory(){
        $title = "Danh sách bài viết";
        $id = isset($_GET['id']) ? (string) (int) $_GET['id'] : 0;
        $post = CategoryModel::getInstance()->showListPostInCategory($id);
        ViewCategoryAdmin::getInstance()->loadListPostInCategory($post, $title);
    }

    // Hiển thị trang thêm danh mục
    public function showPageAdd(){
        $title = "Thêm danh mục";
    	ViewCategoryAdmin::getInstance()->showPageAdd($title);
    }

    // Thực hiện thêm danh mục
    public function add(){
    	if(isset($_POST['btn_add'])){
    		if(!empty($_POST['name_category'])){
                // Nhận tên danh mục
				$name = trim(strtoupper($_POST['name_category']));
    			if(CategoryModel::getInstance()->add($name)){
                    // ajax thông báo
    				header('location: ?controller=CategoryAdmin&action=loadAllCategory');
    			}else{
    				echo"<script>alert('Vui lòng thử lại'); window.location='?controller=CategoryAdmin&action=showPageAdd';</script>";
    			}
    		}else{
    			header('location: ?controller=CategoryAdmin&action=showPageAdd');
    		}
    	}else{
    		header('location: ?controller=CategoryAdmin&action=showPageAdd');
    	}
    }
}