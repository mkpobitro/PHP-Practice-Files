<?php 
session_start();

session_destroy();
$_SESSION = array();

setcookie('cookieName', $check, time() - 3600*2);

header('location: index.php');