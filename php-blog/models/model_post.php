<?php
include_once 'config/DataBase.php';
class PostModel{
	
	private static $instance = null;
	
	private function __construct(){}
	
	public static function getInstance(){
		if(!self::$instance){
			self::$instance = new PostModel();
		}
		return self::$instance;
	}
	
    public function getAllPost(){
        DataBase::getInstance()->connect();
        $sql = "SELECT * FROM post";
        DataBase::getInstance()->query($sql);
        $arrayData = [];
        while($data = DataBase::getInstance()->fetch()){
            $arrayData[] = $data;
        }
        return $arrayData;
    }

    public function getContentPost($id){
        DataBase::getInstance()->connect();
        $sql = 'SELECT * FROM post WHERE id = '.$id;
        DataBase::getInstance()->query($sql);
        return DataBase::getInstance()->fetch();
    }

    public function add($title, $content, $picture, $author, $date, $category){
        DataBase::getInstance()->connect();
        $sql = "INSERT INTO `post` (`id`, `title`, `content`, `img`, `author`, `time_post`, `id_category`) VALUES (NULL, '$title', '$content', 'picture', '$author', '$date', '$category')";
        DataBase::getInstance()->query($sql);
        if(DataBase::getInstance()->affected() > 0){
            return true;
        }
        return false;
    }
	public function edit($title, $content, $picture, $author, $date, $category, $id){
		DataBase::getInstance()->connect();
		$sql = "UPDATE post SET title = '$title', content = '$content', img = '$picture', author = '$author', time_post = '$date', id_category = '$category' WHERE post.id = $id";
        DataBase::getInstance()->query($sql);
        if(DataBase::getInstance()->affected() > 0){
            return true;
        }
		return false;
	}
    public function deletePost($id){
        DataBase::getInstance()->connect();
        $sql = 'DELETE FROM post WHERE post.id = '.$id;
        DataBase::getInstance()->query($sql);
    }
}