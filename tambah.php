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
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
  <div class="container mx-auto p-6">
    <h2 class="text-3xl font-bold mb-6">Tambah Engineer</h2>
    <form method="POST" class="bg-white p-6 rounded shadow-md">
      <div class="mb-4">
        <label class="block text-gray-700 mb-2" for="nama">Nama Engineer</label>
        <input type="text" name="nama" id="nama" required class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" placeholder="Masukkan nama">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 mb-2" for="tipe_device">Tipe Device</label>
        <select name="tipe_device" id="tipe_device" required class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
          <option value="Laptop">Laptop</option>
          <option value="PC">PC</option>
        </select>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 mb-2" for="deploy">Deploy</label>
        <select name="deploy" id="deploy" required class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
          <option value="Update">Update</option>
          <option value="Upgrade">Upgrade</option>
        </select>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 mb-2" for="tanggal">Tanggal</label>
        <input type="date" name="tanggal" id="tanggal" required class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
      </div>
      <button type="submit" name="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
        Tambah Data
      </button>
    </form>
  </div>
</body>
</html>
