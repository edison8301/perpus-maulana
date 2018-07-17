<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into penulis values('','$nama','$alamat','$telepon','$email')");
 
// mengalihkan halaman kembali ke index.php
header("location:penulis.php");

if ($query) {
	echo "<script>alert('Data Berhasil di Simpan');
	document.location.href='penulis.php'</script>\n";
} else {
	echo "<script>alert('Data Gagal di Simpan');
	document.location.href='tambah_penulis.php'</script>\n";
}
?>