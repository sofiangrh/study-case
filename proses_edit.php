<?php
	$koneksi = mysql_connect ("localhost", "root", "sl4cker") or die("Gagal konek ke server.");
	mysql_select_db ("dbStudyCase") or die ("Gagal membuka database.");
	$id_brg = $_POST['id_brg'];
	$nama_brg = $_POST['nama_brg'];
	$satuan = $_POST['satuan'];
	$stok = $_POST['stok'];
	$harga = $_POST['harga'];

	// MySQL Query Edit Isi Field
	$query = mysql_query ("update barang set id_brg='$id_brg', nama_brg='$nama_brg', satuan='$satuan', stok_brg='$stok', harga_brg='$harga' where id_brg='$id_brg'");
	echo "<center><h2><strong>Data Telah di Update</strong></h2><br><hr><a href=\"barang.php\">OK</a></center>";
	mysql_close($koneksi);
?>
