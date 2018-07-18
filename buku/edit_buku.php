<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<table width="700" border="1">
		<tr>
			<td colspan="2" align="center"><h1>Selamat Datang di Sistem Informasi Perpustakaan</h1></td>
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
				<form method="post" action="update_buku.php">
					<table border="0">
						<?php include '../koneksi.php';
						$id = $_GET['id'];
						$data = mysqli_query($koneksi,"select * from buku where id='$id'");
						while($d = mysqli_fetch_array($data)){
							?>
							<form method="post" action="update_buku.php">
								<table>
									<table>
										<tr>			
											<td>Nama</td>
											<td>
												<input type="hidden" name="id" value="<?php echo $d['id']; ?>"><input type="text" name="nama" value="<?php echo $d['nama']; ?>">
											</td>
										</tr>

										<tr>
											<td>Tahun Terbit</td>
											<td><input type="date" name="tahun_terbit" value="<?php echo $d['tahun_terbit']; ?>">
											</td>
										</tr>

										<tr>
											<td>Penulis </td>
											<td>
												<?php include 'koneksi.php';
												$read_penulis = mysqli_query($koneksi, "SELECT * FROM penulis"); ?><select name="penulis">
													<option>Pilih penulis</option><?php
													if ($read_penulis->num_rows> 0 ) {
														while ($data = $read_penulis->fetch_assoc()) {?>
															<option value="<?=$data['id'];?>"><?=$data['nama'];?></option>
															<?php
														}
													}?>
												</td>
											</select>
										</tr>

										<tr>
											<td>Penerbit </td>
											<td>
												<?php
												include 'koneksi.php';
												$read_penerbit = mysqli_query($koneksi, "SELECT * FROM penerbit");
												?>
												<select name="penerbit">
													<option>Pilih penerbit</option>
													<?php
													if ($read_penerbit->num_rows> 0 ) {
														while ($data = $read_penerbit->fetch_assoc())
															{?><option value="<?=$data['id'];?>"><?=$data['nama'];?></option>
														<?php}
													}
													?>
											</td>
										</select>
										</tr>

				<td>Kategori </td>
			<td>
			<?php
			include 'koneksi.php';
			$read_kategori = mysqli_query($koneksi, "SELECT * FROM kategori"); 
			?>
			<select name="kategori">
				<option>Pilih kategori</option>
				<?php
				if ($read_kategori->num_rows> 0 ) {
					while ($data = $read_kategori->fetch_assoc()) {
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
					<td><input type="text" name="sinopsis" value="<?php echo $d['sinopsis']; ?>"></td>
				</tr>

			<tr>
				<td>Sampul</td>
				<td><input type="file" name="sampul" class="inputfile"></td>
				
			</tr>

			<tr>
				<td>Berkas</td>
				<td><input type="file" name="berkas" class="inputfile"></td>		
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
			</table>
				</table></form><?php }?>
			</table>
		</form>
	</td>
</tr>
</table>
</body>
</html>