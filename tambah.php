<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama    = $_POST['nama'];
    $tipe    = $_POST['tipe_device'];
    $deploy  = $_POST['deploy'];
    $gaji    = ($deploy == 'Update') ? 35 : 50;
    $tanggal = $_POST['tanggal'];

    $query = "INSERT INTO engineer (nama, tipe_device, deploy, gaji, tanggal) 
              VALUES ('$nama', '$tipe', '$deploy', $gaji, '$tanggal')";
    mysqli_query($conn, $query);

    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tambah Data Engineer</title>
  <!-- Menggunakan CDN Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-green-100 to-blue-100 min-h-screen">
  <div class="container mx-auto px-4 py-8">
    <div class="max-w-lg mx-auto bg-white shadow-xl rounded-lg p-8">
      <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Tambah Engineer</h2>
      <form method="POST">
        <div class="mb-4">
          <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Nama Engineer</label>
          <input type="text" name="nama" id="nama" placeholder="Masukkan nama" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-400">
        </div>
        <div class="mb-4">
          <label for="tipe_device" class="block text-gray-700 text-sm font-bold mb-2">Tipe Device</label>
          <select name="tipe_device" id="tipe_device" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-400">
            <option value="Laptop">Laptop</option>
            <option value="PC">PC</option>
          </select>
        </div>
        <div class="mb-4">
          <label for="deploy" class="block text-gray-700 text-sm font-bold mb-2">Deploy</label>
          <select name="deploy" id="deploy" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-400">
            <option value="Update">Update</option>
            <option value="Upgrade">Upgrade</option>
          </select>
        </div>
        <div class="mb-4">
          <label for="tanggal" class="block text-gray-700 text-sm font-bold mb-2">Tanggal</label>
          <input type="date" name="tanggal" id="tanggal" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-400">
        </div>
        <button type="submit" name="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-md shadow transition duration-200">
          Simpan Data
        </button>
      </form>
    </div>
  </div>
</body>
</html>
