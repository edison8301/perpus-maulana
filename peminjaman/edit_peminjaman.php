<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<table width="700" border="1">
		<tr>
			<td colspan="2" align="center"><h1>Selamat Datang di Sistem Informasi Perpustakaan</h1>
			</td>
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
				<form method="post" action="update_peminjaman">
					<table border="0">
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
		</form><?php }?>
	</table>
</form>
</td>
</tr>
</table>
</body>
</html>



	