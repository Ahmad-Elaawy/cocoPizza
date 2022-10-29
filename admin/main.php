<?php
    session_start();

    if( ! isset($_SESSION['login'])){
        $_SESSION['error'] = "Please Sign-in First";
        header("Location:index.php");
    }
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
    <!-- Navbar Section -->
    <?php
        require_once("header.php");
    ?>
    <!-- End Navbar Section -->


    <!-- Start Contents  -->
    <div class="admin-section">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h1 class="my-5 text-warning display-4">Coco Dashboard</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="dahsboard">
        <div class="container">
            <div class="row">
                <div class="col">
                <?php
                    if(isset($_SESSION['error'])){
                        echo "<h4 class= 'text-danger' >{$_SESSION['error']}</h4>";
                        unset($_SESSION['error']);
                    }
                ?>
                    <h2 class="text-center">Statistics</h2>
                    <?php
                        echo "<h4>{$_SESSION['user']} ({$_SESSION['role']})</h4>";
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col">

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