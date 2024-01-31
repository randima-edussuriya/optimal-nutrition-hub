<?php
// get item card
function getItemCard($con, $itemSelectQuery)
{
  // execute query and store result
  $itemResult = mysqli_query($con, $itemSelectQuery);
  if (mysqli_num_rows($itemResult) > 0) {
    // fetch item details
    while ($itemRow = mysqli_fetch_assoc($itemResult)) {
      $item_discount = (float)$itemRow['item_discount'];
      $item_sell_price = (float)$itemRow['item_sell_price'];

      $discountedPrice = $item_sell_price * (100 - $item_discount) / 100; // discount claculation
      // show discount if item has discount
      if ($item_discount == 0) {
        $displayNone = 'd-none'; // apply bootstrap d-none class
      } else {
        $displayNone = ''; // remove bootstrap d-none class
      }

      // item availabiity status handling
      if ($itemRow['item_stock_qty'] == '0') {
        $availabiliy = 'Out of Stock';
        $AvailabiliyColor = 'text-danger'; // apply bootstrap class
      } else {
        $availabiliy = 'In Stock';
        $AvailabiliyColor = 'text-success'; // apply bootstrap class
      } ?>

      <!-- display item card -->
      <div class="col-sm-6 col-md-4 col-lg-3 text-center mb-4">
        <div class="card border-0 bg-light">
          <img src="images/products/<?php echo $itemRow['item_image1']; ?>" class="card-img-top p-2 position-relative" alt="<?php echo $itemRow['item_name']; ?>">
          <!-- item discount percentage-->
          <span class="<?php echo $displayNone; ?> position-absolute top-0 start-0 rounded-end-pill badge bg-success p-2">
            -<?php echo $item_discount; ?>%
          </span>
          <div class="card-body p-0 pb-2">
            <h6 class="product-name"><?php echo $itemRow['item_name']; ?></h6>
            <!-- item prices-->
            <h6 class="<?php echo $displayNone; ?> text-decoration-line-through d-inline text-body-tertiary">Rs. <?php echo number_format($item_sell_price, 2); ?></h6>
            <h6 class="d-inline">Rs. <?php echo number_format($discountedPrice, 2); ?></h6>
            <!-- item availability -->
            <h6 class="<?php echo $AvailabiliyColor; ?> fw-bold "><?php echo $availabiliy; ?></h6>
            <a href="product-view.php?productId=<?php echo $itemRow['item_id']; ?>" class="btn btn-outline-warning btn-view btn-sm">View</a>
          </div>
        </div>
      </div>
<?php }
  } else {
    echo "<h2>Not available products</h2>";
  }
}
