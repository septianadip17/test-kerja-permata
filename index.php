<?php
include 'koneksi.php'; // Panggil koneksi

$result = mysqli_query($conn, "SELECT * FROM engineer");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Gaji Engineer</title>
</head>
<body>
    <h2>Daftar Gaji Engineer</h2>
    <a href="tambah.php">Tambah Data</a>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Tipe Device</th>
            <th>Deploy</th>
            <th>Gaji ($)</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['tipe_device']; ?></td>
            <td><?= $row['deploy']; ?></td>
            <td><?= $row['gaji']; ?></td>
            <td><?= $row['tanggal']; ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
                <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
