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

<body class="text-bg-dark">
    <!-- Navigation bar start -->
    <?php
    include('includes/navigation-bar.php');
    ?>
    <!-- Navigation bar end -->

    <!-- cart table section start -->
    <div class="container my-5 px-0">
        <div class="row">
            <?php
            $itemSelectQuery = "SELECT i.item_image1, i.item_name, i.item_sell_price, i.item_discount, i.item_stock_qty, c.cart_id, c.cart_item_qty
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
                            $cart_id = $itemRow['cart_id'];
                            $item_discount = (float)$itemRow['item_discount'];
                            $item_sell_price = (float)$itemRow['item_sell_price'];
                            $discountedPrice = $item_sell_price * (100 - $item_discount) / 100; // discount claculation

                            $cart_item_qty = (int)$itemRow['cart_item_qty'];
                            $subTotal = $discountedPrice * $cart_item_qty;
                            $totalPrice = $totalPrice + $subTotal;
                        ?>
                            <tr>
                                <td class="text-center"><img class="object-fit-contain" src="images/products/<?php echo $itemRow['item_image1']; ?>" width="80" height="100%"></td>
                                <td><?php echo $itemRow['item_name']; ?></td>
                                <td>Rs. <?php echo number_format($discountedPrice, 2); ?></td>
                                <td class="col-1">
                                    <input class="form-control" type="number" min="1" max="<?php echo $itemRow['item_stock_qty']; ?>" value="<?php echo $cart_item_qty; ?>" name="cartQty" required>
                                </td>
                                <td>Rs. <?php echo number_format($subTotal, 2); ?></td>
                                <td class="text-center">
                                    <a href="cart.php?cartId=<?php echo $cart_id; ?>"><Button class="deactivate me-0">Remove</Button></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php } else {
                echo "<h2 class='bg-danger text-center mt-5 '> Not added item in cart </h2>";
            } ?>
        </div>
        <div class="text-end">
            <h3>Total Price: Rs. <?php echo number_format($totalPrice, 2); ?></h3>
        </div>
    </div>
    <!-- cart table section end -->

    <?php
    //remove item in cart
    if (isset($_GET['cartId'])) {
        $itemDeleteQuery = "DELETE FROM cart WHERE cart_id = {$_GET['cartId']}";
        if (mysqli_query($con, $itemDeleteQuery)) {
            echo "<script>alert('item removed from cart successfully');</script>";
            echo "<script>window.open('cart.php', '_self')</script>";
            exit();
        }
    }

    //update cart item

    ?>

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