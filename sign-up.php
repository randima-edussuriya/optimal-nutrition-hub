<?php
// Include the database configuration file
include('database/config.php');

$categorySelectQuery = "SELECT * FROM category ORDER BY category_name;";
$result = mysqli_query($con, $categorySelectQuery);
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/sign-up.css">
  <link rel="stylesheet" href="css/footer.css">

  <title>SingUp-Optimal Nutrition Hub</title>
</head>

<body style="background: rgb(255, 224, 213);">

  <!-- Navigation bar start -->
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
  <!-- Navigation bar end -->

  <!-- Sign up section start -->
  <div class="container row my-5 mx-auto ">
    <div class="col-md-6 mx-auto">

      <div class="wrapper">
        <form action="post">
          <h2>Sign up-Optimal Nutrition Hub</h2>

          <div class="input-box">
            <input type="email" placeholder="@Email" required>
          </div>

          <div class="input-box">
            <input type="text" placeholder="First Name" required>
          </div>

          <div class="input-box">
            <input type="text" placeholder="Last Name" required>
          </div>

          <div class="input-box">
            <input type="text" placeholder="Phone Number" required>
          </div>

          <div class="input-box">
            <input type="text" placeholder="Address Line 1" required>
          </div>

          <div class="input-box">
            <input type="text" placeholder="Address Line 2">
          </div>

          <div class="input-box">
            <input type="text" placeholder="Address Line 3">
          </div>

          <div class="input-box">
            <input type="text" placeholder="City">
          </div>

          <div class="input-box">
            <input type="text" placeholder="Username" required>
          </div>

          <div class="input-box">
            <input type="password" placeholder="Password" required>
          </div>

          <button type="submit" class="btn"> Sign Up</button>

          <div class="register-link">
            <p> have an account? <a href="Login.php"> Login </a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Sign up section end -->

  <!-- Footer section start -->
  <div>
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-3  col-md-5">
            <h5>WHO WE ARE</h5>
            <p class="text-justify">
              As the leading sports nutrition distributor in Sri Lanka,
              Optimal Nutrition Hub acts as your gateway to a transformational
              journey.We offer a selection of products designed to enhance your
              performance and fuel your ambitions.
            </p>
          </div>

          <div class="col-xs-15 col-md-3">
            <h6>QUICK LINKS</h6>
            <ul class="footer-links">
              <li><a href="#">Product</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-xs-15 col-md-4">
            <h6>CONTACT</h6>
            <ul class="footer-links">
              <li>For Product Advice : +94 77 556 0022</li>
              <li> For Delivery Information : +94 77 112 6970</li>
              <li> Email: <a href="optimalnutritionhub@gmail.com ">optimalnutritionhub@gmail.com </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-1 col-md-2">
            <h6> LOCATION </h6>
            <address>
              No 58,<br>
              Galle Road,<br>
              Colombo 03.
            </address>
          </div>

          <div class="col-sm-1 col-md-3">
          </div>

          <div class="col-sm-1 col-md-6">
            <h6> SOCIAL LINKS </h6>
            <ul class="social-icons">
              <li><a class="facebook" href="facebook"><img src="Icons/facebook-circle-fill.svg" alt="" style="width: 32px;"></a></li>
              <li><a class="twitter" href="twitter"><img src="Icons/twitter-fill.svg" alt="" style="width: 32px;"></a>
              </li>
              <li><a class="whatsapp" href="whatsapp"><img src="Icons/whatsapp-line.svg" alt="" style="width: 32px;"></a>
              </li>
              <li><a class="linkedin" href="linkedin"><img src="Icons/linkedin-box-fill.svg" alt="" style="width: 32px;"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <footer class="bettle">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2023 Optimal Nutrition Hub | Devoloped by -
              <a href="#"> BattleShip</a>
            </p>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!-- Footer section end -->

</body>

</html>