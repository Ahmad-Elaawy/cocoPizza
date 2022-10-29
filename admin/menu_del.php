<?php
    session_start();
    require_once("config.php");


    $id = $_GET['id'];

    $rs = $conn -> prepare('DELETE FROM menus WHERE id =?');
    if($rs->execute([$id])){   
        $_SESSION['msg'] = 'Your item is DELETED successfully';
        header("Location:menus.php");
    }else{
        $_SESSION['msg'] = 'Error! Please call Admin';
        header("Location:menus.php");
    }
    

