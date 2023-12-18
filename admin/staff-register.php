<?php
// Include the database configuration file
include('../database/config.php');

// Fetch select staff type drop down list
$staffTypeSelectQuery = "SELECT * FROM staff_type;";
// Execute the query and store the result
$resultStaffType = mysqli_query($con, $staffTypeSelectQuery);
// Fetch staff types from database

// Check if the form is submitt

// Close the database connection
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/footer.css">
    <!-- <link rel="stylesheet" href="../css/sign-up.css"> -->

    <title>Staff Register Form-Optimal Nutrition Hub</title>
</head>

<body style="background-color: lightgray;">
    <!-- Navigation bar start -->
    <?php
    include('admin-navigation-bar.php');
    ?>
    <!-- Navigation bar end -->

    <!-- Staff Register form section start -->

    <!-- Staff Register form section end -->

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