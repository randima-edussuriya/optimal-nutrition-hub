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
    <link rel="stylesheet" href="../css/sign-up.css">

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
    <div class="container  row my-5 mx-auto">
        <div class="wrapper col-md-6 mx-auto">
            <form action="#" method="post">
                <h2>Register Staff</h2>

                <div class="input-box">
                    <input type="text" name="fName" id="fName" placeholder="First Name">
                </div>
                <div class="input-box">
                    <input type="text" name="lName" id="lName" placeholder="Last Name">
                </div>
                <div class="input-box">
                    <input type="text" name="userName" id="userName" placeholder="Username">
                </div>
                <div class="input-box">
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <div>
                    <select name="staffType">
                        <option selected disabled value=''>Select Staff Type</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                    </select>
                </div>
                <div class="input-box">
                    <input type="text" name="email" id="email" placeholder="E-mail">
                </div>
                <div class="input-box">
                    <input type="text" name="contactNo" id="contactNo" placeholder="Contact No">
                </div>
                <div class="input-box text-start">
                    <input type="date" name="hireDate" id="hireDate" class="w-50  ">
                    <label for="hireDate">Hire Date</label>
                </div>
                <div class="input-box">
                    <input type="text" name="nic" id="nic" placeholder="NIC">
                </div>
                <div class="input-box">
                    <input type="text" name="addressLine1" id="addressLine1" placeholder="Address Line-1">
                </div>
                <div class="input-box">
                    <input type="text" name="addressLine2" id="addressLine2" placeholder="Address Line-2">
                </div>
                <div class="input-box">
                    <input type="text" name="addressLine3" id="addressLine3" placeholder="Address Line-3">
                </div>
                <div class="input-box">
                    <input type="text" name="addressLine4" id="addressLine4" placeholder="Address Line-4">
                </div>
                <button type="submit" class="btn btn-light" name="staffRegister">Register</button>
            </form>
        </div>
    </div>
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