<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/home.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/footer.css">
  <title>Home-Optimal Nutrition Hub</title>
</head>

<body>
  <!-- Navigation bar start -->
  <?php
  include('navigation-bar.php');
  ?>
  <!-- Navigation bar end -->

  <!-- Search bar start -->
  <div class="container col-6">
    <form class="d-flex my-4" role="search">
      <input class="form-control me-2 search-bar fw-semibold py-1 " type="search" placeholder="Search supplement products here" aria-label="Search">
      <button class="btn btn-outline-dark    fw-semibold btn-search py-1" type="submit">Search</button>
    </form>
  </div>
  <!-- Search bar end -->

  <!-- Top Image start -->
  <div class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active ">
        <img src="Images/home.jpg" class="d-block w-100" alt="...">
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
      <div class="col-sm-6 col-md-4 col-lg-3 text-center mb-4">
        <div class="card border-0 bg-light">
          <img src="Images/products/GAT NITRAFLEX 30 SERVING.jpg" class="card-img-top p-2 position-relative" alt="...">
          <span class="position-absolute top-0 start-0 rounded-end-pill badge bg-success p-2">
            -12%
          </span>
          <div class="card-body p-0 pb-2">
            <h6 class="product-name" class="product-name">GAT NITRAFLEX 30 SERVING</h6>
            <h6 class="text-decoration-line-through d-inline text-body-tertiary">Rs. 7500</h6>
            <h6 class="d-inline">Rs. 7500</h6>
            <h6 class="text-success fw-bold ">In Stock</h6>
            <a href="#" class="btn btn-outline-warning btn-view btn-sm">View</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 text-center mb-4">
        <div class="card border-0 bg-light ">
          <img src="Images/products/NUTREX CREATINE DRIVE 300G.jpg" class="card-img-top p-2 " alt="...">
          <div class="card-body p-0 pb-2">
            <h6 class="product-name">NUTREX CREATINE DRIVE</h6>
            <h6 class="d-inline">Rs. 7500</h6>
            <h6 class="text-success fw-bold ">In Stock</h6>
            <a href="#" class="btn btn-outline-warning btn-view btn-sm">View</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 text-center mb-4">
        <div class="card border-0  bg-light">
          <img src="Images/products/USN VIBRANCE COLLAGEN PEPTIDES 30 SERVINGS.jpg" class="card-img-top p-2 " alt="...">
          <div class="card-body p-0 pb-2">
            <h6 class="product-name">USN VIBRANCE COLLAGEN</h6>
            <h6 class="d-inline">Rs. 11000</h6>
            <h6 class="text-success fw-bold ">In Stock</h6>
            <a href="#" class="btn btn-outline-warning btn-view btn-sm">View</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 text-center mb-4">
        <div class="card border-0  bg-light">
          <img src="Images/products/ANIMAL PAK 44 PACKS.jpg" class="card-img-top p-2 " alt="...">
          <div class="card-body p-0 pb-2">
            <h6 class="product-name">ANIMAL PAK 44 PACKS</h6>
            <h6 class="d-inline">Rs. 8500</h6>
            <h6 class="text-success fw-bold ">In Stock</h6>
            <a href="#" class="btn btn-outline-warning btn-view btn-sm">View</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 text-center mb-4">
        <div class="card border-0  bg-light">
          <img src="Images/products/MUSCLETECH MASS-TECH EXTREME 2000 12 LBS.jpg" class="card-img-top p-2 " alt="...">
          <div class="card-body p-0 pb-2">
            <h6 class="product-name">MUSCLETECH MASS-TECH</h6>
            <h6 class="d-inline">Rs. 28000</h6>
            <h6 class="text-success fw-bold ">In Stock</h6>
            <a href="#" class="btn btn-outline-warning btn-view btn-sm">View</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 text-center mb-4">
        <div class="card border-0  bg-light">
          <img src="Images/products/CARNIVOR MASS 10 LBS.jpg" class="card-img-top p-2 " alt="...">
          <div class="card-body p-0 pb-2">
            <h6 class="product-name">CARNIVOR MASS 10 LBS</h6>
            <h6 class="d-inline">Rs. 27500</h6>
            <h6 class="text-success fw-bold ">In Stock</h6>
            <a href="#" class="btn btn-outline-warning btn-view btn-sm">View</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 text-center mb-4">
        <div class="card border-0  bg-light">
          <img src="Images/products/MUSCLETECH MASS-TECH EXTREME 2000 6 LBS.jpg" class="card-img-top p-2 " alt="...">
          <div class="card-body p-0 pb-2">
            <h6 class="product-name">MUSCLETECH MASS-TECH</h6>
            <h6 class="d-inline">Rs. 18500</h6>
            <h6 class="text-success fw-bold ">In Stock</h6>
            <a href="#" class="btn btn-outline-warning btn-view btn-sm">View</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 text-center mb-4">
        <div class="card border-0  bg-light">
          <img src="Images/products/MASS INFUSION 12 LBS.jpg" class="card-img-top p-2 " alt="...">
          <div class="card-body p-0 pb-2">
            <h6 class="product-name">MASS INFUSION 12 LBS</h6>
            <h6 class="d-inline">Rs. 22500</h6>
            <h6 class="text-success fw-bold ">In Stock</h6>
            <a href="#" class="btn btn-outline-warning btn-view btn-sm">View</a>
          </div>
        </div>
      </div>
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
        <div class="card border-0  bg-light">
          <img src="Images/products/CARNIVOR MASS 6 LBS.jpg" class="card-img-top p-2 " alt="...">
          <div class="card-body p-0 pb-2">
            <h6 class="product-name">CARNIVOR MASS 6 LBS</h6>
            <h6 class="d-inline">Rs. 18500</h6>
            <h6 class="text-success fw-bold ">In Stock</h6>
            <a href="#" class="btn btn-outline-warning btn-view btn-sm">View</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 text-center mb-4">
        <div class="card border-0  bg-light">
          <img src="Images/products/KING MASS XL 15 LBS.jpg" class="card-img-top p-2 " alt="...">
          <div class="card-body p-0 pb-2">
            <h6 class="product-name">KING MASS XL 15 LBS</h6>
            <h6 class="d-inline">Rs. 29000</h6>
            <h6 class="text-danger fw-bold ">Out of Stock</h6>
            <a href="#" class="btn btn-outline-warning btn-view btn-sm">View</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 text-center mb-4">
        <div class="card border-0  bg-light">
          <img src="Images/products/DYMATIZE ISO 100 5 LBS.jpg" class="card-img-top p-2 " alt="...">
          <div class="card-body p-0 pb-2">
            <h6 class="product-name">DYMATIZE ISO 100 5 LBS</h6>
            <h6 class="d-inline">Rs. 34500</h6>
            <h6 class="text-success fw-bold ">In Stock</h6>
            <a href="#" class="btn btn-outline-warning btn-view btn-sm">View</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 text-center mb-4">
        <div class="card border-0  bg-light">
          <img src="Images/products/NITROTECH PERFORMANCE SERIES 4 LBS.jpg" class="card-img-top p-2 " alt="...">
          <div class="card-body p-0 pb-2">
            <h6 class="product-name">NITROTECH PERFORMANCE SERIES</h6>
            <h6 class="d-inline">Rs. 23000</h6>
            <h6 class="text-success fw-bold ">In Stock</h6>
            <a href="#" class="btn btn-outline-warning btn-view btn-sm">View</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 text-center mb-4">
        <div class="card border-0  bg-light">
          <img src="Images/products/BPI ISO HD 5 LBS.jpg" class="card-img-top p-2 " alt="...">
          <div class="card-body p-0 pb-2">
            <h6 class="product-name">BPI ISO HD 5 LBS</h6>
            <h6 class="d-inline">Rs. 26500</h6>
            <h6 class="text-danger fw-bold ">Out of Stock</h6>
            <a href="#" class="btn btn-outline-warning btn-view btn-sm">View</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Most demanded product section end -->

  <!-- Footer section start -->
  <?php
  include('footer.php');
  ?>
  <!-- Footer section end -->

  <!-- Bootstrap JS link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>