<?php
	session_start();
	if (empty($_SESSION['username'])) {
  		header ("location:utama.php");
	}  

	// Untuk Koneksi Server
	$koneksi = mysql_connect("localhost", "root", "sl4cker") or die("Gagal konek ke server.");
		mysql_select_db("dbStudyCase") or die("Gagal membuka database.");
	$id_brg = $_GET['id_brg'];
	$query = "select * from barang where id_brg='$id_brg'";
		$hasil = mysql_query($query, $koneksi) or die("Gagal melakukan query.");
		$dataku = mysql_fetch_array($hasil);
	mysql_close($koneksi);
?>
<HTML>
<BODY>
Yakin ingin menghapus data ini?<br><br>
	<table border="0">
		<FORM METHOD="post" ACTION="proses_hapus.php">
			<tr>
				<td>ID:</td>
				<td><b><?php echo $dataku['id_brg']; ?></b></td>
			</tr>
			<tr>
				<td>Nama Barang:</td>
				<td><b><?php echo $dataku['nama_brg']; ?></b></td>
			</tr>
			<tr>
				<td></td>
				<td><INPUT TYPE="submit" VALUE="Hapus Data"></td>
			</tr>
		</FORM>
		
	</table>	
</BODY>
</HTML>
