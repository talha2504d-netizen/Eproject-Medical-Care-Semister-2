<?php
session_start();

if (!isset($_SESSION['user_id']) ) {
    header("Location: login.php");
    exit();
}
?>

<h1>Admin Panel</h1>
<p>Welcome, admin!</p>