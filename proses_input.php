<?php
	session_start(); 		
	include 'koneksi.php'; 		
	$id=$_POST['id']; 	
	$nm_brg=$_POST['nm_brg']; 
	$satuan=$_POST['satuan'];
	$stok=$_POST['stok'];
	$harga=$_POST['harga'];	
 
	// MySQL Query Mengisi Data ke Field
	mysql_query ("insert into barang (id_brg, nama_brg, satuan, stok_brg, harga_brg)"." values('$id','$nm_brg','$satuan','$stok','$harga')") or die (mysql_error());
	echo "Berhasil";
		header ('location: barang.php');
?>
