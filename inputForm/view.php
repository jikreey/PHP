<html>
<head>
    <title>Index visitor</title>
</head>
<body>
    <table border=1 width="30%">
        <tr>
            <th>ID</th>
            <th>Nama depan</th>
            <th>Nama belakang</th>
            <th>Email</th>
        </tr>
        <?php
		$connect = mysqli_connect('localhost','root','','myDB');
		if(!$connect){ die("Cannot connect"); }
		$data="select * from visitor";
        $result=mysqli_query($connect,$data);
            while ($row=mysqli_fetch_assoc($result)) {?>
        <tr>
            <td><?php echo $row["id"];?></td>
            <td><?php echo $row["firstname"];?></td>
            <td><?php echo $row["lastname"];?></td>
            <td><?php echo $row["email"];?></td>
        </tr>
			<?php }?>
    </table>
    <a href='index.php'>Input Lagi</a></br>
</body>
</html>
