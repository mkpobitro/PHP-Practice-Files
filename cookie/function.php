<?php 


function user_logged_in(){
    if(isset($_SESSION['success']) || isset($_COOKIE['cookieName'])){
        return true;
    }else{
        return false;
    }
}