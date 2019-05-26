<?php
/*
=> ekta jinish browser a specific somoy porjonto dhore rahar jonni amra cookie use krbo.
=> setcookie() function madhome $_COOKIE banano hoi

=> পিএইচপির সাহয্যে কুকি তৈরি
setcookie() ফাংশনের মাধ্যমে কুকি তৈরি করা হয়।

সিনট্যাক্স:
setcookie(name, value, expire, path, domain, secure, httponly);Copy
শুধুমাত্র name প্যারামিটারটি আবশ্যক। অন্যান্য সকল প্যারামিটারগুলো হলো ঐচ্ছিক।

=> Cookoe কখনো কখনো আচরন করে সেশনের মত । প্রথম অবস্থায় ব্রাউজার ক্লোজ করলে কুকি চলে যাবে। কিন্তু time সেট করে দিলে ব্রাউজার ক্লোজ করলেও এটি নিরদিষ্ট সময় পর্যন্ত থাকবে 

=> কোন ডাটা ব্রাউজারে স্পেসিফিক সময় পর্যন্ত ধরে রাখার জন্য আমরা কুকি ইউস করবো ।

উদাহরনঃ ফেসবুকে আমরা একটা অপশন পাই, keep me logged in-> আমরা যদি এটা চেক করে রাখি তাহলে আমরা ফেসবুক কেটে দিয়ে আবার ওপেন করলেও দেখতে পাই যে আমরা লগিন অবস্থায় আছি । কিন্তু শুধুমাত্র সেশন ইউস করলে ব্রাউজার কেটে দিলে দেখবো লগ আউট হয়ে গেছে।
*/

setcookie('email', 'pobitroraj.07@gmail.com');

print_r($_COOKIE);
