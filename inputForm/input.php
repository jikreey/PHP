<?php
	$connect = mysqli_connect('localhost','root','','myDB');
	if(!$connect){ die("Cannot connect"); }

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	
	$input = "INSERT INTO visitor (firstname,lastname,email)
			VALUES ('$firstname','$lastname','$email')";
			
	if(mysqli_query($connect,$input)){ 
	echo "Data inserted!</br>";
	echo "<a href='view.php'>Lihat hasil</a>";
	} else { 
	echo "Data not inserted!".mysqli_error($connect);}
?>
