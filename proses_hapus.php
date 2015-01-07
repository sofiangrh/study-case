<?php
	$koneksi = mysql_connect("localhost", "root", "sl4cker") or die ("Gagal konek ke server.");
	mysql_select_db("dbStudyCase") or die ("Gagal membuka database.");

	// MySQL Query Hapus Isi Field
	mysql_query ("delete from barang where id_brg = '$_GET[id_brg]'") or die ("Gagal menghapus data.");
	mysql_close ($koneksi);
?>
<p>Data telah dihapus. Silakan dicek di <a href="barang.php">kembali</a></p>

