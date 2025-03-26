<?php 
	$a = 8;
	$b = 16;
	$c = 73;

	if ($a>$b && $b>$c){
		echo "$a $b $c";
	}
	elseif($b>$a && $a>$c){
		echo "$b $a $c";
	}
	elseif ($c>$a && $a>$b) {
		echo "$c $a $b";
	}
	elseif ($a>$c && $c>$b) {
		echo "$a $c $b";
	}
	elseif ($b>$c && $c> $a) {
		echo "$b $c $a";
	}
	else{
		echo "$c $b $a";
	}

 ?>