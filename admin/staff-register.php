<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/sign-up.css">

    <title>Staff Register Form-Optimal Nutrition Hub</title>
</head>

<body style="background-color: lightgray;">
    <!-- Navigation bar start -->
    <nav class="navbar navbar-expand-lg bg-body-secondary  sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand ms-5 me-auto " href="admin-home.html">
                <img src="../Images/logo.svg" alt="logo" class="logo ">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Right item start -->
                <ul class="navbar-nav ms-auto ">

                    <li class="nav-item">
                        <a class="nav-link" href="#"><img src="../Icons/profile-line.svg" alt=""
                                style="width: 32px;"></a>
                    </li>
                </ul>
                <!-- Right item end -->
            </div>
        </div>
    </nav>
    <!-- Navigation bar end -->

    <!-- Staff Register form section start -->
    <div class="container  row my-3 mx-auto">
        <div class="col-md-6 mx-auto">
            <div class="wrapper">
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
                    <div class="input-box">
                        <input type="text" name="email" id="email" placeholder="E-mail">
                    </div>
                    <div class="input-box">
                        <input type="text" name="contactNo" id="contactNo" placeholder="Contact No">
                    </div>
                    <div class="input-box">
                        <input type="date" name="hireDate" id="hireDate" class="w-50 ">
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
                    <button type="submit" class="btn btn-light" name="register">Register</button>
                </form>
            </div>
        </div>
    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>