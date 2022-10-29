<?php
    session_start();
    require_once("config.php");

    // to do 
    // check POST array & validation

    // echo"<pre>";
    // print_r($_POST);

    $title = $_POST['title'];
    $price = $_POST['price'];
    $img = $_POST['image'];
    $info = $_POST['info'];
    $status = $_POST['status'];
    $id = $_POST['id'];

    // update

    $rs = $conn->prepare("UPDATE menus SET title=?, price=?, img = ?, info = ?, item_status=? WHERE id =?");

    if($rs->execute([$title,$price,$img,$info,$status,$id])){
        $_SESSION['msg'] = "Your Item Is Updated Successfully";
        header("Location: menus.php");
    } else {
        $_SESSION['msg'] = "ERROR! Please Call Admin";
        header("Location: menus.php");
    }