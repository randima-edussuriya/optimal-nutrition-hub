<?php
require_once('../auth/auth.php');

// Allow access to Admin (1000), Inventory Manager (1002)
if ($_SESSION['staffTypeId'] != 1000 && $_SESSION['staffTypeId'] != 1002) {
    // Redirect to an unauthorized access page
    header("Location: ../auth/unauthorized.php");
    exit();
}
