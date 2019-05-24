<?php 
/*
=> It will work both for GET and POST method.
=> When we need some dynamical function and may be need both GET and POST method. only that times we will use it. but its really rare. 
=> We always try to use POST method.
*/

// amra eta k if isset er vitore o korte pari. but eita hosse short hand form:
    $first = isset($_REQUEST['fname']) ? $_REQUEST['fname'] : NULL ;
    $last  = isset($_REQUEST['lname']) ? $_REQUEST['lname'] : NULL ;
    $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : NULL ;

    $success = "";

    if(isset($_POST['submit'])){
        $success = "<span style='color:green; font-size: 22px; font-weight: bold;'>The Post Has Been Submitted </span>";
    }

?>

    <form action="" method="POST"> <!-- ekhane GET method o use korte pari -->
        <input type="text" name="fname" placeholder="First Name" value="">
        <input type="text" name="lname" placeholder="Last Name" value="">
        <input type="email" name="email" placeholder="Email Address" value="">

        <input type="submit" name="submit" value="Submit BTN">
    </form>
    <br>
    <?php 
    if(isset($success)){
      echo "<p>".$success. "</p>"; 
    }

    ?>
    <br>

    First Name: <?php echo $first ?> <br>
    Last Name : <?php echo $last ?> <br>
    Email : <?php echo $email ?>
    
</body>
</html>