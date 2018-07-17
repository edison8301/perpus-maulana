<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<table width="700" border="1">
		<tr>
			<td colspan="2" align="center"><h1>Selamat Datang di Sistem Informasi Perpustakaan</h1></td>
		</tr>
		<tr>
			<td width="200">
				<ul>
					<li><a href="../anggota/anggota.php">Anggota</a></li>
					<li><a href="../buku/buku.php">Buku</a></li>
					<li><a href="../kategori/kategoti.php">Kategori</a></li>
					<li><a href="../peminjaman/peminjaman.php">Peminjaman</a></li>
					<li><a href="../penerbit/penerbit.php">Penerbit</a></li>
					<li><a href="../penulis/penulis.php">Penulis</a></li>
					<li><a href="../petugas/petugas.php">Petugas</a></li>
					<li><a href="../user/user.php">User</a></li>
					<li><a href="../user_role/user_role.php">User Role</a></li>
				</ul>	
			</td>
			<td width="500">
				<form method="post" action="update_buku.php">
					<table border="0">
						<?php
	include '../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from buku where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update_buku.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Tahun Terbit</td>
					<td><input type="year" name="tahun_terbit" value="<?php echo $d['tahun_terbit']; ?>"></td>
				</tr>
				<tr>
					<td>Penulis</td>
					<td><input type="text" name="id_penulis" value="<?php echo $d['id_penulis']; ?>"></td>
				</tr>
				<tr>
					<td>Penerbit</td>
					<td><input type="text" name="id_penerbit" value="<?php echo $d['id_penerbit']; ?>"></td>
				</tr>
				<tr>
					<td>Kategori</td>
					<td><input type="text" name="id_kategori" value="<?php echo $d['id_kategori']; ?>"></td>
				</tr>
				<tr>
					<td>Sinopsis</td>
					<td><input type="text" name="sinopsis" value="<?php echo $d['sinopsis']; ?>"></td>
				</tr>
				<tr>
					<td>Sampul</td>
					<td><input type="image" name="sampul" value="<?php echo $d['sampul']; ?>"></td>
				</tr>
				<tr>
					<td>Berkas</td>
					<td><input type="DOCTYPE" name="berkas" value="<?php echo $d['berkas']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>
				</table></form><?php }?>
			</table>
		</form>
	</td>
</tr>
</table>
</body>
</html>









