<?php
    if( isset($_GET['action'])){
        $action = $_GET['action'];
    }else {
        $action = '';
    }

    switch($action) {
        case 'show': {
            $result = $db->getData();
            require_once "view/view_banner.php";

        }
    }
?>