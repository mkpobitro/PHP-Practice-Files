<?php 
/*
$_SERVER
Header, Path এবং Script location সম্মন্ধে বিভিন্ন তথ্য পাওয়ার জন্য এটি ব্যবহৃত হয়।
*/

echo "<pre>";
print_r($_SERVER);

//evabe 
print_r($_SERVER['PHP_SELF']).'<br>'; 
echo ($_SERVER['SERVER_NAME']);

echo $_SERVER['SERVER_SOFTWARE'];
echo $_SERVER['HTTP_HOST'];


$_SERVER['PHP_SELF'];
//সম্প্রতি যে স্ক্রিপ্ট সম্পাদিত(execution) হয় তার ফাইলের নাম রিটার্ন করে।

$_SERVER['GATEWAY_INTERFACE'];
//সার্ভার যে কমন গেটওয়ে ইন্টারফেস(CGI) ব্যবহার করে তার ভার্সন রিটার্ন করে।

$_SERVER['SERVER_ADDR'];
//হোস্ট সার্ভারের IP এড্রেস রিটার্ন করে।

$_SERVER['SERVER_NAME'];
//হোস্ট সার্ভারের নাম রিটার্ন করে। যেমন- www.sattacademy.com

$_SERVER['SERVER_SOFTWARE'];
//সার্ভারের জন্য ব্যবহৃত সফটওয়্যার এবং এর ভার্সন রিটার্ন করে। (যেমন- Apache/2.4.25 )

$_SERVER['SERVER_PROTOCOL'];
//ইনফরমেশন প্রোটোকলের নাম এবং রিভিশন(revision) রিটার্ন করে। (যেমন HTTP/1.1)

$_SERVER['REQUEST_METHOD'];
//কোনো পেজকে এক্সেস করার জন্য এর রিকুয়েস্ট মেথড(যেমন- POST) রিটার্ন করে।

$_SERVER['REQUEST_TIME'];
//রিকুয়েস্ট শুরু হওয়ার টাইমস্ট্যাম্প রিটার্ন করে। (যেমন- 1377687496)

$_SERVER['QUERY_STRING'];
//যদি কোনো পেজ কুয়েরি স্ট্রিং দ্বারা এক্সেস করা হয় তাহলে কুয়েরি স্ট্রিং রিটার্ন করে।

$_SERVER['HTTP_ACCEPT'];
//বর্তমান রিকুয়েস্ট থেকে Accept header রিটার্ন করে।

$_SERVER['HTTP_ACCEPT_CHARSET'];
//বর্তমান রিকুয়েস্ট থেকে Accept_Charset header রিটার্ন করে। (যেমন utf-8,ISO-8859-1)

$_SERVER['HTTP_HOST'];
//বর্তমান রিকুয়েস্ট থেকে Host header রিটার্ন করে।

$_SERVER['HTTP_REFERER'];
//বর্তমান পেজের সম্পূর্ণ URL রিটার্ন করে (বিশ্বাসযোগ্য নয় কারন সকল user-agents এ সাপোর্ট করে না)

$_SERVER['HTTPS'];
//স্ক্রিপ্টটি কি সিকিউর HTTP প্রোটোকলের মধ্য দিয়ে কুয়েরি হচ্ছে কিনা?

$_SERVER['REMOTE_ADDR'];
//ব্যবহারকারী যেখান থেকে বর্তমান পেজটি ভিউ করছে সেই IP এড্রেস রিটার্ন করে।

$_SERVER['REMOTE_HOST'];
//ব্যবহারকারী যেখান থেকে বর্তমান পেজটি ভিউ করছে সেই Host নাম রিটার্ন করে।

$_SERVER['REMOTE_PORT'];
//ব্যবহারকারীর ডিভাইস থেকে সার্ভারের সাথে যোগাযোগ(communicate) করার জন্য যে পোর্ট(port) ব্যবহার হচ্ছে সেটিকে রিটার্ন করে।

$_SERVER['SCRIPT_FILENAME'];
//বর্তমানে যে স্ক্রিপ্টটি এক্সিকিউট হচ্ছে সেটির absolute pathname রিটার্ন করে।

$_SERVER['SERVER_PORT'];
//যোগাযোগের জন্য ওয়েব সার্ভারের সার্ভার মেশিন যে পোর্ট ব্যবহার করে সেটি রিটার্ন করে। (যেমন 80)

$_SERVER['SERVER_SIGNATURE'];
//server-generated পেজের সাথে যুক্ত সার্ভার ভার্সন এবং ভার্চুয়াল হোস্ট এর নাম রিটার্ন করে।

$_SERVER['PATH_TRANSLATED'];
//বর্তমান স্ক্রিপ্টের ফাইল সিস্টেম বেস(base) path রিটার্ন করে।

$_SERVER['SCRIPT_NAME'];
//কারেন্ট স্ক্রিপ্টের পথ রিটার্ন করে।

$_SERVER['SCRIPT_URI'];