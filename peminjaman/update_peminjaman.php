<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$buku = $_POST['id_buku'];
$anggota = $_POST['id_anggota'];
$tanggal_pinjam = $_POST['tanggal_pinjam'];
$tanggal_kembali = $_POST['tanggal_kembali'];



// update data ke database
$result = mysqli_query($koneksi,"update peminjaman set buku='$buku', anggota='$id_anggota', tanggal_pinjam='$tanggal_pinjam',tanggal_kembali='$tanggal_kembali' where id='$_POST[id]'");

// mengalihkan halaman kembali ke index.php
// 
if ($result) {
	header("location:peminjaman.php");
}
else{
	header("location:update_peminjaman.php");
}

// var_dump($result);

?>