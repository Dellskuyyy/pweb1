<?php
$servername = "localhost";
$username = "root"; // ganti jika perlu
$password = ""; // ganti jika perlu
$dbname = "db_alumni"; // pastikan ini adalah nama database yang benar

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>