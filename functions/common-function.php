<?php

function getItemCard($itemSelectQuery)
{
    global $con;
    // execute query and store result
    $itemResult = mysqli_query($con, $itemSelectQuery);
    if (mysqli_num_rows($itemResult) > 0) {
        // fetch item details
        while ($itemRow = mysqli_fetch_assoc($itemResult)) {
            $item_discount = (float)$itemRow['item_discount'];
            $item_sell_price = (float)$itemRow['item_sell_price'];

            $discountedPrice = $item_sell_price * (100 - $item_discount) / 100; // discount claculation
            // show discount if item have discount
            if ($item_discount == 0) {
                $displayNone = 'd-none'; // apply bootstrap d-none class
            } else {
                $displayNone = ''; // remove bootstrap d-none class
            }

            // item availabiity status handling
            if ($itemRow['item_stock_qty'] == '0') {
                $availabiliy = 'Out of Stock';
                $AvailabiliyColor = 'text-danger';
            } else {
                $availabiliy = 'In Stock';
                $AvailabiliyColor = 'text-success';
            }

            // display item card
            echo "<div class='col-sm-6 col-md-4 col-lg-3 text-center mb-4'>
        <div class='card border-0 bg-light'>
          <img src='images/products/{$itemRow['item_image1']}' class='card-img-top p-2 position-relative' alt='{$itemRow['item_name']}'>
          <span class='$displayNone position-absolute top-0 start-0 rounded-end-pill badge bg-success p-2'>
            -$item_discount%
          </span>
          <div class='card-body p-0 pb-2'>
          <h6 class='product-name'>{$itemRow['item_name']}</h6>
            <h6 class='$displayNone text-decoration-line-through d-inline text-body-tertiary'>Rs. $discountedPrice</h6>
            <h6 class='d-inline'>Rs. $item_sell_price</h6>
            <h6 class='$AvailabiliyColor fw-bold '>$availabiliy</h6>
            <a href='product-view.php?product={$itemRow['item_id']}' class='btn btn-outline-warning btn-view btn-sm'>View</a>
          </div>
        </div>
      </div>";
        }
    } else {
        echo "<h2>Not available products</h2>";
    }
}
