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
		VALUES ('syafiq', 'hibatullah', 'syafiq.hibatullah@gmail.com')";


if(mysqli_query($connect,$data)) {
	$last_id = mysqli_insert_id($connect);
	echo "Data inserted successfully. Last ID inserted: " . $last_id;
} else {
	echo "Data unsuccessfully inserted: " . mysqli_error($connect); 
}

mysqli_close($connect);
?>
