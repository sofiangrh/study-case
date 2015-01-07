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
<H4> Edit Data</H4>
	<table border="0">
		<FORM METHOD="post" ACTION="proses_edit.php">
			<tr>
				<td>ID:</td>
				<td><INPUT TYPE="text" NAME="id_brg" value="<?php echo $dataku['id_brg']; ?>" readonly></td>
			</tr>
			<tr>
				<td>Nama Barang:</td>
				<td><INPUT TYPE="text" NAME="nama_brg" value="<?php echo $dataku['nama_brg']; ?>"></td>
			</tr>
			<tr>
				<td>Satuan:</td>
				<td><INPUT TYPE="text" NAME="satuan" value="<?php echo $dataku['satuan']; ?>"></td>
			</tr>
			<tr>
				<td>Stok:</td>
				<td><INPUT TYPE="text" NAME="stok" value="<?php echo $dataku['stok_brg']; ?>"></td>
			</tr>
			<tr>
				<td>Harga:</td>
				<td><INPUT TYPE="text" NAME="harga" value="<?php echo $dataku['harga_brg']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><INPUT TYPE="submit" VALUE="Ubah Data"></td>
			</tr>
		</FORM>
		
	</table>	
</BODY>
</HTML>
