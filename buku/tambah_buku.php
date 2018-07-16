
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<table width="700" border="1">
		<tr>
			<td colspan="2" align="center"><h1>Selamat Datang Di Sistem Perpustakaan</h1></td>
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
				<form method="post" action="aksi_buku.php">
					<table border="0">
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td><input type="tex" name="nama" placeholder="nama"></td>
						</tr>
						<tr>
							<td>Tahun Terbit</td>
							<td></td>
							<td><input type="year" name="tahun_terbit" placeholder="tahun terbit"></td>
						</tr>
						<tr>
							<td>Penulis</td>
							<td></td>
							<td><int type="int" name="id_penulis" placeholder="penulis"></td>
							</tr>
							<tr>
								<td>Penerbit</td>
								<td></td>
								<td><int type="int" name="id_penerbit" placeholder="penerbit"></td>
								</tr>
								<tr>
									<td>Kategori</td>
									<td></td>
									<td><input type="int" name="id_kategori" placeholder="kategori"></td>
								</tr>
								<tr>
									<td>Sinopsis</td>
									<td></td>
									<td><input type="text" name="sinopsis" placeholder="sinopsis"></td>
								</tr>
								<tr>
									<td>Sampul</td>
									<td></td>
									<td><input type="varchar" name="sampul" placeholder="sampul"></td>
								</tr>
								<tr>
									<td>Berkas</td>
									<td></td>
									<td><input type="varchar" name="berkas" placeholder="berkas"></td>
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