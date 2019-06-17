<?php
//kết nối cơ sở dữ liệu
require_once "model/Database.php";
$db = new Database();
$db->connectDB();

if( isset($_GET['controller'])){
    $controller = $_GET['controller'];
}else {
    $controller = '';
}

switch($controller) {
    case 'show-banner': {
        require_once "controller/show_banner.php";
    }
}
?>