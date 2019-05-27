<?php 
/*
    =======================::4 type of error::==========================
 	1. warning = warning ta mainly show kore include er karone.
	2. notice = variable echo korsi but jdi variable ta na thake sekhetre notice show kore.
	3. fatal error = suppose jdi function k call kori but jdi kon function e na create kori.(function na paile)
		abr require file missing thakle oo fatal error show kore.
	4. syntax error(parse error) = 1)uncolsed qoutes. 2)Missing and Extra parenthesis. 3)Unclosed braces. 4)Missing semicolon.
*/
?>
<pre>
Basically there are four types of errors in PHP, which are as follows:
html:

1. Parse Error (Syntax Error): 
      1) uncolsed qoutes: quotation("") sesh kora na hoile. 
      2) Missing and Extra parenthesis: first bracket ()) erokom kom beshi thakle
      3) Unclosed braces: kono bracket (){}[] close na hoyle/ extra hoye gele
      4) Missing semicolon: missing semicolon (;) 
      Exmple:  echo "hello world"
               echo ("ki khobor"; ?>


2. Fatal Error:
        -> suppose jdi function k call kori but jdi kon function e na create kori (function na paile).
		-> require file missing thakle oo fatal error show kore.
        Exmple: 
            <?php
                function fun1(){
                    echo "Pobitro Raj";
                }
                fun2();
                echo "Fatal Error !!";
            ?>

3. Warning Error: 
        -> warning ta mainly show kore include er karone.
        Exmple: 
             <?php 
                echo "Warning Error!!";
                include ("Welcome.php");// include file missing thakle
             ?>

4. Notice Error:
        -> variable echo korsi but jdi variable ta na thake sekhetre notice show kore.
        Example:

                <?php $a="Anuj kumar ";
                    echo "Notice Error !!";
                    echo $b;
                ?>

<!--
==> php.ini ফাইল : ব্রাউজারে যদি এরর দেখতে চান তাহলে php.ini ফাইলে display_errors on রাখতে হবে। এছাড়া এই ফাইলে ঠিক করে দেয়া যায় কোন্ ধরনের এরর দেখাবে আর কোন ধরনের দেখাবেনা। পিএইচপিতে ১৬ ধরনের এরর আছে, প্রত্যেকটি এরর/ভুলের জন্য একটা নাম্বার আছে তবে এই নাম্বার নিয়ে কাজ করা উচিৎ হবেনা কারন পিএইচপি ভার্সন পরিবর্তনের সাথে এই নাম্বারগুলির মধ্যে অনেক সময় কিছু পরিবর্তন হতে পারে তাই এগুলির নাম (constant name) নিয়ে কাজ করা উচিৎ।

E_ERROR : মারাত্নক (fatal error) রানটাইম (run time) ভুল/এরর। এই ধরনের এরর হলে কোড এক্সিকিউশন বন্ধ হয়ে যাবে। যেখানে এমন এরর হবে সেখানেই কাজ বন্ধ। রান টাইম এরর অর্থ প্রোগ্রাম/এপ্লিকেশন চলার সময় যে এররগুলি হয়, প্রোগ্রাম চলার শুরুতে, মাঝে বা যেকোন সময় এরর হোক না কেন এটা রানটাইম এরর। যেমন এমন একটি ফাইল খুলতে কোড লিখেছেন যেটার অস্তিত্ব নেই এরুপ যেকোন লজিকাল এরর।

E_WARNING : রানটাইম সতর্কতামুলক এরর তবে মারাত্নক নয়। কোড এক্সিকিউশন বন্ধ হয়না।

E_PARSE : কমপাইল-টাইম এরর। যেমন দ্বিতীয় বন্ধনী (curly braces) শুরু করেছেন কিন্তু শেষ করেননি এরুপ সিনট্যাক্স এরর।

E_NOTICE : রানটাইম এরর। কোড এক্সিকিউশন বন্ধ হবেনা।

E_CORE_ERROR : কোর পিএইচপি থেকে এই এরর তৈরী হয়। এটা মারাত্নক এরর E_ERROR এর মত। fatl error.

E_CORE_WARNING : E_WARNING এর মতই শুধু এটা কোর পিএইচপি থেকে তৈরী হয়।

E_COMPILE_ERROR : মারাত্নক এরর (fatal error)। জেন্ড স্ক্রিপ্টিং ইন্জিন থেকে এই এরর তৈরী হয়। E_ERROR এর মত।

E_COMPILE_WARNING : E_WARNING এর মতই তবে জেন্ড স্ক্রিপ্টিং ইন্জিন থেকে তৈরী হয়।

E_USER_ERROR : E_ERROR এর মত তবে ইউজার কতৃক এই এরর তৈরী হয়। trigger_error() ফাংশন ব্যবহার করে এই এরর তৈরী করা যায়। ইউজার অর্থ এখানে প্রোগ্রামার।

E_USER_WARNING : E_WARNING এর মত শুধু পার্থক্য হল প্রোগ্রামার কর্তৃক তৈরী করা হয়।

E_USER_NOTICE : E_NOTICE এর মত ইউজার কর্তৃক তৈরী।

E_STRICT : রানটাইম এরর। fatal error নয়। এই এররের দ্বারা মুলত একটা সাজেশন পাওয়া যায় ফলে কোড আরেকটু উন্নত হয়। (PHP 5 ভার্সনে এসেছে)

E_RECOVERABLE_ERROR : প্রায় E_ERROR এর কাছাকাছি।

E_DEPRECATED : এটা একটা রানটাইম নোটিশ। পিএইচপির ভবিষ্যতের ভার্সনে কাজ করবেনা এমন কোড লিখলে এরুপ মেসেজ দিবে।

E_USER_DEPRECATED : E_DEPRECATED এর মত তবে ইউজার তথা প্রোগ্রামার কর্তৃক তৈরী trigger_error() দিয়ে।

E_ALL: E_STRICT বাদে সব এরর এবং সতর্কতা (warning)।

 

php.ini ফাইলে (যদি XAMPP এবং উইন্ডোজ ব্যবহার করনে তাহলে এই ফাইল C:\xampp\php এখানে পাবেন ) error_reporting খুজে বের করে দেখুন সেখান এই কনস্টান্টগুলি ব্যবহার করেছে। এখান থেকেই কোন ধরনের এরর দেখতে চান সেটা ঠিক করা যায়। বাই ডিফল্ট E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED এই মান থাকে।

‍~ এই চিহ্নের অর্থ হল মাইনাসের মত অর্থ্যাৎ ডিফল্ট মানটির দ্বারা সব ধরনের এরর দেখাবে শুধু E_NOTICE, E_STRICT এবং E_DEPRECATED এর এররগুলি ছাড়া।

যদি সব ধরনের এরর দেখতে চান তাহলে error_reporting এর মান E_ALL (error_reporting = E_ALL এভাবে) দিয়ে রাখবেন।

ট্রিকস: ডেভেলপমেন্ট সার্ভারে E_ALL দিয়ে রাখতে পারেন ফলে সব এরর দেখাবে সুতরাং কোড অনেক উন্নত হবে। আর প্রোডাকশন সার্ভারে E_ALL & ~E_NOTICE & ~E_STRICT এটা দিতে পারেন।

 

==> die() ফাংশন : এটা আসলে কোন ফাংশন না বরং এগুলিকে বলা হয় ল্যাংগুয়েজ কনস্ট্রাক্ট। die() হবহু exit() ফাংশনের মত। এই ফাংশনের কাজ হচ্ছে একটা মেসেজ দিয়ে কোড এক্সিকিউশন বন্ধ করে দিবে। যেমন
<?php

$filename = '/path/to/file';
$file = fopen($filename, 'r')  or die("unable to open file ($filename)");

?>
যে path দিবেন সেখানে যদি ফাইলটি না পায় তাহলে মেসেজটি যেটা die() এর ভিতরে দেয়া আছে সেটা দেখিয়ে কোড এই পর্যন্তই্ থেমে যাবে। এই die() এর পর যদি হাজারো কোড থাকে তবে সেই কোড এক্সিকিউট হবেনা (যখন এরর হবে)। ডেভেলপমেন্ট সার্ভারে লোকালি ব্যবহার করুন, কখনই প্রোডাকশন সার্ভারে এটা দিয়ে রাখবেন না। যদি  স্ক্রিপ্টে die() থাকে আর হুট করে কোন এরর হয় পুরো সাইট বন্ধ হয়ে থাকবে, ইউজার টাসকি খেয়ে বসে থাকবে কারন সাইট আর চলবেনা।

 

==> @ বা এরর সাপরেশন অপারেটর (error supression operator) ব্যবহার করা : এটা বেশ উপকারী একটা অপারেটর। কোন এক্সপ্রেশন/ফাংশনের সামনে দিলে সেখানে যদি কোন এরর হয় তবুও এররটি দেখাবেনা। যেমন

<?php
// any code

@file ('anon/existence/file.txt');

// more code bla bla ..
?>

একটা এমন ফাইল খোলার চেষ্টা করুন (fopen দিয়ে) যেটার অস্তিত্ব নেই এবং fopen এর সামনে উপরের মত @ দিন এবং রান করিয়ে দেখুন কোন এরর দেখাবেনা। @ উঠিয়ে কোড রান করান তখন এরর দেখাবে। প্রোডাকশন সার্ভারে এটা প্রয়োজেন ব্যবহার করুন।