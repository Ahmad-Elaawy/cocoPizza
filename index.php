<?php
    session_start();
    $_SESSION['name'] = "Ahmad Hossam";
    $_SESSION['email']= 'ahmadelaawy@gmail.com';
    $_SESSION['role']= ['add','edit','create','delete'];
    $_SESSION['age']= 30;
    $_SESSION['login']= false;

?>
<!DOCTYPE html>
<?php
    // never put important information at a cookie
    $today = date("d M Y");
    $expire = time()+(7*24*60*60);
    setcookie("lastVisit",$today, $expire, '/' );
?>
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


    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Icon - Font Awesome Library-->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- AOS  Animation On Scroll  -->
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/main.css">


</head>

<body id="top">
    <!-- 1. Navbar Section -->
    <?php
        require_once("header.php");
    ?>
    <!-- End Navbar Section -->

    <!-- 2. Slider Section  -->
    <div class="container-fluid px-0">
        <div class="carousel slide" data-bs-ride="carousel" id="mainSlider">
            <a href="#mainSlider" class="carousel-control-prev" data-bs-slide="prev">
                <i class="fas fa-arrow-circle-left text-black-50 display-4"></i>
            </a>
            <a href="#mainSlider" class="carousel-control-next" data-bs-slide="next">
                <i class="fas fa-arrow-circle-right text-black-50 display-4"></i>
            </a>

            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image:url('images/slide1.jpg')">
                    <div class="carousel-caption">
                        <h2 class="fw-bolder">Food For<br> Your Soul</h2>
                        <p class="text-black-50 h4 my-3">
                            It's about good food and fresh ingredients.
                        </p>
                        <a href="menu.php" type="button" class="btn btn-warning">
                            View Our Menu
                        </a>
                    </div>

                </div>
                <div class="carousel-item" style="background-image:url('images/slide2.jpg')">
                    <div class="carousel-caption">
                        <h2 class="fw-bold">Try Our New <br>Burger Menu</h2>
                        <p class="text-black-50 h4 my-3">
                            It's about good food and fresh ingredients.
                        </p>
                        <a href="menu.php" type="button" class="btn btn-warning">
                            View Our Menu
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Slider Section  -->

    <!-- 3. Offer Section  -->
    <div class="offer-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-light">
                    <p class="text-white-50 h4 pt-5">Best Dish Of The Day</p>
                    <h3>Hamburger &<br>
                        Sweet Potato Fries</h3>
                    <p class="offer-price">49.99 <sup class="small">egp</sup></p>
                    <button type="button" class="btn btn-warning">
                        Add To Cart
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- End Offer Section  -->


    <!-- 4. Dish Section  -->
    <div class="dish-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Popular Dishes</h3>
                    <p class="text-black-50 mb-5"> Try the delicious new dishes from our chef. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card border-0 bg-light mt-3">
                        <div class="px-4">
                            <img class="card-img-top" src="images/dish01.jpg" class="img-fluid" alt="dish">
                        </div>
                        <div class="card-body mb-2">
                            <h4 class="card-title">Classic Havana Burger</h4>
                            <p class="card-text text-black-50">Grilled beef patty, Turkey rashes, and burger relish.</p>
                            <p class="price">69.00 <sup>egp</sup></p>
                            <button type="button" class="btn btn-outline-warning text-dark py-2 px-5">Add To
                                Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card border-0 bg-light mt-3">
                        <div class="px-4">
                            <img class="card-img-top" src="images/dish02.jpg" class="img-fluid" alt="dish">
                        </div>
                        <div class="card-body mb-2">
                            <h4 class="card-title">Bufalo Mozzarella</h4>
                            <p class="card-text text-black-50">Grilled beef patty, Turkey rashes, and burger relish.</p>
                            <p class="price">90.00 <sup>egp</sup></p>
                            <button type="button" class="btn btn-outline-warning text-dark py-2 px-5">Add To
                                Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card border-0 bg-light mt-3">
                        <div class="px-4">
                            <img class="card-img-top" src="images/dish03.jpg" class="img-fluid" alt="dish">
                        </div>
                        <div class="card-body  mb-2">
                            <h4 class="card-title">Cheese Royale Burger</h4>
                            <p class="card-text text-black-50">Grilled beef patty, Turkey rashes, and burger relish.</p>
                            <p class="price">80.00 <sup>egp</sup></p>
                            <button type="button" class="btn btn-outline-warning text-dark py-2 px-5">Add To
                                Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card border-0 bg-light mt-3">
                        <div class="px-4">
                            <img class="card-img-top" src="images/dish05.jpg" class="img-fluid" alt="dish">
                        </div>
                        <div class="card-body  mb-2">
                            <h4 class="card-title">White Rocotta Pizza</h4>
                            <p class="card-text text-black-50">Tomato sauce, mozzarella, anchovies, oregano, basil.</p>
                            <p class="price">150.00 <sup>egp</sup></p>
                            <button type="button" class="btn btn-outline-warning text-dark py-2 px-5">Add To
                                Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Dish Section  -->


    <!-- 5. Features Section  -->
    <div class="features-section text-center">
        <div class="container">
            <div class="row border-top mt-5">
                <div class="col-md-6 col-lg-3">
                    <i class="fas fa-wheat-awn"></i>
                    <h4 class="py-1">Fresh Ingredients</h4>
                    <p class="text-black-50">
                        The best doughs, the most flavorful sauces, superior cheese!
                    </p>
                </div>
                <div class="col-md-6 col-lg-3">
                    <i class="fas fa-pizza-slice"></i>
                    <h4 class="py-1">Best Recipe</h4>
                    <p class="text-black-50">
                        We offers you deliciously cheesy pizzas that will leave you totally satisfied.
                    </p>
                </div>
                <div class="col-md-6 col-lg-3">
                    <i class="fas fa-face-grin"></i>
                    <h4 class="py-1">Happy Clients</h4>
                    <p class="text-black-50">                        
                        Want to tell us about a delicious pizza you ate? We'd love to hear from you. 
                    </p>
                </div>
                <div class="col-md-6 col-lg-3">
                    <i class="fas fa-apple-whole"></i>
                    <h4 class="py-1">Vegan Menu</h4>
                    <p class="text-black-50">
                        Whether you’re vegan, veggie, or flexi, we are making things a whole tastier.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features Section  -->

    <!-- 6. Book Section  -->
    <div class="book-section mt-5" id="book-table">
        <div class="container">
            <div class="bg-overlay"></div>
            <div class="row align-items-center" style="min-height:240px">
                <div class="col-12">
                    <h3 class="text-white">
                        Book A Table
                    </h3>
                    <p class="text-white-50">
                        reservation
                    </p>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-12  col-lg-10 text-center">
                    <h3>
                        Book a Table
                    </h3>
                    <p class="text-black-50">
                        We will do our best to give you your preferred table, but please note that window tables cannot
                        be guaranteed. If your ideal time or date is not available, please get in touch with us via
                        email or phone.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <form action="book.php" method="POST">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-lg-5">
                                <label for="name" class="form-label">Your Name:</label>
                                <input type="text" id="name" name="name" class="form-control"
                                    placeholder="Enter Your Name" required>
                            </div>
                            <div class="col-md-6 col-lg-5">
                                <label for="time" class="form-label">Time:</label>
                                <input type="time" id="time" name="time" class="form-control" required>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-lg-5">
                                <label for="date" class="form-label">Date:</label>
                                <input type="date" id="date" name="date" class="form-control" required>
                            </div>
                            <div class="col-md-6 col-lg-5">
                                <label for="guest" class="form-label">Guests:</label>
                                <input type="text" id="guest" name="guest" class="form-control" placeholder="2" required>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-10">
                                <label for="message" class="form-label">Message:</label>
                                <textarea type="text" id="message" name="message" class="form-control"
                                    placeholder="Enter message"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-warning py-2 mb-5">Reservation</button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Book  Section  -->


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