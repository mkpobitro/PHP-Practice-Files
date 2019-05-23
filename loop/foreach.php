<?php

/*
পিএইচপি foreach লুপ
কোন একটি array এর প্রত্যেক এলিমেন্টের জন্য কোড রান করানোর জন্য foreach লুপ ব্যবহার করা হয়।

সিনট্যাক্স
foreach ($array as $value) {
    এই কোড এক্সিকিউট হবে;
} 
আরে এর আরগুমেন্ট গুলাকে রিপিট করা দরকার হলে foreach  ইউস করবো ।
*/


$list = ['Home', 'About', 'Blog', 'Service', 'Contact'];

foreach($list as $menu){ ?>
    <li><?php echo $menu; ?></li>
<?php } 


//foreach loop with key define:
foreach($list as $key => $menu){ ?>
    <li><?php echo $menu . " etar index key: ". $key; ?></li>
<?php } 



//================= foreach for multi array ===========
$product = array(
    array('name' => 'Mango', 'price' => '200'),
    array('name' => 'Apple', 'price' => '400'),
    array('name' => 'Orange', 'price' => '300'),
    array('name' => 'Banana', 'price' => '100')
);
echo '<pre>';
print_r($product);

foreach($product as $single){
    // echo $single['name'] . $single['price'];
    echo $single['name'] . "<span style='color: red;'> Price ".$single['price']." tk</span>".'<br>';
};




