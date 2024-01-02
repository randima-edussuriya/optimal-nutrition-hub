<?php
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
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/footer.css">
    <!-- JS link -->
    <script src="scripts/commonScript.js" defer></script>

    <title>Home-Optimal Nutrition Hub</title>
</head>

<body>
    <!-- Navigation bar start -->
    <?php
    include('includes/navigation-bar.php');
    ?>
    <!-- Navigation bar end -->

    <!-- product view section start -->
    <div class="container my-5 px-0 mx-auto">
        <div class="row d-flex mx-auto bg-dark-subtle rounded-4">
            <?php
            if (isset($_GET['product'])) {
                $itemId = $_GET['product'];

                $itemSelectQuery = "SELECT * FROM item WHERE item_id = $itemId";
                $itemResult = mysqli_query($con, $itemSelectQuery); //execute query and store result
                $itemRow = mysqli_fetch_assoc($itemResult); //fetch item details

                $item_image1 = $itemRow['item_image1'];
                $item_image2 = $itemRow['item_image2'];
                $item_discount = (float)$itemRow['item_discount'];
                $item_sell_price = (float)$itemRow['item_sell_price'];
                $item_stock_qty = $itemRow['item_stock_qty'];

                $discountedPrice = $item_sell_price * (100 - $item_discount) / 100; // discount claculation
                // hide discount if item not have discount
                if ($item_discount == 0) {
                    $displayNoneForDiscount = 'd-none'; // apply bootstrap d-none class
                }

                // item availabiity status handling
                if ($item_stock_qty == '0') {
                    $availabiliy = 'Out of Stock';
                    $AvailabiliyColor = 'text-danger'; // apply bootstrap class
                    $displayNoneForAvailabiity = 'd-none'; // apply bootstrap d-none class
                } else {
                    $availabiliy = 'In Stock';
                    $AvailabiliyColor = 'text-success'; // apply bootstrap class
                }
            ?>
                <!-- image section start -->
                <div class="col-md-6">
                    <div class="py-3 px-2">
                        <div class="text-center">
                            <img class="object-fit-contain" id="mainImage" src="images/products/<?php echo $item_image1; ?>" width="100%" height="400" />
                        </div>
                        <div class="text-center pt-2">
                            <img class="object-fit-contain" onclick="change_image(this)" src="images/products/<?php echo $item_image1; ?>" height="50">
                            <img class="object-fit-contain" onclick="change_image(this)" src="images/products/<?php echo $item_image2; ?>" height="50">
                        </div>
                    </div>
                </div>
                <!-- image section end -->
                <!-- item details section start -->
                <div class="col-md-6 p-3 bg-body-secondary  rounded-4">
                    <h5 class=' '><?php echo $itemRow['item_name']; ?></h5>
                    <h5 class='text-body-secondary'><?php echo $itemRow['item_brand']; ?></h5>
                    <h5 class='<?php echo $displayNoneForDiscount; ?> text-decoration-line-through text-body-tertiary'>Rs. <?php echo $item_sell_price; ?><span class="badge bg-success ms-2">-<?php echo $item_discount; ?>%</span>
                    </h5>
                    <h5 class='fw-bold'>Rs. <?php echo $discountedPrice; ?></h5>
                    <h5 class='<?php echo $AvailabiliyColor; ?> fw-bold'><?php echo $availabiliy; ?></h5>
                    <form action="#" method="post">
                        <div class="<?php echo $displayNoneForAvailabiity; ?> d-flex mt-3">
                            <div>
                                <input class="form-control" type="number" min="1" max="<?php echo $item_stock_qty; ?>" value="1" name="cartQty" required>
                            </div>
                            <div>
                                <button class="btn btn-outline-dark btn-search py-1 ms-2 " type="submit" name="addToCart">Add
                                    to cart</button>
                            </div>
                        </div>
                    </form>
                    <p class="mt-3 text-black bg-body-tertiary rounded-3"><?php echo $itemRow['item_description']; ?></p>
                </div>
                <!-- item details section end -->
            <?php } ?>
        </div>
    </div>
    </div>
    <!-- product view section end -->

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