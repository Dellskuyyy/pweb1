<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost"; // Nama server, biasanya localhost
$username = "root"; // Username default untuk Laragon
$password = ""; // Biarkan kosong jika tidak ada password untuk root
$dbname = "portofolio"; // Nama database yang telah dibuat

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari formulir
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Menyiapkan dan mengikat pernyataan
$stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);

// Eksekusi pernyataan
if ($stmt->execute()) {
    // Jika berhasil, arahkan ke halaman kontak dengan pesan sukses
    header("Location: contacts.html?status=success");
    exit(); // Pastikan untuk keluar setelah header redirect
} else {
    echo "Error: " . $stmt->error;
}

// Menutup koneksi
$stmt->close();
$conn->close();
?>
