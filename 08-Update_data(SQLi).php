<?php
//buat koneksi dengan MySQL
$connect=mysqli_connect('localhost','root','','myDB');
 
//jika koneksi gagal, langsung keluar dari PHP
if (!$connect)
{
   die("Koneksi dengan MySQL gagal");
}

//delete data
$data = "DELETE FROM visitor WHERE id=3";

if(mysqli_query($connect,$data)){
	echo "Deleted id=3 success";
} else {
	echo "Delete unsuccessful".$mysqli_error($connect);
}

mysqli_close($connect);
?>
