<?php
	session_start();
	if (empty($_SESSION['username'])) {
  		header ("location:utama.php");
	}
?>
<HTML>
<BODY>
<H4> Tambah Data</H4>
	<table border="0">
		<FORM METHOD="post" ACTION="proses_input.php">
			<tr>
				<td>ID:</td>
				<td><INPUT TYPE="text" NAME="id"></td>
			</tr>
			<tr>
				<td>Nama Barang:</td>
				<td><INPUT TYPE="text" NAME="nm_brg"></td>
			</tr>
			<tr>
				<td>Satuan:</td>
				<td><INPUT TYPE="text" NAME="satuan"></td>
			</tr>
			<tr>
				<td>Stok:</td>
				<td><INPUT TYPE="text" NAME="stok"></td>
			</tr>
			<tr>
				<td>Harga:</td>
				<td><INPUT TYPE="text" NAME="harga"></td>
			</tr>
			<tr>
				<td></td>
				<td><INPUT TYPE="submit" VALUE="Tambah Data"></td>
			</tr>
		</FORM>
		
	</table>	
</BODY>
</HTML>

