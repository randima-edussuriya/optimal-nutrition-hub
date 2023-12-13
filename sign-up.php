<?php
// Include the database configuration file
include('database/config.php');

$categorySelectQuery = "SELECT * FROM category ORDER BY category_name;";
// Execute the query and store the result
$result = mysqli_query($con, $categorySelectQuery);
// Close the database connection
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
  <?php
  include('navigation-bar.php');
  ?>
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
  <?php
  include('footer.html');
  ?>
  <!-- Footer section end -->

</body>

</html>