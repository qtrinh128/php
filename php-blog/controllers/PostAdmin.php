<?php
require 'views/view_post_admin.php';
require 'models/model_post.php';
require 'models/model_category.php';

class PostAdmin{

    // Hiển thị danh sách bài biết
    public function loadAllPost(){
        $title = "Danh sách bài viết";
        $post = PostModel::getInstance()->getAllPost();
        ViewPostAdmin::getInstance()->loadAllPost($post, $title);
    }

    // Hiển thị nội dung bài viết
    public function showContentPost(){
        $title = "Nội dung bài viết";
        $id = isset($_GET['id']) ? (string)(int)$_GET['id'] : 0;
        $contentPost = PostModel::getInstance()->getContentPost($id);
        ViewPostAdmin::getInstance()->loadContentPost($contentPost, $title);
    }

    // Hiển thị trang thêm bài viết
    public function showPageAdd(){
        $title = "Thêm bài viết";
        // Nhận về toàn bộ danh mục trong csdl
        $category = CategoryModel::getInstance()->getAllCategory();
        ViewPostAdmin::getInstance()->pageAdd($category, $title);
    }

    // Thực hiện thêm bài viết vào csdl
    public function add(){
        if(isset($_POST['btn_add'])){
            $title = trim($_POST['title_post']);
            $content = trim($_POST['content_post']);
            $author = trim($_POST['author']);
            $picture = trim($_POST['link_pic']);
            $category = trim($_POST['id_category']);
            $date = trim($_POST['date_post']);
            // Kiểm tra thông tin nhập vào có rỗng?
            if(empty($title) || empty($content) || empty($author) || empty($picture) || empty($date)){
                echo"<script>alert('Điền thông tin'); window.location = '?controller=PostAdmin&action=showPageAdd';</script>";
            }else{
                if(PostModel::getInstance()->add($title, $content, $picture, $author, $date, $category)){
                    // Nhận số phần tử của mảng dữ liệu được trả về - 1 (mảng bắt đầu từ 0);
                    // Bài viết vừa được thêm nằm ở cuối mảng có index = lenght
                    $newPost = count(PostModel::getInstance()->getAllPost()) - 1;
                    // Nhận id của bài viết vừa được thêm
                    $idNewPost = PostModel::getInstance()->getAllPost()[$newPost]['id'];
                    // dùng ajax để hiện thị thông báo thêm thành công
                    header('location: ?controller=PostAdmin&action=showContentPost&id='.$idNewPost);
                }else{
                    echo"<script>alert('Vui lòng thử lại'); window.location='?controller=PostAdmin&action=showPageAdd';</script>";
                }
            }
        }else{
            echo"<script>alert('what's going on?'); window.location = '?controller=PostAdmin&action=loadAllPost';</script>";
        }
    }

    // Hiển thị trang sửa bài viết
    public function editPost(){
        $title = "Sửa bài viết";
        $id = isset($_GET['id']) ? (string)(int)$_GET['id'] : false;
        if(!$id){
            ViewPostAdmin::getInstance()->error();
        }else{
            $category = CategoryModel::getInstance()->getAllCategory();
            $post = PostModel::getInstance()->getContentPost($id);
            ViewPostAdmin::getInstance()->editPost($post, $category, $title);
        }
        
    }

    // Thực hiện sửa bài viết
    public function edit(){
        if(isset($_POST['btn_edit'])){
			$id = trim($_POST['id_post']);
			$title = trim($_POST['title_post']);
			$content = trim($_POST['content_post']);
			$author = trim($_POST['author']);
			$picture = trim($_POST['link_pic']);
			$category = trim($_POST['id_category']);
			$date = trim($_POST['date_post']);

			if(empty($title) || empty($content) || empty($author) || empty($picture) || empty($date)){
				echo"<script>alert('Điền thông tin'); window.location = '?controller=PostAdmin&action=loadAllPost';</script>";
			}else{
				if(PostModel::getInstance()->edit($title, $content, $picture, $author, $date, $category, $id)){
                    // dùng ajax để hiện thị thông báo thêm thành công
                    header('location: ?controller=PostAdmin&action=showContentPost&id='.$id);
                }else{
                    echo"<script>alert('Vui lòng thử lại'); window.location='?controller=PostAdmin&action=editPost&id=$id';</script>";
                }
			}
        }else{
			echo"<script>alert('what's going on?'); window.location = '?controller=PostAdmin&action=loadAllPost';</script>";
		}
    }

    // Xóa bài viết
    public function deletePost(){
        $idPost = isset($_GET['id']) ? (string)(int)$_GET['id'] : false;
        if(!$idPost){
            ViewPostAdmin::getInstance()->error();
        }else{
            PostModel::getInstance()->deletePost($idPost);
            echo"<script>alert('Xóa thành công'); window.location='?controller=PostAdmin&action=loadAllPost';</script>";
        }
    }
}