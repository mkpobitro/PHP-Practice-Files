<?php 
    session_start();

    if(!isset($_SESSION['success'])){
        header('location: index.php');
    }
?>

<h1>This is admin page</h1>

<a href="logout.php">Logout Now</a>
