<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/staff-management.css?v=<?php echo time(); ?>">

    <title>Sfatt Account Manegement-Optimal Nutrition Hub</title>
</head>

<body>
    <!-- Navigation bar start -->
    <?php
    include('../../includes/admin-navigation-bar.php');
    ?>
    <!-- Navigation bar end -->




    <!-- BACK & Register button start -->
    <div class="back-button-container">
        <a href="staff-register.php" class="Registration">Register</a>
        <a href="../home-pages/admin-home.php" class="back-button">Back</a>
    </div>
    <!--  BACK & Register button end -->

    <!-- Staff details  section start -->
    <h2 class="text-center ">Staff Management</h2>
    <table>
        <thead>
            <tr>
                <th>Staff ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Staff Type</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example Data (Replace with actual data from your backend) -->
            <tr>
                <td>1</td>
                <td>name</td>
                <td>@gmail.com</td>
                <td>admin_user</td>
                <td>Admin</td>
                <td>Active</td>
                <td class="action-buttons">
                    <button class="view-button">View</button>
                    <button class="update-button">Update</button>
                    <button class="deactivate-button">Deactivate</button>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- Staff details section ende -->

    <!-- Footer section start -->
    <div class="fixed-bottom ">
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
    </div>
    <!-- Footer section end -->

    <!--Bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>