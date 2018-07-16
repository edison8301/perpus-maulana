<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$tahun_terbit = $_POST['tahun_terbit'];
$id_penulis = $_POST['id_penulis'];
$id_penerbit = $_POST['id_penerbit'];
$id_kategori = $_POST['id_kategori'];
$sinopsis = $_POST['sinopsis'];
$sampul = $_POST['sampul'];
$berkas = $_POST['berkas'];



// update data ke database
$result = mysqli_query($koneksi,"update buku set nama='$nama', tahun_tebit='$tahun_tebit', id_penulis='$id_penulis', id_penerbit='$id_penerbit', id_kategori='$id_kategori', sinopsis='$sinopsis', sampul='$sampul', berkas='$berkas' where id='$_POST[id]'");

// mengalihkan halaman kembali ke index.php
// 
if ($result) {
	header("location:buku.php");
}
else{
	header("location:update_buku.php");
}

// var_dump($result);

?>