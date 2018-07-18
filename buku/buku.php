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
			<ul><a href="tambah_buku.php"> +Tambah Buku</a>
			</ul>
			<table border="1">
				<thead>
					<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Tahun Terbit</th>
			<th>Penulis</th>
			<th>Penerbit</th>
			<th>Kategori</th>
			<th>Sinopsis</th>
			<th>Sampul</th>
			<th>Berkas</th>
			<th>Opsi</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		include '../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from buku");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr class="odd gradex">
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['tahun_terbit']; ?></td>
				<td><?php echo $d['id_penulis']; ?></td>
				<td><?php echo $d['id_penerbit']; ?></td>
				<td><?php echo $d['id_kategori']; ?></td>
				<td><?php echo $d['sinopsis']; ?></td>
				<td><img src="image/<?php echo $d['sampul']; ?>" width="100" height="100" /></td>
				<td><a href="download.php?id=<?php echo $d['berkas'] ?>">Download Berkas</a></td>
				<td>
					<a href="edit_buku.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus_buku.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php  $no++; }?>
		</tbody>
		</table>
		</td>
	</td>
</tr>
<tr><td colspan="2" align="center">maulana blajar</td></tr>
</table>
</body>
</html>