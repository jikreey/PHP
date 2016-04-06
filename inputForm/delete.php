<?php
$connect = mysqli_connect('localhost','root','','myDB');
if(!$connect){ die("Gagal login");}

//menangkap variabel idbuku yang di kirim oleh view.php untuk di hapus
$id=$_GET["id"];
 
//query untuk menghapus data
$query="delete from visitor where id='$id'";
$exe=mysqli_query($connect,$query);
 
//laporan untuk data yang dihapus
//berhasil atau tidak data dihapus
if ($exe){
    echo "<script>alert('Data Berhasil Dihapus Boss')
    location.replace('view.php')</script>";
}else{
    echo "<script>alert('Data Gagal Dihapus Bos')
    location.replace('view.php')</script>";
}
?>
