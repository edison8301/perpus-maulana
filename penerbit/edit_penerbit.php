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
					<li><a href="../kategori/kategori.php">Kategori</a></li>
					<li><a href="../peminjaman/peminjaman.php">Peminjaman</a></li>
					<li><a href="../penerbit/penerbit.php">Penerbit</a></li>
					<li><a href="../penulis/penulis.php">Penulis</a></li>
					<li><a href="../petugas/petugas.php">Petugas</a></li>
					<li><a href="../user/user.php">User</a></li>
					<li><a href="../user_role/user_role.php">User Role</a></li>
				</ul>	
			</td>
			<td width="500">
				<form method="post" action="update_penerbit.php">
					<table border="0">

						<?php
	include '../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from penerbit where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update_penerbit.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="varcar" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td>Telepon</td>
					<td><input type="varcar" name="telepon" value="<?php echo $d['telepon']; ?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="varcar" name="email" value="<?php echo $d['email']; ?>"></td>
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