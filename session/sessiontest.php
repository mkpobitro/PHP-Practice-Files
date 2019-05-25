<?php 

session_start();

echo $_SESSION['name'].'<br>';

echo $_SESSION['pro'];
?>
<a href="logout.php">Logout Now</a>