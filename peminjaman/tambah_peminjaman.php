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


						<div class="form-group">
                <?php
                include '../koneksi.php';
                $data = mysqli_query($koneksi, "SELECT * FROM buku");

                echo "<div class='form-group'>
                <h5 class='col-sm-4 control-label'>Pilih Buku</h5>
                <div class='col-md-4'>
                <select class='selectpicker form-control' name='id_buku' required='' style='width:100%'>
                <option value='Pilih Buku' selected=''>Nama Buku</option>";
                while ($row = mysqli_fetch_array($data)) { echo "<option value='$row[id]' selected=''>$row[nama]</option>";
              }
              echo "</select>
              </div>
              </div>";
              ?>
            </div>

            
					<tr>
						<td>Anggota</td>
						<td>:</td>
						<td><input type="int" name="id_anggota" placeholder="id_anggota"></td>
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