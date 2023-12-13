<nav class="navbar navbar-expand-lg bg-body-secondary  sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand ms-5 me-auto " href="index.php">
            <img src="Images/logo.svg" alt="logo" class="logo ">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left item start -->
            <ul class="navbar-nav me-auto ">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Product</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        <?php
                        // Fetch Category names from database
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<li><a class='dropdown-item' href='#'>{$row['category_name']}</a></li>";
                            }
                        } else {
                            // display Not Available Category
                            echo "<li><a class='dropdown-item'>Not Available Category</a></li>";
                        }
                        ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="FAQ.php">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.php">Contact us</a>
                </li>
            </ul>
            <!-- Left item end -->
            <!-- Right item start -->
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a class="nav-link" href="sign-up.php">Sign up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="Icons/cart-2-line.svg" alt="" style="width: 32px;"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="Icons/profile-line.svg" alt="" style="width: 32px;"></a>
                </li>
            </ul>
            <!-- Right item end -->
        </div>
    </div>
</nav>