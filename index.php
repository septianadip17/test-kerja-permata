<?php
include 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM engineer");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Data Gaji Engineer</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
  <div class="container mx-auto p-6">
    <h2 class="text-3xl font-bold mb-6">Daftar Gaji Engineer</h2>
    <a href="tambah.php" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded shadow">Tambah Data</a>
    <div class="overflow-x-auto mt-6">
      <table class="min-w-full bg-white shadow-md rounded">
        <thead>
          <tr class="bg-gray-200 text-left">
            <th class="py-3 px-4 border">ID</th>
            <th class="py-3 px-4 border">Nama</th>
            <th class="py-3 px-4 border">Tipe Device</th>
            <th class="py-3 px-4 border">Deploy</th>
            <th class="py-3 px-4 border">Gaji ($)</th>
            <th class="py-3 px-4 border">Tanggal</th>
            <th class="py-3 px-4 border">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr class="border-b hover:bg-gray-50">
              <td class="py-2 px-4 border"><?= $row['id']; ?></td>
              <td class="py-2 px-4 border"><?= $row['nama']; ?></td>
              <td class="py-2 px-4 border"><?= $row['tipe_device']; ?></td>
              <td class="py-2 px-4 border"><?= $row['deploy']; ?></td>
              <td class="py-2 px-4 border"><?= $row['gaji']; ?></td>
              <td class="py-2 px-4 border"><?= $row['tanggal']; ?></td>
              <td class="py-2 px-4 border">
                <a href="edit.php?id=<?= $row['id']; ?>" class="text-blue-500 hover:underline mr-2">Edit</a>
                <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin hapus?')" class="text-red-500 hover:underline">Hapus</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
