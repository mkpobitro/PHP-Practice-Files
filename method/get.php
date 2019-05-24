<?php
/*Query string ( $_GET ): 
* $_GET use hoi link a key & value add kore man pauar jonne
* LInk er madhome value change kora jai
* diffult man set korar jonne amra isset use krbo.
* if er use: exmple:*/

if(isset ($_GET['name']) ){
echo $_GET['name'];
}

 
/*shorthand statement: ($_GET kivabe kaj kore):
shorthand statement use korle if else er kono jhamela nai. ek line a likte parbo.*/
//short hand statement:

$name = isset($_GET['name']) ? $_GET['name'] : NULL;
echo $name;

 
$fname = isset($_GET['firstname']) ? $_GET['firstname'] : "Pobitro";
$lname = isset($_GET['lastname']) ? $_GET['lastname'] : "Raj";
$email = isset($_GET['email']) ? $_GET['email'] : "pobitro@gmail.com";

?>

<form action="" method="GET">
    <input type="text" name="firstname" placeholder="First Name">
    <input type="text" name="lastname" placeholder="Last Name">
    <input type="email" name="email" placeholder="Email Address">
    <input type="submit" name="submit" value="Submit Now">
</form>

    First Name: <?=$fname; ?> <br>
    Last Name: <?=$lname; ?> <br>
    Email: <?=$email; ?>

