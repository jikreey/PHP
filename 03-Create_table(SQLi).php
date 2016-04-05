<?php
//buat koneksi dengan MySQL
$connect=mysqli_connect('localhost','root','','myDB');
 
//jika koneksi gagal, langsung keluar dari PHP
if (!$connect)
{
   die("Koneksi dengan MySQL gagal");
}

//membuat table
$table = "CREATE TABLE visitor(
		id INT(6) UNSIGNED AUTO_INCERMENT PRIMARY KEY,
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		email VARCHAR(30)
		)";


if(mysqli_query($connect,$table)) {
	echo "Table created successfully";
} else {
	echo "Table unsuccessfully created" . mysqli_error($connect); 
}
?>
