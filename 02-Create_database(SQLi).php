<?php
//buat koneksi dengan MySQL
$connect=mysqli_connect('localhost','root','');
 
//jika koneksi gagal, langsung keluar dari PHP
if (!$connect)
{
   die("Koneksi dengan MySQL gagal");
}

//membuat database
$database = "CREATE DATABASE myDB";
if(mysqli_query($connect,$database)) {
	echo "Database created successfully";
} else {
	echo "Database unsuccessfully created" . mysqli_error($connect); 
}
?>
