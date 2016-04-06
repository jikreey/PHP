<html>
<head>
    <title>Index visitor</title>
</head>
<body>
    <table border=1 width="40%">
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
			<td><a href="view.php?edit=1&id=<?php echo $row["id"];?>&firstname=<?php echo $row["firstname"]; ?>&lastname=<?php echo $row["lastname"]; ?>&email=<?php echo $row["email"]; ?>">Edit</a>
				| <a href="delete.php?id=<?php echo $row["id"]; ?>" >Delete</a></td>
        </tr>
		<?php }?>
		<!-- form edit data-->
        <?php if ($_GET["edit"]==1)   { ?>
        <form method=POST action="edit.php">
        <table border=1 width="30%">
            <tr>
                <th colspan=4>Edit Form</th>
            </tr>
            <tr>
				<?php
                //menangkap variabel untuk proses update data
                $id=$_GET["id"];
                $firstname=$_GET["firstname"];
                $lastname=$_GET["lastname"];
                $email=$_GET["email"];
                ?>	
				
                <td><input type="text" name="firstname" value="<?php echo $firstname; ?>" /></td>
                <td><input type="text" name="lastname" value="<?php echo $lastname; ?>" /></td>
                <td><input type="text" name="email" value="<?php echo $email; ?>" /></td>
                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
				<td><input type="Submit" value="Update"></td>
            </tr>
        </table>
        </form>
			<?php }?>
    </table>
    <a href='index.php'>Input Lagi</a></br>
</body>
</html>
