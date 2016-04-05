<?php
//buat koneksi dengan MySQL
$connect=mysqli_connect('localhost','root','');
 
//jika koneksi gagal, langsung keluar dari PHP
if (!$connect)
{
   die("Koneksi dengan MySQL gagal");
}
?>
