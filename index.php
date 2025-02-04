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
  <!-- Menggunakan CDN Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-100 to-purple-100 min-h-screen">
  <div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-8">
      <h1 class="text-4xl font-extrabold text-gray-800">Daftar Gaji Engineer</h1>
      <a href="tambah.php" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded shadow-lg transition duration-200">
        Tambah Data
      </a>
    </div>
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
      <table class="min-w-full leading-normal">
        <thead>
          <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
            <th class="py-3 px-4 text-left">ID</th>
            <th class="py-3 px-4 text-left">Nama</th>
            <th class="py-3 px-4 text-left">Tipe Device</th>
            <th class="py-3 px-4 text-left">Deploy</th>
            <th class="py-3 px-4 text-left">Gaji ($)</th>
            <th class="py-3 px-4 text-left">Tanggal</th>
            <th class="py-3 px-4 text-center">Aksi</th>
          </tr>
        </thead>
        <tbody class="text-gray-700 text-sm">
          <?php while ($row = mysqli_fetch_assoc($result)) { ?>
          <tr class="border-b hover:bg-gray-50">
            <td class="py-3 px-4"><?= $row['id']; ?></td>
            <td class="py-3 px-4"><?= $row['nama']; ?></td>
            <td class="py-3 px-4"><?= $row['tipe_device']; ?></td>
            <td class="py-3 px-4"><?= $row['deploy']; ?></td>
            <td class="py-3 px-4"><?= $row['gaji']; ?></td>
            <td class="py-3 px-4"><?= $row['tanggal']; ?></td>
            <td class="py-3 px-4 text-center">
              <a href="edit.php?id=<?= $row['id']; ?>" class="text-blue-500 hover:text-blue-700 font-medium mr-2 transition duration-200">Edit</a>
              <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin hapus data?')" class="text-red-500 hover:text-red-700 font-medium transition duration-200">Hapus</a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
