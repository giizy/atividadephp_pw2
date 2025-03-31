<?php 
$n = 36;

	if ($n%2==0 && $n%5==0 && $n%10==0) {
		echo "Número divisível por 2, 5 e 10";
	}
	elseif ($n%5==0 && $n%10==0) {
		echo "Número divisível por 5 e 10";}
	elseif ($n%10==0) {
		echo "Número divisível por 10";}
	elseif ($n%2==0) {
		echo "Número divisível por 2";}
	else{
		echo "Não é divisível por nenhuma das opções.";
	}


 ?>