<?php
$a = 8;
$b = 0;
$operator = '/';
switch ($operator) {
	case '+' : $rez = $a + $b; break;
	case '-' : $rez = $a - $b; break;
	case '*' : $rez = $a * $b; break;
	case '/' : if ($b != 0) {
				$rez = $a / $b; break;
	}
	else { $rez = "Delenie na 0";
	}
	break;
	
 }
 echo "$a $operator $b = $rez";
?>