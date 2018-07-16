<!DOCTYPE html>
<html>
<head>
	<title>PERPUSTAKAAN</title>
</head>
<body>

	<br/>
	<a href="buku.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>Edit Data Buku</h3>

	<?php
	include '../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from buku where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="varchar" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Tahun Terbit</td>
					<td><input type="year" name="tahun_terbit" value="<?php echo $d['tahun_terbit']; ?>"></td>
				</tr>
				<tr>
					<td>Penulis</td>
					<td><input type="int" name="id_penulis" value="<?php echo $d['id_penulis']; ?>"></td>
				</tr>
				<tr>
					<td>Penerbit</td>
					<td><input type="int" name="id_penerbit" value="<?php echo $d['id_penerbit']; ?>"></td>
				</tr>
				<tr>
					<td>Kategori</td>
					<td><input type="int" name="id_kategori" value="<?php echo $d['id_kategori']; ?>"></td>
				</tr>
				<tr>
					<td>Sinopsis</td>
					<td><input type="text" name="sinopsis" value="<?php echo $d['sinopsis']; ?>"></td>
				</tr>
				<tr>
					<td>Sampul</td>
					<td><input type="varchar" name="sampul" value="<?php echo $d['sampul']; ?>"></td>
				</tr>
				<tr>
					<td>Berkas</td>
					<td><input type="varchar" name="berkas" value="<?php echo $d['berkas']; ?>"></td>
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