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

    // insert into menus (title,price,img.info,item_status) values()

    $rs = $conn->prepare("INSERT INTO menus (title,price,img,info,item_status) VALUES (?,?,?,?,?)");

    if($rs->execute([$title,$price,$img,$info,$status])){
        $_SESSION['msg'] = "Your Meal Is Add Successfully";
        header("Location: menus.php");
    } else {
        $_SESSION['msg'] = "ERROR! Please Call Admin";
        header("Location: menus.php");
    }