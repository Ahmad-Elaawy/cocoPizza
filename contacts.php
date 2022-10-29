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

    <title>Coco Pizza - Contacts</title>


    <!-- Fonts & CSS assets files  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Icon - Font Awesome Library-->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- AOS  Animation On Scroll  -->
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/main.css">

</head>

<body id="top" class="body-top">
    <!-- Navbar Section -->
    <?php
        require_once("header.php");
    ?>
    <!-- End Navbar Section -->

    
    <!-- Start Contents  -->
    <div class="header-section">
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h1 class="my-5 text-warning display-4">Contact us</h1>
            </div>
        </div>
    </div>
    </div>    
    <div class="container">
        <div class="row">
        <!-- <h2 class="text-danger">Personal Info</h2>
        <?php
            echo "<h3>{$_SESSION['name']} </h3>";
            echo "<h3>{$_SESSION['email']} </h3>";
            echo "<h3>{$_SESSION['age']} </h3>";
            if(isset($_SESSION['job']))
            {
            echo "<h3>{$_SESSION['job']} </h3>";
            }
        ?> -->



            <?php
            if(isset($_COOKIE['lastVisit'])){
                echo "<h3.> Welcome back - Last Visit Date:" . $_COOKIE['lastVisit'] . "</h3.>";
            }
            ?>
            <p>We are happy to answer your questions and we are glad to take your feedback into consideration.</p>
            <div class="col-lg-4">
                <div class="card my-3">
                    <img class="card-img-top" src="images/store01.jpg" alt="pizza">
                    <div class="card-body">
                        <h4 class="card-title">Coco Pizza EL TAHRIR </h4>
                        <p class="card-text">
                            Cairo - El Tahrir - 9 Tahrir Square in front of the American University
                            <br>Open 11:00 AM - 03:00 AM
                            <br>02425110111
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card  my-3">
                    <img class="card-img-top" src="images/store02.jpg" alt="pizza">
                    <div class="card-body">
                        <h4 class="card-title">Coco Pizza Madinity</h4>
                        <p class="card-text">
                            Cairo - Madinity - El Nasr Buildings, El Nabawy El Mohandes St.
                            <br>Open 11:00 AM - 03:00 AM
                            <br>02425110111
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card  my-3">
                    <img class="card-img-top" src="images/store03.jpg" alt="pizza">
                    <div class="card-body">
                        <h4 class="card-title">Coco Pizza CORNISH ALX. </h4>
                        <p class="card-text"> Alexandria No. 92 St. July 26 next to the theater Abdulwahab
                            <br>Open 11:00 AM - 03:00 AM
                            <br>02425110111 </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Contents  -->

    <!-- 7. Footer Section  -->
    <?php
        require_once("footer.php");
    ?>
    <!-- End Footer  Section  -->




    <!-- JavaScript assets files -->
    <script src="js/bootstrap.bundle.js"></script>
    <!-- Animation on scroll JS -->
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>

</body>

</html>