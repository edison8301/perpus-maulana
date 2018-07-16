<!DOCTYPE html>
<html>
<head>
	<title>PERPUSTAKAAN</title>
</head>
<body>
	<h3>Tambah Data Peminjaman</h3>
	<br>
	<a href="Peminjaman.php">Kembali</a>
	<br>
	<br>
	
	<form method="post" action="aksi_peminjaman.php">
		<table>
			<tr>			
				<td>Buku</td>
				<td><input type="int" name="id_buku"></td>
			</tr>
			<tr>
				<td>Anggota</td>
				<td><input type="int" name="id_anggota"></td>
			</tr>
			<tr>
				<td>Tanggal pinjam</td>
				<td><input type="date" name="tanggal_pinjam"></td>
			</tr>
			<tr>
				<td>Tanggal Kembali</td>
				<td><input type="date" name="tangggal_kembali"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>