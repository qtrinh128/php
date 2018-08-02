<?php
// Điều hướng người dùng
if(isset($_GET['Controller']) && isset($_GET['action'])){
    
    $controller = $_GET['Controller'];
    $method = $_GET['action'];
    require 'Controllers/'.$controller.'.php';
    $obj = new $controller();
    $obj->$method();
}else{
    require 'Controllers/Student.php';
    $student = new Student();
    $student->listStudent();
}