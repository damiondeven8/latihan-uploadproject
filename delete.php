<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang dikirim dari url
$id_siswa = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM siswa WHERE id_siswa='$id_siswa'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
