<?php
//buat koneksi dengan MySQL
$connect=mysqli_connect('localhost','root','','myDB');
 
//jika koneksi gagal, langsung keluar dari PHP
if (!$connect)
{
   die("Koneksi dengan MySQL gagal");
}

//membuat table
$data = "INSERT INTO visitor (firstname, lastname, email)
		VALUES ('dzikri', 'purnama', 'admin@dzikri.id')";


if(mysqli_query($connect,$data)) {
	echo "Data inserted successfully";
} else {
	echo "Data unsuccessfully inserted: " . mysqli_error($connect); 
}

mysqli_close($connect);
?>
