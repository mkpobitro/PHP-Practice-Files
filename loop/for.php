<?php

/*পিএইচপি for লুপ

কোনো একটি নির্দিষ্ট কোড ব্লককে কতবার রান করাতে হবে তা যদি আগে থেকেই জানা থাকে সেক্ষেত্রে for লুপ ব্যবহার করা হয়।

সিনট্যাক্স(Syntax):
=================
for (initial value; condition; increment/decrement) {
    এই কোড সম্পাদিত হবে;
} 
*/

for($i = 2; $i < 16; $i ++){
 echo $i .'<br>';
}

echo "<hr><br>";

$data = [2,4,6,8,10];

for($i=1; $i < count($data); $i ++){
    echo $i.'<br>';
}





 echo "<hr><br>";
 for($x =1; $x <= 100; $x++){
     echo "the number is: $x <br>";
 }

?>

</body>
</html>
