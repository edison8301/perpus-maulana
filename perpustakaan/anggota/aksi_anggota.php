<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$status_aktif = $_POST['status_aktif'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into anggota values('','$nama','$alamat','$telepon','$email','status_aktif')");
 
// mengalihkan halaman kembali ke index.php
header("location:anggota.php");

if ($query) {
	echo "<script>alert('Data Berhasil di Simpan');
	document.location.href='anggota.php'</script>\n";
} else {
	echo "<script>alert('Data Gagal di Simpan');
	document.location.href='tambah_anggota.php'</script>\n";
}
?>