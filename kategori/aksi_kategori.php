<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into kategori values('','$nama')");
 
// mengalihkan halaman kembali ke index.php
header("location:kategori.php");

if ($query) {
	echo "<script>alert('Data Berhasil di Simpan');
	document.location.href='kategori.php'</script>\n";
} else {
	echo "<script>alert('Data Gagal di Simpan');
	document.location.href='tambah_kategori.php'</script>\n";
}
?>