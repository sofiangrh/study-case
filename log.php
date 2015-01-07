<?php
	session_start(); 		
	include 'koneksi.php'; 		
	$username=$_POST['username']; 	
	$password=$_POST['password']; 	
 
	$query = mysql_query ("select username, password from user where username='$username' and password='$password'");	 
	$konek = mysql_num_rows($query);

	// Pengecekan username pada database	
	if ($konek == TRUE) { 		
		$_SESSION['username'] = $username;  
		header("location:hasil.php");     
	}
	else {   				
		echo "Login Gagal";
	}
 
?>
