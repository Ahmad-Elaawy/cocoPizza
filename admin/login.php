<?php
    session_start();
    require_once("config.php");


    // check all inputs: email and password
    // sanitizing & validation

    $email = $_POST['email'];
    $password = $_POST['password'];

    // $rs = $conn->query("SELECT * FROM users WHERE user_email= '$email'");
    
    // el gomlten elly t7t zy ely foo2 bs more secure 3achan el hacking
    // lw 3andy aktr mn 7aga httb3t lazem yt7ato fel array bel tateb 3achan el tarteb mohem

    $rs = $conn->prepare("SELECT * FROM users WHERE user_email = ?");
    $rs->execute( [$email] );

    $row = $rs->fetch(PDO::FETCH_ASSOC);
    
    // password_hash();
    // password_verify();



    $hash = $row['password'];
    if(password_verify($password,$hash))
    {
        // login & session var
        $_SESSION['user']= $row['user_name'];
        $_SESSION['login']= true;
        $_SESSION['role']= $row['role']; // admin - user
        header("Location:main.php");
    }else
    {
        // error
        $_SESSION['error'] = "Please Check User E-mail Or Password";
        header("Location:index.php");
    }

?>