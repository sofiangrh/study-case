<?php
  	session_start();
	if (empty($_SESSION['username'])) {
  		header ("location:utama.php");
	}

	echo "<center>";
	echo "<b>Selamat Datang, ".$_SESSION['username'];
	echo " Kelompok 10";
	echo "<br>";
?>
