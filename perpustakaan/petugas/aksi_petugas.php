<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into petugas values('','$nama','$alamat','$telepon','$email')");
 
// mengalihkan halaman kembali ke index.php
header("location:petugas.php");
 
?>