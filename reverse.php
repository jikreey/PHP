<?php

function reverse($input){
	$input;
	$length = strlen($input);
	for($i=$length-1;$i >=0;$i--){
		echo $input[$i];
	}
}	
	echo "input: 12345 <br>";
	echo "output: ";
	reverse("12345");

	echo "<br><br>input: asdfgh <br>";
	echo "output: ";
	reverse("asdfgh");

	echo "<br><br>input: 1q2w3e <br>";
	echo "output: ";
	reverse("1q2w3e");	
?>
