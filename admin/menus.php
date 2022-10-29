<?php
    session_start();

    if( ! isset($_SESSION['login'])){
        $_SESSION['error'] = "Please Sign-in First";
        header("Location:index.php");
    }

    require_once("config.php");
    $rs = $conn->query("SELECT * FROM menus ORDER BY id desc");
    $rows = $rs -> fetchAll(PDO::FETCH_ASSOC);


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
                    <h2 class="text-center">Menus List</h2>

                    <?php
                        if(isset($_SESSION['msg'])){
                            echo "<h3 class='p-3 text-primary'> {$_SESSION['msg']} </h3>";
                            unset($_SESSION['msg']); // di 3achan ams7 el msg b3d m a3ml refresh
                        }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col">

                    <a href="menu_new.php" class="btn btn-primary btn-lg w-100 my-1">Add New Item</a>

                    <table class="table table-striped table-bordered table-success w-100 text-center">
                        <tr>
                            <th width="5%">SN</th>
                            <th width="70%">Item Details</th>
                            <th width="25%">Action</th>
                        </tr>

                        <?php 
                            $n = 0;
                            foreach($rows as $row){
                                $n++;

                        ?>
                        <tr>
                            <td>
                                <?= $n ?>
                            </td>
                            <td class="text-start d-flex">
                                <img src="../images/menu/<?= $row['img'] ?>" class="float-left w-25 p-2">
                                <div>
                                    <h4><?= $row['title'] ?></h4>
                                    <p>
                                    <?= $row['info'] ?>
                                        <span class="badge bg-primary p-3 m-2"><?= $row['price'] ?>EGP</span>
                                        <br>

                                        <?php 
                                        if($row ['item_status'] == 1){
                                        ?>
                                        <span class="badge bg-success p-3 m-2">Active</span>

                                        <?php
                                        }else{
                                        ?>
                                        <span class="badge bg-danger p-3 m-2">Inactive</span>

                                        <?php
                                        }
                                        ?>
                                    </p>
                                </div>
                            </td>
                            <td>
                                <a href="menu_edit.php?id=<?=$row['id'] ?>" class="btn btn-info my-1">
                                    <span class="fas fa-square-pen"></span>
                                    Edit
                                </a>
                                <a href="menu_del.php?id=<?=$row['id'] ?>" class="btn btn-danger my-1">
                                    <span class="fas fa-rectangle-xmark"></span>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        
                        <?php 
                            }; // end of foreach
                        ?>

                    </table>

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