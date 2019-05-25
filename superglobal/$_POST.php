<!DOCTYPE html>
<html>
<head>
 <title>পিএইচপি উদাহরণ</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  নামঃ <input type="text" name="fullname">
  <input type="submit" value="Name Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ইনপুট ফিল্ডের ভ্যালু কালেক্ট
    $name = $_POST['fullname'];
    if (empty($name)) {
        echo "নাম পূরন করা হয়নি";
    } else {
        echo "আপনার পূরনকৃত নামঃ". $name;
    }
}
?>

</body>
</html>