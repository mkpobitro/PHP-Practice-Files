<?php

//variable:
$name = "Pobitro Raj";
$profession = "Web Programmer";

$man1 = 40;
$man2 = 50;
$data = $man1 + $man2;
$man1 = 100;
?>

    <h2>My name is <?php echo $name; ?></h2>
    <h3>my profession is <?php echo $profession; ?></h3>
    <h3>The result is <?php echo $data; ?></h3>
	<h3>php can overwrite previous code: <?php echo $man1; ?></h3><hr>

<?php


// Difference between signle('') and double("") cotesion: "cotesion is more powerful than single "
    $test = 20;
	$test2 = 80;
    $mark = "Rahim got fail marks $test";//double("") eki line a likte pari. concat kora lage na
    $mark2 = 'Rahim got good marks'.' '.$test2; //single(''). concat must korte hoi.



// How to use double cotesion into double cotesion and signle into single cotesion by back slash \
    // $data1 = "Hello world and My name is \"Pobitro Raj\"'
    $data2 ='Hello world and My name is \'Pobitro Raj\'';
?>
    <h3><?php echo $mark; ?></h3>
    <h3><?php echo $mark2; ?></h3>
    <h3><?php echo $data2; ?></h3> <hr><br>

<?php


//Global variable outsite the function:
$test = "hello bangladesh";
function something(){
    global $test;
    return $test;
}
echo something();

echo "<hr><br>";


//Global variable inside the function:
function something2(){
    global $sss;
    $sss = "hello world";
    
}
something2();
echo $sss;

 /* global variable:
	* jodi function er baire ekta variable create kore seta k function er vitr call korte jai . tahole generally eta kaj krbe na.
oi bairer variable ta k cena nor jonne function er vitr seta k global krte hbe. Exmple: */
			$b = "pobitro";

			function kkk(){
			    global $b;
		 	   return $b;
			}
			echo kkk();



/* abr same vabe amra jokhon function er vitor variable create kore baire call korbo sekhetreo function er vitr oi variable ta k age global kre nite hbe. Exmple: */
		function some(){
  		  global $b;
 		$b = "pobitro";
		}
		some();
		echo $b;	

/****** $GLOBALS:
	* global & #GLOBALS 2 tai same kajer jonne use hoi. global tai beshi use hoi . jdi global ta na kaj kore sekhetre amra $GLOBALS ta use krbo. ***/
		$a = "something";
		function anyting(){
   		 echo $GLOBALS['a'];
		}
		anyting();

/* difference: jdi function er baire theke kono variable k function er vitre use korte cai sekhetre $GlOBALS ta use krte pari. r function er vitr theke baire use korte caile amra global ta use krte pari. */





