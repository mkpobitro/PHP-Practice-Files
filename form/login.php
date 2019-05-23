<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Basic Form</title>
    <!--Bootstrap Css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
body {
    margin: 0;
    padding: 0;
    font-family: candara;
	background: #ecf0f1;
}

.reg-form {
    margin: 50px auto;
    border: 1px solid white;
    padding: 30px;
	color: black;
	font-weight: bold;
	box-shadow: 2px 1px 7px rgba(0, 0, 0,0.5);
	background: white;
}
.reg-form hr{
	border-top: 2px solid grey;;
	font-weight: bold;
}

.login-form table {
    margin-top: 30px;
}

.reg-form input {
    padding: 6px 10px;
	border: 1px solid grey;
}

	</style>
</head>
<body>


<?php

$error = ['full_name' => '', 'user_name' => '', 'email' => '', 'pass' => ''];
$fullName = $userName = $email = $password = '';

if(isset($_POST['login'])){
	$userName = htmlspecialchars($_POST['uname']);	
	$password = htmlspecialchars($_POST['pass']);



	if(empty($userName)){
		$error['user_name'] = "Please Enter Your User Name";
	}

	if(empty($password)){
		$error['pass'] = "Please Enter Your Password";
	}
}


?>


	<div class="container reg-form w-50 mt-5 c-dark">
		<h2>Sign In Now</h2>
		<hr>

		<form action="" method="POST">
			<div class="form-group">
				<label for="uname">User Name</label>
				<input type="text" id="uname" name="uname" class="form-control" value="<?=$userName?>">
				<span style="color: red;"><?php echo $error['user_name']; ?></span>
			</div>
			<div class="form-group">
				<label for="pass">Password</label>
				<input type="password" id="pass" name="pass" class="form-control" value="<?=$password?>">
				<span style="color: red;"><?php echo $error['pass']; ?></span>
			</div>
			<div class="form-group">
				<input type="submit" value="Login Now" name="login" class="btn btn-primary">
			</div>
			
		</form>

		<h4>If you are not Existing User Please, <a target="_blank" href="form.php">Sign Up</a> here</h4>


	</div>






</body>
</html>