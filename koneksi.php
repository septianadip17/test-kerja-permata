<?php
$host = "localhost";
$user = "root";  // Default XAMPP tidak pakai password
$pass = "";
$db   = "gaji_engineer";

$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
