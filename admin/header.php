    <!-- 1. Navbar Section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-gray fixed-top border-bottom">
        <div class="container">
            <span class="navbar-brand">
                <img src="../images/logo.png" height="51" alt="coco pizza logo">
            </span>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav nav mx-auto">
                    <li class="nav-item active">
                        <a href="main.php" class="nav-link">
                            <span class="fas fa-table-list"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="menus.php" class="nav-link">
                            <span class="fas fa-utensils"></span>
                            Menus
                        </a>
                    </li> 

                    <!-- ------------------------------------------------- -->
                    <?php 
                        if ($_SESSION['role']=='admin'){
                    ?>
                    <li class="nav-item">
                        <a href="orders.php" class="nav-link">
                            <span class="fas fa-receipt"></span>
                            Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="emails.php" class="nav-link">
                            <span class="fas fa-envelope-open"></span>
                            E-mails
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="users.php" class="nav-link">
                            <span class="fas fa-user"></span>
                            Users
                        </a>
                    </li>
                    <?php 
                        }
                    ?>
                    <!-- ------------------------------------------------- -->
                </ul>

                <a href="logout.php" class="btn btn-outline-warning px-3 py-2 text-dark">
                    <span class="fas fa-door-open pe-2"></span>
                    Sign out
                </a>                
            </div>


        </div>
    </nav>
    <!-- End Navbar Section -->