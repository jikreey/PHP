<?php
//delete sentence below after you run this page on server
setcookie("user","Dzikri",time()+10,'/');
?>
<html>
<head>
<title>Just do it</title>
</head>

<body>
<?php
	echo "Value of cookie is ".$_COOKIE["user"];
?>
</body>
</html>
