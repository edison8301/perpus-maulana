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
				<form method="post" action="aksi_peminjaman.php">
					<table border="0">

						<tr>
							<td>Buku </td>
							<td>:</td>
							<td >
								<?php
								include '../koneksi.php';
								$read_penulis = mysqli_query($koneksi, "SELECT * FROM buku");?>
								<select name="buku"  style="width: 160px ">
									<option>Pilih Buku</option>
								<?php
								if ($read_buku->num_rows> 0 )
								{
									while ($data = $read_buku->fetch_assoc())
									{
										?>
										<option value="<?=$data['id'];?>"><?=$data['nama'];?></option>
										<?php
									}
								}
								?>
							</td>
								</select>
						</tr>
						<tr>
							<td>Anggota </td>
							<td>:</td>
							<td >
								<?php
								include '../koneksi.php';
								$read_anggota = mysqli_query($koneksi, "SELECT * FROM penulis");?>
								<select name="penulis"  style="width: 160px ">
									<option>Pilih Anggota</option>
								<?php
								if ($read_anggota->num_rows> 0 )
								{
									while ($data = $read_anggota->fetch_assoc())
									{
										?>
										<option value="<?=$data['id'];?>"><?=$data['nama'];?></option>
										<?php
									}
								}
								?>
							</td>
								</select>
						</tr>
						<tr>
							<td>Tanggal_Pinjam</td>
							<td>:</td>
							<td><input type="date" name="tanggal_pinjam" placeholder="tanggal_pinjam"></td>
						</tr>
						<tr>
							<td>Tanggal_Kembali</td>
							<td>:</td>
							<td><input type="date" name="tanggal_Kembali" placeholder="tanggal_kembali"></td>
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