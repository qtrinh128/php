<?php
// error_reporting(0);
if(isset($_GET['controller']) && isset($_GET['action'])){
    $controller = $_GET['controller'];
    $method = $_GET['action'];
    require 'controllers/'.$controller.'.php';
    $controller = new $controller();
    $controller->$method();
}else{
    require 'controllers/post.php';
    $post = new Post();
    $post->loadAllPost();
}
