<?php 

session_start();

session_destroy();
$_SESSION = array();// eta na thakle o kaj korbe but ditye rakha ta better. jdi kokhono session_destroy kaj na kore.


header('location: index.php');