<?php
	session_start();
	if (empty($_SESSION['username'])) {
  		echo ("Akses Ilegal");
		session_destroy();
	} 
	else {				
	$db = new mysqli("localhost","root","sl4cker","dbStudyCase");
		echo $db->connect_errno?'Koneksi gagal :'.$db->connect_error:'';
	}	
?>
<html>
	<head>
 		<title>Data Barang</title>
	</head>
  <body>
	<center>
	<h2>Data Barang</h2>
	<a href="input.php">Tambah Data</a>
	<table border="1">
 	<tr>
  		<td><b>No</b></td>
  		<td><b>ID</b></td>
  		<td><b>Nama Barang</b></td>
 		<td><b>Satuan</b></td>
  		<td><b>Stok</b></td>
  		<td><b>Harga</b></td>
  		<td colspan="2" align="center"><b>Aksi</b></td>
 	</tr>
<?php
	// Tampil Data Barang
	$sql = "select * from barang";
	$result = $db->query($sql); 
	$no = 1 ;
	while ($dataku = $result->fetch_object()){
?>
 	<tr>
  		<td><?php echo $no++; ?></td>
  		<td><?php echo $dataku->id_brg; ?></td>
  		<td><?php echo $dataku->nama_brg; ?></td>
		<td><?php echo $dataku->satuan; ?></td>
  		<td><?php echo $dataku->stok_brg; ?></td>
 		<td><?php echo $dataku->harga_brg; ?></td>
  		<td align="center"><a href="edit_data.php?id_brg=<?php echo $dataku->id_brg?>">Edit</td>
		<td align="center"><a href="hapus_data.php?id_brg=<?php echo  $dataku->id_brg?>">Hapus</td>
	</tr>
<?php }?>	
	</table>
  </body>
</html>
