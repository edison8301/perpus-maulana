<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];



// update data ke database
$result = mysqli_query($koneksi," update kategori set nama='$nama' where id='$_POST[id]'");

// mengalihkan halaman kembali ke index.php
// 
if ($result) {
	header("location:kategori.php");
}
else{
	header("location:update_kategori.php");
}

// var_dump($result);

?>