<?php
    $user = 'root';
    $password ='';
    $dsn = "mysql:host=localhost;dbname=pizza;"; // data source main

    try{
        $conn = new PDO($dsn,$user,$password);
        $dbflag = true;
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    }
    catch(PDOException $e){
        $dbflag = false;
        // echo $e->getMessage();
    }


?>