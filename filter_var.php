<?php 
/*
* eta form validation a use hoi.
* filter_var reference: << https://www.w3schools.com/php/php_ref_filter.asp >> ekhan theke practice korte hbe

কেন আপনি বাহ্যিক উৎস হতে প্রাপ্ত ডেটা সর্বদাই ভ্যালিডেট করবেন?
ইনভ্যালিড ডেটা সাবমিট আপনার ওয়েব এপ্লিকেশনে সিকিউরিটি জনিত সমস্যা সৃষ্টি করতে পারে। এমনকি আপনার ওয়েবপেজকে ধ্বংসও করে দিতে পারে!
পিএইচপি ফিল্টার ব্যবহারের মাধ্যমে আপনি আপনার এপ্লিকেশনে সঠিক ইনপুট নিশ্চিত করতে পারেন!

পিএইচপি filter_var() ফাংশন
ডেটা ভ্যালিডেট এবং স্যানিটাইজ একসাথে সম্পন্ন করার জন্য filter_var() ফাংশন ব্যবহার করা হয়।

filter_var() ফাংশনটি একটি নির্দিষ্ট ফিল্টারের মাধ্যমে একক ভ্যারিয়েবলকে ফিল্টার করে।

filter_var এর সিনট্যাক্স
filter_var (variable, filter, options)
Copy
প্যারামিটার এর ব্যাখ্যা

variable - আবশ্যক। যে ভ্যালুটি আপনি ফিল্টার/চেক করতে চান।
filter - ঐচ্ছিক। ফিল্টার এর যে আইডি/টাইপ প্রয়োগ করবেন।
options - ঐচ্ছিক। অপশন এর এসোসিয়েটিভ অ্যারে।

*/

$email = "pobitro@gmail.com";
//======================Check valid email or not===================
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "this is valid email address";
}else{
    echo "Its not valid email";
}

echo "<hr>";





$email = "pobit^ro@gma.i*l.com";
// ============Remove all illegal characters from email=======
if(filter_var($email, FILTER_SANITIZE_EMAIL)){
    echo "this is valid email address";
}else{
    echo "Its not valid email";
}

echo "<hr>";


//================== Variable to check=================
$str = "<h1>Hello World!</h1>";
// Remove HTML tags from string
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
?>



