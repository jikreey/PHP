<?php
session_start();
$_SESSION["user"] = "dzikri";
?>
<html>
<head>
<title>Just do it</title>
</head>

<body>
<?php
echo "Your name is ".$_SESSION["user"];
session_unset(); //this will stop the session
echo "Your name is ".$_SESSION["user"];
}
?>
</body>
</html>
