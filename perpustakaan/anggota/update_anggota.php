<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$status_aktif = $_POST['status_aktif'];



// update data ke database
$result = mysqli_query($koneksi,"update anggota set nama='$nama', alamat='$alamat', telepon='$telepon', email='$email', status_aktif='$status_aktif' where id='$_POST[id]'");

// mengalihkan halaman kembali ke index.php
// 
if ($result) {
	header("location:anggota.php");
}
else{
	header("location:update_anggota.php");
}

// var_dump($result);

?>