<?php
session_start();

// Redirect to the login page if user is not login
if (!isset($_SESSION['staffId'])) {
    header("location:../home-pages/admin-login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>