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
			<ul><a href="user.php"> +Tambah User</a>
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
		$data = mysqli_query($koneksi,"select * from user");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr class="odd gradex">
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['password']; ?></td>
				<td><?php echo $d['id_anggota']; ?></td>
				<td><?php echo $d['id_petugas']; ?></td>
				<td><?php echo $d['id_user_role']; ?></td>
				<td><?php echo $d['status']; ?></td>
				<td>
					<a href="edit_user.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus_user.php?id=<?php echo $d['id']; ?>">HAPUS</a>
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