<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
</head>
<body>
    <h2>EDIT DATA MAHASISWA</h2>
    <br/>
    <a href="index.php">KEMBALI</a>
    <br/><br/>

    <?php
    include 'koneksi.php';
    $id = $_GET['id']; // Asumsi parameter id untuk primary key siswa

    // Ambil data mahasiswa berdasarkan id
    $query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id_siswa='$id'");
    $data = mysqli_fetch_array($query);
    ?>

    <form method="post" action="update.php">
        <input type="hidden" name="id_siswa" value="<?php echo $data['id_siswa']; ?>">
        <table>
            <tr>
                <td>Kode Mahasiswa</td>
                <td><input type="text" name="kode_mahasiswa" value="<?php echo $data['kode_mahasiswa']; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
            </tr>
            <tr>
                <td>NISN</td>
                <td><input type="number" name="nisn" value="<?php echo $data['nisn']; ?>"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" value="<?php echo $data['jurusan']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>
