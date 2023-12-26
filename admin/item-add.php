<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- CSS link -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/sign-up.css">
    <!-- JS link -->
    <script src="formValidationScript.js" defer></script>

    <title>Item Add Form-Optimal Nutrition Hub</title>
</head>

<body style="background-color: lightgray;">
    <!-- Navigation bar start -->
    <?php
    include('admin-navigation-bar.php');
    ?>
    <!-- Navigation bar end -->

    <!-- item add form section start -->
    <div class="container  row my-5 mx-auto">
        <div class="wrapper col-md-6 mx-auto">
            <form action="#" method="post" enctypr="multipart/form-data">
                <h2>Add Item</h2>


                <div class="input-box">
                    <input type="text" name="name" id="name" placeholder="Name" required>
                </div>
                <label class="" for="image1">Upload Image</label>
                <div class="input-file-box mt-0 ">
                    <input class="" type="file" name="image1" id="image1" required>
                </div>
                <label class="" for="image2">Upload Image</label>
                <div class="input-file-box mt-0 ">
                    <input class="" type="file" name="image2" id="image2" required>
                </div>
                <div>
                    <select name="categoty" required>
                        <option selected disabled value=''>Select Category</option>
                        <option value="1">cat1</option>
                        <option value="2">cat2</option>
                    </select>
                </div>
                <div class="input-box">
                    <input type="text" name="brand" id="brand" placeholder="Brand">
                </div>
                <textarea class="" name="description" id="description" placeholder="Description" rows="3"></textarea>
                <div class="input-box mt-2">
                    <input type="text" name="costPrice" id="costPrice" placeholder="Cost Price" required>
                </div>
                <div class="input-box">
                    <input type="text" name="sellPrice" id="sellPrice" placeholder="Sell Price" required>
                </div>
                <div class="input-box">
                    <input type="text" name="discount" id="discount" placeholder="Discount">
                </div>
                <div class="input-box">
                    <input type="text" name="stockQty" id="stockQty" placeholder="Stock Quantity" required>
                </div>
                <div class="input-box text-start">
                    <input type="date" name="dateAdded" id="dateAdded" class="w-50" required>
                    <label for="dateAdded">Added Date</label>
                </div>
                <button type="submit" class="btn text-bg-secondary" name="itemAdd">Add</button>
            </form>
        </div>
    </div>
    <!-- item add form section end -->

    <!-- Footer section start -->
    <footer class="bettle">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2023 Optimal Nutrition Hub | Devoloped by -
                        <a href="#"> BattleShip</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer section end -->

    <!--Bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>