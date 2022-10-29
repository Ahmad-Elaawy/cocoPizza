<?php

    session_start();
    
    unset($_SESSION['user']);
    unset($_SESSION['login']);
    unset($_SESSION['role']);

    $_SESSION['success']="Signed-out successfully";
    header("Location:index.php");

?>