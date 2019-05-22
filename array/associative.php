<!-- 
    2. Associative array: key define kora thakbe must (string base key)
	'id' => 'value'  
-->

<?php
/******************* Associative Array ********************/
$associativeArray = array(
	'name'	=> 'Pobitro',
	'city'	=> 'Rajshahi',
	'like'	=> 'PHP',
);
echo $associativeArray['city'];


echo "<hr><br>";
$name = array("rohim"=> "22", "korim"=>"35", "joshim"=>"32", "atik"=> "24");

print_r($name);

foreach ($name as $x => $value){
	echo "Name: ".$x.","."Value: ".$value."<br>";
}


echo "<hr><br><br>";
