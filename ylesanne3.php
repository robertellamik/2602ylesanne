<?php

for ($j = 1; $j <= 100; $j++) {
	if(($j % 3 || $j % 5) == 0) {
		echo "MalleKalle<br>";

	}

	elseif (($j % 3) == 0) {
		echo "Malle <br>";
	}
	elseif (($j % 5) == 0){
		echo "Kalle<br>";
	}


	else
		echo "$j <br>";
}