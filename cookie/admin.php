<?php 
    include_once "function.php";
    

session_start();
if(!user_logged_in()){
    header('location: index.php');
}

?>
<body style="background: skyblue">
    <h1>Admin Page</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit recusandae, adipisci numquam, illo voluptas quibusdam fugit dolorem error quidem facilis rerum, fugiat veritatis ut natus cumque tenetur non ipsa porro!</p>
</body>

<a href="logout.php">Logout Now</a>