 <?php
    session_start();

    if( ! isset($_SESSION['login'])){
        $_SESSION['error'] = "Please Sign-in First";
        header("Location:index.php");
    }
    if($_SESSION['role']!= 'admin'){
        $_SESSION['error'] = "Access Denied";
        header("Location:main.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Orders</h1>
</body>
</html>