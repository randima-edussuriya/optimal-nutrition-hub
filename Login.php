<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/login.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/footer.css">

  <title>Login-Optimal Nutrition Hub</title>
</head>

<body>
  <!-- Navigation bar start -->
  <?php
  include('navigation-bar.php');
  ?>
  <!-- Navigation bar end -->

  <!-- Login section start -->
  <div class="container row my-5 mx-auto ">
    <div class="col-md-6 mx-auto">
      <div class="wrapper">
        <form action="#" method="post" style="margin: 4%;">
          <h1>Login-Optimal Nutrition Hub</h1>
          <div class="input-box">
            <input type="text" placeholder="Username" required>
          </div>
          <div class="input-box">
            <input type="password" placeholder="Password" required>
          </div>
          <div class="remember-frogot">
            <a href="#"> Fogot password?</a>
          </div>

          <button type="submit" class="btn"> Login</button>

          <div class="register-link">
            <p> Don't have an account? <a href="sign-up.php"> Sign-up </a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Login section end -->

  <!-- Footer section start -->
  <?php
  include('footer.php');
  ?>
  <!-- Footer section end -->

  <!--Bootstrap JS link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>