<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic Login system with session</title>
</head>
<body>
<?php
    session_start();
    if(isset($_SESSION['success'])){
        header('location: admin.php');
    }

    //isset shorthand system:
    // $email = isset($_POST['email']) ? $_POST['email'] : "";
    // $pass = isset($_POST['pass']) ? $_POST['pass'] : "";
 
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];


    define('EMAIL', 'pob@gmail.com');
    define('PASSWORD', '12345');

    if($email == EMAIL && $pass == PASSWORD){
        $_SESSION['success'] = '';
        header('location: admin.php');
    }else{
        $error = "<span style='color: red'> Hey! Your Password does not match. Try Again </span>";
    }


}

?>

        <form action="" method="POST">
            <input type="email" name="email" placeholder="Email" value="" required>
            <input type="password" name="pass" placeholder="Password" value="" required>
            <input type="submit" value="Login" name="login">
        </form>

        <br>

        <?php
            if(isset($error)){
                echo $error;     
            }
            
        ?>
</body>
</html>