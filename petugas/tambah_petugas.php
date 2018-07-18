<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<table width="700" border="1">
		<tr>
			<td colspan="2" align="center"><h1>Selamat Datang di Sisem Informasi Perpustakaan</h1>
			</td>
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
				<form method="post" action="aksi_petugas.php">
					<table border="0">
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><input type="varchar" name="nama" placeholder="nama"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td><input type="varchar" name="alamat" placeholder="alamat"></td>
					</tr>	
					<tr>
						<td>Telepon</td>
						<td>:</td>
						<td><input type="varchar" name="telepon" placeholder="telepon"></td>
					</tr>	
					<tr>
						<td>Email</td>
						<td>:</td>
						<td><input type="varchar" name="email" placeholder="email"></td>
					</tr>	
					<tr>
						<td></td>
						<td></td>
						<td><input type="submit" name="simpan" value="simpan"></td>
					</tr>
				</table>
			</form>
		</td>
		</tr>
	</table>
</body>
</html>