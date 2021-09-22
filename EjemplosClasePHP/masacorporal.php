<?php
	$peso = 75;
	$altura = 1.70;

	$imc = $peso/($altura*$altura);


	echo "Tu indice de masa corporal IMC es: $imc";
		echo "</br>";
	if($imc > 20){
		echo "Te hace falta perder algún kilito";
	}else{
		echo "Tu peso parece correcto para tu altura";
	}

