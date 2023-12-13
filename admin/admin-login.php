<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Google Material icons CSS link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/login.css">

    <title>Admin Home-Optimal Nutrition Hub</title>
</head>

<body style="background-color: lightgray;">
    <!-- Navigation bar start -->
    <?php
    include('admin-navigation-bar.php');
    ?>
    <!-- Navigation bar end -->

    <!-- Admin login section start -->
    <div class="container row my-5 mx-auto ">
        <div class="col-md-6 mx-auto">

            <div class="wrapper">
                <form action="post" style="margin: 4%;">
                    <h1>Login-Optimal Nutrition Hub</h1>
                    <div class="input-box">
                        <input type="text" placeholder="Username" required>
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Password" required>
                    </div>
                    <div class="remember-frogot">
                        <a href="#"> Fogot password?</a>
                    </div>

                    <button type="submit" class="btn btn-light text-bg-secondary"> Login</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Admin login section end -->

    <!-- Footer section start -->
    <div>
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