<?php
require 'views/view_category_user.php';
require 'models/model_category.php';

class Category{

	// Hiển thị danh sách danh mục
    public function loadAllCategory(){
        $title = "Danh sách danh mục";
    	$category = CategoryModel::getInstance()->getAllCategory();
        CategoryUser::getInstance()->loadAllCategory($category, $title);
    }

    // Hiển thị bài viết trong danh mục
    public function showListPostInCategory(){
        $title = "Danh sách bài viết";
        $idCategory = isset($_GET['id']) ? (string) (int) $_GET['id'] : 0;
        $listPost = CategoryModel::getInstance()->showListPostInCategory($idCategory);
        CategoryUser::getInstance()->loadListPostInCategory($listPost, $title);
    }
}