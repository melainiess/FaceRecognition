<?php

include 'conn.php';

// Check if the user is logged in
if (!isset($_SESSION['role'])) {
    header("Location: ../login/login.php");
    exit(); // Always call exit after a header redirect
}

