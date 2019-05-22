<?php

    $db = mysqli_connect('localhost','root','','login2');

    if(!$db){
        die("connection error: ".mysqli_connect_error());
    }

    $sql = "SELECT * FROM users LIMIT 5 OFFSET 1";
    $result = mysqli_query($db, $sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<b>Name</b>: ". $row['name']."-<b>Username</b>: ". $row['username']."-<b>Email</b>: ". $row['email']."<br>";
        }
    }

    

    // সংযোগ বিচ্ছিন্ন
    mysqli_close($db);


?>
