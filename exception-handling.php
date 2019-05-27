<?php 
/*
============================::Exception handling::======================
	* etar madhome amra jkono kisu k error banate pari.
	* r echo r poriborte throw new exception(" string ")
    exmple:  throw new Exception("rahim 20 er caite beshi paise")
 */   

 $pobitro = 20;

 if($pobitro < 30){
     throw new Exception ("dipon 30 er caite kom paise");
 }