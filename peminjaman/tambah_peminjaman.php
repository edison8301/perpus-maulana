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
			<td>
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
				<form method="post" action="aksi_peminjaman.php">
					<table border="0">
						<tr>
							<td>Buku</td>
						<td>:</td>
						<td><input type="text" name="id_buku" placeholder="id_buku"></td>
					</tr>
					<tr>
						<td>Anggota</td>
						<td>:</td>
						<td><input type="text" name="id_anggota" placeholder="id_anggota"></td>
					</tr>	
					<tr>
						<td>Tanggal_Pinjam</td>
						<td>:</td>
						<td><input type="text" name="tanggal_pinjam" placeholder="tanggal_pinjam"></td>
					</tr>	
					<tr>
						<td>Tanggal_Kembali</td>
						<td>:</td>
						<td><input type="text" name="tanggal_Kembali" placeholder="tanggal_kembali"></td>
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