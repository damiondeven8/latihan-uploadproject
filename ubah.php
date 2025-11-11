<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$id_siswa = $_POST['id_siswa'];
$nama   = $_POST['nama'];
$nisn   = $_POST['nisn'];
$alamat = $_POST['alamat'];

// update data ke database
mysqli_query($koneksi, "UPDATE data_siswa SET nama='$nama', nisn='$nisn', alamat='$alamat' WHERE id_siswa='$id_siswa'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
