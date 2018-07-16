<!DOCTYPE html>
<html>
<head>
	<title>PERPUSTAKAAN</title>
</head>
<body>

	<br/>
	<a href="peminjaman.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>Edit Data Peminjaman</h3>
 
	<?php
	include '../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from peminjaman where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update_peminjaman.php">
			<table>
				<tr>			
					<td>Buku</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="int" name="id_buku" value="<?php echo $d['id_buku']; ?>">
					</td>
				</tr>
				<tr>
					<td>Anggota</td>
					<td><input type="int" name="id_anggota" value="<?php echo $d['id_anggota']; ?>"></td>
				</tr>
				<tr>
					<td>Tanggal Pinjam</td>
					<td><input type="date" name="tanggal_pinjam" value="<?php echo $d['telepon']; ?>"></td>
				</tr>
				<tr>
					<td>Tanggal Kembali</td>
					<td><input type="date" name="tanggal_kembali" value="<?php echo $d['tanggal_kembali']; ?>"></td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>