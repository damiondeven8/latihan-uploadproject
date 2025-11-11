<!DOCTYPE html>
<html>
<head>
    <title>MAHASISWA</title>
</head>
<body>
    <h2>ISI TOLONG</h2>
    <br/>
    <a href="index.php">KEMBALI</a>
    <br/><br/>
    <h3>TAMBAH DATA MAHASISWA</h3>
    <form method="post" action="tambah_aksi.php">
        <table>
            <tr>
                <td>Kode Mahasiswa</td>
                <td><input type="text" name="kode_mahasiswa"></td>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NISN</td>
                <td><input type="number" name="nisn"></td>
            </tr>
                <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>
