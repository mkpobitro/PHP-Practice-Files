<?php
/*
    লুপ হচ্ছে একটা জিনিস কে বার বার রিপিট করা 

while (কন্ডিশন সত্য থাকে) {
    কোড সম্পাদিত হতে থাকবে;
}
*/

//====== increment/pre increment eco effect:=================
$a = 20;
echo $a++;
echo ++$a;

echo "<hr><br>";

//while loop increment:

 $i = 2;
 while($i < 10 ){
    echo $i.'<br>';
    $i++;
 }
echo "<hr>";

/* $i = 2;
 while($i < 10 ){
    $i++;
    echo $i.'<br>';
 }
*/

echo "<hr><br>";
$x = 1;
while($x <= 100){
    echo "the number is: $x <br>";
    $x++;
}



?>

</body>
</html>
