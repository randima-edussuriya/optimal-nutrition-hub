<?php
session_start();

// Include the database configuration file
include('database/config.php');
include('functions/common-function.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/footer.css">
  <title>Home-Optimal Nutrition Hub</title>
</head>

<body>
  <!-- Navigation bar start -->
  <?php
  include('includes/navigation-bar.php');
  ?>
  <!-- Navigation bar end -->

  <!-- Search bar start -->
  <?php
  include('includes/search-bar.php');
  ?>
  <!-- Search bar end -->

  <!-- Top Image start -->
  <div class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active ">
        <img src="images/home.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
  <!-- Top Image end -->

  <!-- Latest product section start -->
  <div class="container py-5 mt-5">
    <div class="col-lg-6 m-auto text-center">
      <h1>Latest Products</h1>
    </div>
    <div class="row">
      <?php
      $itemSelectQuery = "SELECT * FROM item ORDER BY item_date_added DESC LIMIT 0, 8";
      getItemCard($con, $itemSelectQuery); //call function
      ?>
    </div>
  </div>
  <!-- Latest product section end -->

  <!-- Most demanded product section start -->
  <div class="container py-5">
    <div class="col-lg-6 m-auto text-center">
      <h1>Products with High Demand</h1>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-4 col-lg-3 text-center mb-4">
        <div class="card border-0 bg-light">
          <img src="images/GAT NITRAFLEX 30 SERVING.jpg" class="card-img-top p-2 position-relative" alt="...">
          <span class="position-absolute top-0 start-0 rounded-end-pill badge bg-success p-2">
            -12%
          </span>
          <div class="card-body p-0 pb-2">
            <h6 class="product-name" class="product-name">GAT NITRAFLEX 30 SERVING GAT NITRAFLEX 30 SERVING</h6>
            <h6 class="text-decoration-line-through d-inline text-body-tertiary">Rs. 7500</h6>
            <h6 class="d-inline">Rs. 7500</h6>
            <h6 class="text-success fw-bold ">In Stock</h6>
            <a href="#" class="btn btn-outline-warning btn-view btn-sm">View</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 text-center mb-4">
        <div class="card border-0 bg-light">
          <img src="images/GAT NITRAFLEX 30 SERVING.jpg" class="card-img-top p-2 position-relative" alt="...">
          <span class="position-absolute top-0 start-0 rounded-end-pill badge bg-success p-2">
            -12%
          </span>
          <div class="card-body p-0 pb-2">
            <h6 class="product-name" class="product-name">GAT NITRAFLEX 30 SERVING GAT NITRAFLEX 30 SERVING</h6>
            <h6 class="text-decoration-line-through d-inline text-body-tertiary">Rs. 7500</h6>
            <h6 class="d-inline">Rs. 7500</h6>
            <h6 class="text-success fw-bold ">In Stock</h6>
            <a href="#" class="btn btn-outline-warning btn-view btn-sm">View</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 text-center mb-4">
        <div class="card border-0 bg-light">
          <img src="images/GAT NITRAFLEX 30 SERVING.jpg" class="card-img-top p-2 position-relative" alt="...">
          <span class="position-absolute top-0 start-0 rounded-end-pill badge bg-success p-2">
            -12%
          </span>
          <div class="card-body p-0 pb-2">
            <h6 class="product-name" class="product-name">GAT NITRAFLEX 30 SERVING GAT NITRAFLEX 30 SERVING</h6>
            <h6 class="text-decoration-line-through d-inline text-body-tertiary">Rs. 7500</h6>
            <h6 class="d-inline">Rs. 7500</h6>
            <h6 class="text-success fw-bold ">In Stock</h6>
            <a href="#" class="btn btn-outline-warning btn-view btn-sm">View</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 text-center mb-4">
        <div class="card border-0 bg-light">
          <img src="images/GAT NITRAFLEX 30 SERVING.jpg" class="card-img-top p-2 position-relative" alt="...">
          <span class="position-absolute top-0 start-0 rounded-end-pill badge bg-success p-2">
            -12%
          </span>
          <div class="card-body p-0 pb-2">
            <h6 class="product-name" class="product-name">GAT NITRAFLEX 30 SERVING GAT NITRAFLEX 30 SERVING</h6>
            <h6 class="text-decoration-line-through d-inline text-body-tertiary">Rs. 7500</h6>
            <h6 class="d-inline">Rs. 7500</h6>
            <h6 class="text-success fw-bold ">In Stock</h6>
            <a href="#" class="btn btn-outline-warning btn-view btn-sm">View</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 text-center mb-4">
        <div class="card border-0 bg-light">
          <img src="images/GAT NITRAFLEX 30 SERVING.jpg" class="card-img-top p-2 position-relative" alt="...">
          <span class="position-absolute top-0 start-0 rounded-end-pill badge bg-success p-2">
            -12%
          </span>
          <div class="card-body p-0 pb-2">
            <h6 class="product-name" class="product-name">GAT NITRAFLEX 30 SERVING GAT NITRAFLEX 30 SERVING</h6>
            <h6 class="text-decoration-line-through d-inline text-body-tertiary">Rs. 7500</h6>
            <h6 class="d-inline">Rs. 7500</h6>
            <h6 class="text-success fw-bold ">In Stock</h6>
            <a href="#" class="btn btn-outline-warning btn-view btn-sm">View</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 text-center mb-4">
        <div class="card border-0 bg-light">
          <img src="images/GAT NITRAFLEX 30 SERVING.jpg" class="card-img-top p-2 position-relative" alt="...">
          <span class="position-absolute top-0 start-0 rounded-end-pill badge bg-success p-2">
            -12%
          </span>
          <div class="card-body p-0 pb-2">
            <h6 class="product-name" class="product-name">GAT NITRAFLEX 30 SERVING GAT NITRAFLEX 30 SERVING</h6>
            <h6 class="text-decoration-line-through d-inline text-body-tertiary">Rs. 7500</h6>
            <h6 class="d-inline">Rs. 7500</h6>
            <h6 class="text-success fw-bold ">In Stock</h6>
            <a href="#" class="btn btn-outline-warning btn-view btn-sm">View</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 text-center mb-4">
        <div class="card border-0 bg-light">
          <img src="images/GAT NITRAFLEX 30 SERVING.jpg" class="card-img-top p-2 position-relative" alt="...">
          <span class="position-absolute top-0 start-0 rounded-end-pill badge bg-success p-2">
            -12%
          </span>
          <div class="card-body p-0 pb-2">
            <h6 class="product-name" class="product-name">GAT NITRAFLEX 30 SERVING GAT NITRAFLEX 30 SERVING</h6>
            <h6 class="text-decoration-line-through d-inline text-body-tertiary">Rs. 7500</h6>
            <h6 class="d-inline">Rs. 7500</h6>
            <h6 class="text-success fw-bold ">In Stock</h6>
            <a href="#" class="btn btn-outline-warning btn-view btn-sm">View</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 text-center mb-4">
        <div class="card border-0 bg-light">
          <img src="images/GAT NITRAFLEX 30 SERVING.jpg" class="card-img-top p-2 position-relative" alt="...">
          <span class="position-absolute top-0 start-0 rounded-end-pill badge bg-success p-2">
            -12%
          </span>
          <div class="card-body p-0 pb-2">
            <h6 class="product-name" class="product-name">GAT NITRAFLEX 30 SERVING GAT NITRAFLEX 30 SERVING</h6>
            <h6 class="text-decoration-line-through d-inline text-body-tertiary">Rs. 7500</h6>
            <h6 class="d-inline">Rs. 7500</h6>
            <h6 class="text-success fw-bold ">In Stock</h6>
            <a href="#" class="btn btn-outline-warning btn-view btn-sm">View</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Most demanded product section end -->

  <!-- Footer section start -->
  <?php
  include('includes/footer.php');
  ?>
  <!-- Footer section end -->

  <!-- Bootstrap JS link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
<?php
// Close the database connection
mysqli_close($con);
?>