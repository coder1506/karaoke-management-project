<?php
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");

//file index.php gốc của app

//theo mô hình mvc, url của bạn đang có dạng là:
//index.php?controller=name&action=name
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'mon';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$controller = ucfirst($controller); 
$controller .= "Controller"; 
$path_controller = "controllers/$controller.php";

if (!file_exists($path_controller)) {
  die('Trang không tồn lại');
}

require_once "$path_controller";

$object = new $controller();

//Kiểm tra tồn tại phương thưc
if (!method_exists($object, $action)) {
  die("Không tồn tại phương thức $action của class $controller");
}
$object->$action();

?>