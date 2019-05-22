<?php
/*
Multi dimensional array:
	array er vitore array. multiple type er array thakte pare
*/



/****************** Multidimensional Array *********************/
$multiDimensionalArray = array(
    array("Hello","Hi"),
    array("Pobitro"),
    array('Developer'),
);

echo $multiDimensionalArray[0][1];
echo "<pre>";
print_r($multiDimensionalArray);

echo "<hr><br>";




//multidimensional array without key:
$twoDimensionalArray = array(
    array('name' => 'Pobitro Raj', 'city' => 'Rajshahi', 'like' => 'PHP'),
    array('name' => 'Alam Hasu', 'city' => 'Dhaka', 'like' => 'WordPress'),
    array('name' => 'Jonny', 'city' => 'Rongpur', 'like' => 'HTML'),
);
echo $twoDimensionalArray[0]['name'].'<br>';
echo $twoDimensionalArray[2]['city'].'<hr>';





//multidimensional array with key:
$twoDimensionalArray = array(
    'key_one' => array('name' => 'Pobitro Raj', 'city' => 'Rajshahi', 'like' => 'PHP'),
    'key_two' => array('name' => 'Alam Hasu', 'city' => 'Dhaka', 'like' => 'WordPress'),
    'key_three' => array('name' => 'Jonny', 'city' => 'Rongpur', 'like' => 'HTML'),
);
echo $twoDimensionalArray['key_two']['name'].'<br>';
echo $twoDimensionalArray['key_three']['like'];








echo "<hr><br>";

$name = array(

	array("Rohim",22,"student"),
	array("karim",34,"farmer"),
	array("hasu",22,"engineer"),
	array("pobitro",22,"developer")

);


echo $name[2][2];

?>