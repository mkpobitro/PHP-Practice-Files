<?php 
    include_once "function.php";
    
    session_start();
        if(user_logged_in()){
            header('location: admin.php');
        }

    if(isset($_POST['login'])){
        $user = $_POST['uname'];
        $pass = $_POST['pass'];
        $check = isset($_POST['check']);

        define('USERNAME', 'pobitro');
        define('PASSWORD', '1234');

        if( $user == USERNAME && $pass == PASSWORD){
        
            $_SESSION['success']  = '';
            setcookie('cookieName', $check, time() + 60*60);;

            header('location: admin.php');
        
        }else{
            $fail = "$user your information is not correct";
        }


    }

?>

<form action="" method="POST">
    <input type="text" name="uname" placeholder="User Name"> <br>
    <input type="password" name="pass" placeholder="Password"><br>
    <input id="check" type="checkbox" name="check">
    <label for="check">Keep me logged in</label><br>
    <input type="submit" name="login" value="Submit">
</form>
<?php if(isset($fail)){
    echo $fail;
}
