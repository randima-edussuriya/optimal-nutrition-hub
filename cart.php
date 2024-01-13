<?php
session_start();

// Redirect to the login page if not logged in
if (!isset($_SESSION['custId'])) {
    header("location:Login.php");
    exit();
}

// Include the database configuration file
include('database/config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/staff-management.css">


    <title>Cart-Optimal Nutrition Hub</title>
</head>

<body>
    <!-- Navigation bar start -->
    <?php
    include('includes/navigation-bar.php');
    ?>
    <!-- Navigation bar end -->

    <!-- cart section start -->

    <!-- cart section end -->
    <?php
    ?>
    <div class="container my-5 px-0">
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Product Image</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img class="object-fit-contain " src="images/GAT NITRAFLEX 30 SERVING.jpg" width="80" height="100%"></td>
                        <td>REDCON1 ISOTOPE WHEY ISOLATE 5 LBS</td>
                        <td>Rs. 29000</td>
                        <td class="col-1">
                            <input class="form-control" type="number" min="1" max="50" value="1" name="cartQty" required>
                        </td>
                        <td>Rs. 58000</td>
                        <td>
                            <a href="#"><button class="deactivate">Remove</button></a>
                            <a href="#"><button class="update">Update</button></a>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
        <div class="row col-md-12">
            <div class="col-6 text-start  ">
                <a href="#"><button class="btn btn-dark ">Keep Shopping</button></a>
                <a href="#"><button class="btn btn-outline-secondary btn-orange ">Place Order</button></a>
            </div>
            <div class="col-6 text-end ">
                <h3>Total Price: Rs. 30000</h3>
            </div>
        </div>
    </div>
    <!-- Footer section start -->
    <?php
    include('includes/footer.php');
    ?>
    <!-- Footer section end -->

    <!--Bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
<?php
// Close the database connection
mysqli_close($con);
?>