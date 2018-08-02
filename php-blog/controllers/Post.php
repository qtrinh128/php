<?php
require 'views/view_post_user.php';
require 'models/model_post.php';

class Post{
	// Hiển thị danh sách tiêu đề bài viết có trong csdl
    public function loadAllPost(){
        $title = "Danh sách bài viết";
    	$post = PostModel::getInstance()->getAllPost();
        PostUser::getInstance()->loadAllPost($post, $title);
    }

    // Hiển thị nôi dung từng bài viết
    public function showContentPost(){
        $title = "Nội dung bài viết";
    	// id bài viết sẽ luôn bằng 0 trong trường hợp người dùng nhập ký tự vào url
    	$id = isset($_GET['id']) ? (string)(int)$_GET['id'] : 0;
    	$contentPost = PostModel::getInstance()->getContentPost($id);
        PostUser::getInstance()->loadContentPost($contentPost, $title);
    }
}