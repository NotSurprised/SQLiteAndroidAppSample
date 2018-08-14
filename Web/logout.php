<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Week5_HW</title>
</head>
<?php
	session_start();
	unset($_POST['login']);
	session_destroy();
	echo "log out success!";
	header("location: index.php");
?>
<body>
</body>