<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];



// update data ke database
$result = mysqli_query($koneksi,"update petugas set nama='$nama', alamat='$alamat', telepon='$telepon',email='$email' where id='$_POST[id]'");

// mengalihkan halaman kembali ke index.php
// 
if ($result) {
	header("location:petugas.php");
}
else{
	header("location:update_petugas.php");
}

// var_dump($result);

?>