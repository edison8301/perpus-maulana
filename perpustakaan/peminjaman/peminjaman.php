<!DOCTYPE html>
<html>
<head>
	<title>PERPUSTAKAAN</title>
</head>
<body>
	<h3>Data Peminjaman</h3>
	<br>
	<tr>
		<td><a href="tambah_peminjaman.php"> Tambah Peminjaman</a></td>
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
		<th>Buku</th>
		<th>Angggota</th>
		<th>Tanggal Pinjam</th>
		<th>Tanggal Kembali</th>
		<th>Opsi</th>
	</tr>
	<?php 
		include '../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from peminjaman");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_buku']; ?></td>
				<td><?php echo $d['id_anggota']; ?></td>
				<td><?php echo $d['tanggal_pinjam']; ?></td>
				<td><?php echo $d['tanggal_kembali']; ?></td>
				<td>
					<a href="edit_peminjaman.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus_peminjaman.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
