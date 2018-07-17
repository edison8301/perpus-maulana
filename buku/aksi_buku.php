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

// menginput data ke database
	mysqli_query($koneksi,"insert into buku values('',$nama','$tahun_terbit','$id_penulis','$id_penerbit','$id_kategori','$sinopsis','$sampul','$berkas')");
	
// mengalihkan halaman kembali ke index.php
	header("location:buku.php");

	if ($query) {
	echo "<script>alert('Data Berhasil di Simpan');
	document.location.href='buku.php'</script>\n";
} else {
	echo "<script>alert('Data Gagal di Simpan');
	document.location.href='tambah_buku.php'</script>\n";
}
?>