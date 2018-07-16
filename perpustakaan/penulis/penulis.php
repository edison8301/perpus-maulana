<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h3> Data Penulis </h3>
<br>
	<tr>
		<td><a href="tambah_penulis.php"> Tambah Penulis</a></td>
		<td>-----</td>
		<td>-----</td>
		<td><a href="../index.php">Kembali Ke Menu Utama</a></td>
	</tr>
</form>
	<br/>
	<br/>
	<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Telepon</th>
		<th>Email</th>
		<th>Opsi</th>
	</tr>
	<?php 
		include '../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from penulis");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['telepon']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td>
					<a href="edit_penulis.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus_penulis.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</table>
</body>
</html>