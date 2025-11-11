<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$kode_mahasiswa = $_POST['kode_mahasiswa'];
$nama    = $_POST['nama'];
$nisn    = $_POST['nisn'];
$jurusan = $_POST['jurusan'];
$alamat  = $_POST['alamat'];

// update data ke database
mysqli_query($koneksi, "UPDATE siswa SET 
    nama='$nama',
    nisn='$nisn',
    jurusan='$jurusan',
    alamat='$alamat' 
    WHERE kode_mahasiswa='$kode_mahasiswa'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
