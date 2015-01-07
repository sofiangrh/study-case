<?php
  	session_start();
	if (empty($_SESSION['username'])) {
  		header ("location:utama.php");
	}
?>
<html>
	<head>
		<title>Selamat</title>
	</head>
<body>
	<center>
	<a href="beranda.php">Beranda</a> |
	<a href="barang.php">Barang</a> |
	<a href="logout.php">Logout</a>
</body>
</html>
