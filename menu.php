<!DOCTYPE html>
<?php
    setcookie('lastVisit','',time()-3600,'/');

    require_once("connection.php");
if ($dbflag){
    $rs = $conn ->query("SELECT * FROM menus WHERE item_status = 1");
    $rows = $rs -> fetchAll(PDO::FETCH_ASSOC); // fetchall btrg3 el elements elly mawgoden f array
    }
    
    // echo"<pre>";
    // var_dump($rows);
    // die();

?>
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
                    <h1 class="my-5 text-warning display-4">Coco Menu</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <?php 
    if ($dbflag){
        $total = count($rows);
        echo "<h3>Total($total)Meals</h3>"
    ?>
        <div class="row">
            <?php
            foreach($rows as $row) 
                {
            ?>

            <div class="col-md-3">
                <div class="card mb-5">
                    <img class="card-img-top" src="images/menu/<?=$row['img']?>" alt="pizza">
                    <div class="card-body">
                        <h4 class="card-title"><?= $row['title'] ?></h4>
                        <p class="card-text">
                            <?=$row['info']?>
                        </p>
                        <h5 class="badge bg-danger p-3">
                        <?=$row['price']?> EGP
                        </h5>
                    </div>
                </div>
            </div>
            <?php
                } // end of for each
            ?>
        </div>
        <?php
                // end of if statement
            } else {
                echo "<h2> SORRY! SYSTEM IS UNDER MAINTAINENCE </h2>";
            }
        ?>
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