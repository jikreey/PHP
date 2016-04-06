<?php
	$connect = mysqli_connect('localhost','root','','myDB');
	if(!$connect){ die("Cannot connect"); }
	
$id=$_POST["id"];
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
 
//Disini query untuk mengupdate
$query= "update visitor set firstname='$firstname', lastname='$lastname', email='$email' where id='$id'";
$exe=mysqli_query($connect,$query);
 
//menampilkan laporan hasil update
//jika berhasil maka akan menamplikan update berhasil bos
//jika gagal maka akan menampilkan update gagal bos
if ($exe){
    echo "<script>alert('Update Berhasil Boss')
    location.replace('view.php')</script>";
}else{
    echo "<script>alert('Update Gagal Bos')
    location.replace('view.php')</script>";
}
?>
