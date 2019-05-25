<?php 
    session_start();

    if(!isset($_SESSION['success'])){
        header('location: login.php');
    }
?>

<h1>This is admin page</h1>

<a href="logout.php">Logout Now</a>
