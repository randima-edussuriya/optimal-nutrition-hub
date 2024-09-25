<?php
session_start();

// Redirect to the login page if not logged in
if (!isset($_SESSION['custId'])) {
    header("location:Login.php");
    exit();
} else {
    $custId = $_SESSION['custId'];
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

    <!-- cart table section start -->
    <div class="container my-5 px-0">
        <div class="row">
            <?php
            $itemSelectQuery = "SELECT i.item_id, i.item_image1, i.item_name, i.item_sell_price, i.item_discount, i.item_stock_qty, c.cart_id, c.cart_item_qty
            FROM item i
            INNER JOIN cart c ON i.item_id = c.fk_item_id
            INNER JOIN customer cu ON c.fk_cust_id = cu.cust_id
            WHERE cu.cust_id=$custId";

            $itemResult = mysqli_query($con, $itemSelectQuery);
            $totalPrice = 0;
            if (mysqli_num_rows($itemResult) > 0) { // check if cart is not empty
            ?>
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
                        <?php
                        while ($itemRow = mysqli_fetch_assoc($itemResult)) {
                            $item_id = $itemRow['item_id'];
                            $cart_id = $itemRow['cart_id'];
                            $item_discount = (float)$itemRow['item_discount'];
                            $item_sell_price = (float)$itemRow['item_sell_price'];
                            $discountedPrice = $item_sell_price * (100 - $item_discount) / 100; // discount claculation

                            $existCartItemQty = (int)$itemRow['cart_item_qty'];
                            $existItemStockQty = (int)$itemRow['item_stock_qty'];
                            $subTotal = $discountedPrice * $existCartItemQty;
                            $totalPrice += $subTotal;
                        ?>
                            <tr>
                                <!-- Product Image -->
                                <td class="text-center">
                                    <a href="product-view.php?productId=<?= $item_id ?>">
                                        <img class="object-fit-contain" src="images/products/<?= $itemRow['item_image1'] ?>" width="80" height="100%">
                                    </a>
                                </td>
                                <!-- Product name -->
                                <td>
                                    <a class="text-decoration-none " href="product-view.php?productId=<?= $item_id ?>">
                                        <?= $itemRow['item_name'] ?>
                                    </a>
                                </td>
                                <!-- Price -->
                                <td>Rs. <?= number_format($discountedPrice, 2) ?></td>
                                <form action="#" method="post" class="d-inline">
                                    <!-- Quantity -->
                                    <td class="col-1">
                                        <input class="form-control" type="number" min="1" max="<?= $existItemStockQty + $existCartItemQty ?>" value="<?= $existCartItemQty ?>" name="cartQty" required>
                                    </td>
                                    <!-- Subtotal -->
                                    <td>Rs. <?= number_format($subTotal, 2) ?></td>

                                    <!-- hidden form field start-->
                                    <input type="hidden" name="itemId" value="<?= $item_id ?>">
                                    <input type="hidden" name="existCartItemQty" value="<?= $existCartItemQty ?>">
                                    <input type="hidden" name="existItemStockQty" value="<?= $existItemStockQty ?>">
                                    <!-- hidden form field end-->

                                    <!-- Action button -->
                                    <td class="text-center px-0 ">
                                        <button type="submit" value="<?= $cart_id ?>" name="updateCartItem" class="update mx-0 d-inline ">Update</button>
                                        <button onclick="return confirm('Are sure to remove the item');" type="submit" value="<?= $cart_id ?>" name="removeCartItem" class="deactivate mx-0 d-inline mt-1 mt-lg-0">Remove</button>
                                    </td>
                                </form>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php
                // update cart item
                updateCartItem($con);

                // remove cart item
                removeCartItem($con);
                ?>
            <?php } else {
                echo "<h2 class='bg-danger text-center mt-5 '> Not added item in cart </h2>";
            } ?>
        </div>

        <div class="row">
            <div class="col-md-6 ps-0">
                <a href="product.php"><button class="back-button">Keep Shopping</button></a>
                <a href="order-place.php"><button class="Registration">Place Order</button></a>
            </div>
            <div class="col-md-6 text-md-end mt-2 mt-md-0 pe-0">
                <h3>Total Price: Rs. <?= number_format($totalPrice, 2) ?></h3>
            </div>
        </div>
    </div>
    <!-- cart table section end -->

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