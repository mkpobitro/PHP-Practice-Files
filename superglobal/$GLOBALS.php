<?php
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

