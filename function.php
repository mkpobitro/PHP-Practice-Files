<?php
//==============function===================:
    function hello(){
        return "My name is Pobitro Raj";
    }
    echo hello();
	
    function title(){
        return "This is Title";
    }
    $our_title = title();
	
    function desc(){
        return "this is description";
    }
?>

    <!DOCTYPE HTML>
    <html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $our_title; ?></title>
    </head>
    <body>
    
        <h2><?php echo desc(); ?></h2><hr>
        
    </body>
    </html>	
        
<?php

//============some built in function==============:
    $date = date('d M, Y');
    date_default_timezone_set("Asia/Dhaka");
    $time = date("h:i:sa");

    echo "The Current time is ".$time;

    // echo phpinfo();


// Built in function:
    $test1 = "Welcome to Bangladesh"."<hr>";
    $test2 = "Hello Bangladesh";
    $test_array = array('one', 'two', 'three');
	
    echo "<hr>";
    echo strlen($test2).'<br>';
    echo gettype($test2).'<br>';
    print_r($test_array).'<br>';
    var_dump($test_array).'<br><hr>';


    echo "<hr>";   
    echo strtoupper($test1);
    echo strtolower($test1);
    echo str_replace('Bangladesh' , 'Australia' , $test1); //echo str_replace('search' , 'replace' , 'subject');



    
//function:( parameter::argument) 
    function person($any ="a", $pro = "web Programmer"){
        // return "Pobitro is $any $pro"; //for double ("")
        return 'pobitro is'.' '.$any.' '.$pro; //for single ('')
    }

    function test($name='Pobitro',$location='Bangladesh'){
        echo "My Name is $name"; //for single contention: 'My name is '.$name;
        echo "<br>";
        echo "I'm from $location"; // 'I\'m from '.$location;
    }
?>

    <h3><?php echo person('a', 'doctor'); ?></h3>
    <h3><?php echo person('an', 'engineer'); ?></h3>
    <h3><?php echo person(); ?></h3>

    <h2><?php test('Raj', 'India'); ?></h2>
	
</body>
</html>	
	
	
	
	
