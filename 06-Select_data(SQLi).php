<?php
//buat koneksi dengan MySQL
$connect=mysqli_connect('localhost','root','','myDB');
 
//jika koneksi gagal, langsung keluar dari PHP
if (!$connect)
{
   die("Koneksi dengan MySQL gagal");
}

//membuat table
$data = "SELECT id, firstname, lastname, email FROM visitor";
$result = mysqli_query($connect, $data);


if(mysqli_num_rows($result)>0) {
	while($row=mysqli_fetch_assoc($result)){ 
	echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . ["lastname"] . " - Email: " . $row["email"] . "<br>";}
} else {
	echo "0 results";
}

mysqli_close($connect);
?>
