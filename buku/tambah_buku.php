
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
				<form method="post" action="aksi_buku.php enctype="multipart/form-data">
					<table border="0">
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td>
								<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
								<input type="varchar" name="nama" placeholder="nama">
							</td>
						</tr>
						<tr>
							<td>Tahun Terbit</td>
							<td></td>
							<td><input type="year"  style="width: 200px name="tahun_terbit" placeholder="tahun terbit"></td>
						</tr>
						</tr>


						<tr>
							<td>Penulis </td>
							<td>:</td>
							<td >
								<?php
								include '../koneksi.php';
								$read_penulis = mysqli_query($koneksi, "SELECT * FROM penulis");?>
								<select name="penulis"  style="width: 160px ">
									<option>Pilih penulis</option>
								<?php
								if ($read_penulis->num_rows> 0 )
								{
									while ($data = $read_penulis->fetch_assoc())
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
							<td> Penerbit </td>
							<td>:</td>
							<td>
								<?php
								include '../koneksi.php';
								$read_penerbit = mysqli_query($koneksi, "SELECT * FROM penerbit");?>
								<select name="penerbit"  style="width: 160px">
									<option>Pilih penebit</option>
								<?php
								if ($read_penulis->num_rows> 0 )
								{
									while ($data = $read_penerbit->fetch_assoc())
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
							<td>Kategori </td>
							<td>:</td>
							<td>
								<?php
								include '../koneksi.php';
								$read_penulis = mysqli_query($koneksi, "SELECT * FROM kategori");?>
								<select name="kategori" style="width: 160px">
									<option>Pilih kategori</option>
								<?php
								if ($read_kategori->num_rows> 0 )
								{
									while ($data = $read_kategori->fetch_assoc())
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
							<td>Sinopsis</td>
							<td></td>
							<td><input "texarea" name="sinopsis" placeholder="sinopsis"></td>
						</tr>
						<tr>
							<td>Sampul</td>
							<td></td>
							<td><input type="file" name="sampul"  class="inputfile" placeholder="sampul"></td>
						
						<tr>
							<td>Berkas</td>
							<td></td>
							<td><input type="file" name="berkas" class="inputfile" placeholder="berkas"></td>
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