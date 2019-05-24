<?php 
/*পিএইচপি $_POST
method="post" এর মাধ্যমে এইচটিএমএল ফর্ম সাবমিট করার পরে ডেটা কালেক্টশন করার জন্য সুপারগ্লোবাল ভ্যারিয়েবল $_POST ব্যপকভাবে ব্যবহৃত হয়। বিশেষকরে ভ্যারিয়েবল পাস(pass) করানোর জন্য $_POST এর ব্যবহার চোখে পড়ার মত।
*/


// amra eta k if isset er vitore o korte pari. but eita hosse short hand form:
    $first = isset($_POST['fname']) ? $_POST['fname'] : NULL ;
    $last  = isset($_POST['lname']) ? $_POST['lname'] : NULL ;
    $email = isset($_POST['email']) ? $_POST['email'] : NULL ;

    $success = "";

    if(isset($_POST['submit'])){
        $success = "<span style='color:green; font-size: 22px; font-weight: bold;'>The Post Has Been Submitted </span>";
    }

?>

    <form action="" method="POST">
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