<!-- 1. Index based array:    
	$array = array('value','value','value'); or $array = ['value','value','value']; 
	echo $array[0] 
-->
<?php
/******************** Indexing Array **************************/
$name = 'Pobitro Raj';
$home = 'Satkhira';
$study = "Rajshahi University";

$array = array("Pobitro Raj", "Satkhira", "Rajshahi University"); // jekono ek system a array define kora jai
$array2 = ["PHP", "JavaScript", "Laravel"]; 

echo $array[0];
$array[2] = "Dhaka University"; // index 2 er value overright
echo "<pre>";
echo print_r($array);

//array merge: 
$new_array = array_merge($array,$array2);
print_r($new_array); 





echo "<hr><br>";
$hello = array("pbtro","atik","konok","hasu","noman");

$name = count($hello);

for($i=0; $i<$name; $i++){
	echo $hello[$i]."<br>";
}



