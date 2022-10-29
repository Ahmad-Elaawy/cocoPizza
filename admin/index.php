
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="Coco Pizza, Pizza">
    <meta name="description" content="Coco Pizza">

    <title>Coco Pizza</title>

    <!-- Fonts & CSS assets files  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Icon - Font Awesome Library-->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- AOS  Animation On Scroll  -->
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/admin.css">


</head>

<body id="top">
    <!-- Start Contents  -->
    <div class="admin-section mt-0">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h1 class="my-5 text-warning display-4">Admin Area</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">            
            <div class="col-lg-8 col-xl-6">
                <div class="border border-2 m-4 p-3 form-login">
                <h2 class="text-center">Login</h2>
                    <?php
                    // command el tba3a bta3 el error wel logout
                        if(isset($_SESSION['error'])){
                            echo "<h4 class= 'text-danger' >{$_SESSION['error']}</h4>";
                            unset($_SESSION['error']);
                        }
                        if(isset($_SESSION['success'])){
                            echo "<h4 class= 'text-success' >{$_SESSION['success']}</h4>";
                            unset($_SESSION['error']);
                        }
                    ?>
                    <form action="login.php" method="post" autocomplete="off">
                        <div class="py-3">
                            <label for="email" class="form-label">Email address</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                        <div class="py-3">
                            <label for="password" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" id="password"
                                placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block  w-100 my-3">Log in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- End Contents  -->


    <!-- Footer Section  -->
    <?php
        require_once("footer.php");
    ?>
    <!-- End Footer  Section  -->


    <!-- JavaScript assets files -->
    <script src="../js/bootstrap.bundle.js"></script>
    <!-- Animation on scroll JS -->
    <script src="../js/aos.js"></script>
    <script src="../js/main.js"></script>

</body>

</html>