<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan data dari database</title>
</head>
<body>
    <h2>Data Siswa</h2>
    <br/>
    <a href="tambah.php">+ TAMBAH DATA</a>
    <br/><br/>
    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>kode_mahasiswa</th>
            <th>Nama</th>
            <th>NISN</th>
            <th>jurusan</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        <?php
        $no = 1;
        $data = mysqli_query($koneksi,"select * from siswa");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?>
            </td>
            <td><?php echo $d['kode_mahasiswa']; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['nisn']; ?></td>
            <td><?php echo $d['jurusan']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td>
                <a href="update.php?id=<?php echo $d['id_siswa']; ?>">UPDATE</a>
                <a href="delete.php?id=<?php echo $d['id_siswa']; ?>">DELETE</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
