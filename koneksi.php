<?php
$koneksi = mysqli_connect("localhost","root","mysql","data");
echo "Koneksi Berhasil";
//cek koneksi
if (mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>
