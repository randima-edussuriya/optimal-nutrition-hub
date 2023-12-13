<?php
// Include the database configuration file
include('../database/config.php');

// Fetch select staff type drop down list
$staffTypeSelectQuery = "SELECT * FROM staff_type;";
// Execute the query and store the result
$resultStaffType = mysqli_query($con, $staffTypeSelectQuery);
// Fetch staff types from database

// Check if the form is submitted
if (isset($_POST['staffRegister'])) {
    // remove spaces and sanitize
    $fName = filter_var(trim($_POST['fName']), FILTER_SANITIZE_STRING);
    $lName = filter_var(trim($_POST['lName']), FILTER_SANITIZE_STRING);
    $userName = filter_var(trim($_POST['userName']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $contactNo = filter_var(trim($_POST['contactNo']), FILTER_SANITIZE_STRING);
    $hireDate = $_POST['hireDate'];
    $nic = filter_var(trim($_POST['nic']), FILTER_SANITIZE_STRING);
    $addressLine1 = filter_var(trim($_POST['addressLine1']), FILTER_SANITIZE_STRING);
    $addressLine2 = filter_var(trim($_POST['addressLine2']), FILTER_SANITIZE_STRING);
    $addressLine3 = filter_var(trim($_POST['addressLine3']), FILTER_SANITIZE_STRING);
    $addressLine4 = filter_var(trim($_POST['addressLine4']), FILTER_SANITIZE_STRING);
    $staffTypeId = filter_var(trim($_POST['staffType']), FILTER_SANITIZE_NUMBER_INT);

    // Check if the category name is empty
    if ($fName == '' or $lName == '' or $userName == '' or $password == '' or $email == '' or $contactNo == '' or $hireDate == '' or $nic == '' or $addressLine1 == '' or $addressLine2 == '' or $addressLine3 == '' or $staffTypeId == 0) {
        echo "<script>alert('Please fill the All the fields')</script>";
    } else {
        $staffInsertQuery = "INSERT INTO staff (staff_fname, staff_lname, staff_username, staff_pwd, staff_email, staff_phone, staff_hire_date, staff_nic, staff_add_line1, staff_add_line2, staff_add_line3, staff_add_line4, fk_staff_type_id) VALUES ('$fName', '$lName', '$userName', '$password', '$email', '$contactNo', '$hireDate', '$nic', '$addressLine1', '$addressLine2', '$addressLine3', '$addressLine4', $staffTypeId);";
        // execute query
        if (mysqli_query($con, $staffInsertQuery)) {
            // Display alert
            echo "<script>alert('New Staff is registered Successfully')</script>";
        }
    }
}
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