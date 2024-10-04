<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['staffId'])) {
    header("Location:../auth/admin-login.php");
    exit();
}
