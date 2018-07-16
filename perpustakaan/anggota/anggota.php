<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<table width="1000" border="1">
		<tr>
		<td colspan="2" align="center"><h1>Sistem Informasi Perpustakaan</h1>
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
			<ul><a href="tambah_anggota.php"> +Tambah Anggota</a>
			</ul>
			<table border="1">
				<thead>
					<tr> 
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Telepon</th>
			<th>Email</th>
			<th>Status_Aktif</th>
			<th>Opsi</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		include '../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from anggota");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr class="odd gradex">
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['telepon']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['status_aktif']; ?></td>
				<td>
					<a href="edit_anggota.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus_anggota.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php $no++; }?>
	</tbody>
	</table>
		</td>
	</td>
</tr>
<tr><td colspan="2" align="center">maulana blajar</td></tr>
</table>
</body>
</html>