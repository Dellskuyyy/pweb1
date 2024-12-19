<?php
$servername = "localhost";
$username = "root"; // ganti jika perlu
$password = ""; // ganti jika perlu
$dbname = "db_20230910107_fadel"; // pastikan ini adalah nama database yang benar

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari permintaan POST dengan pemeriksaan ketersediaan kunci
$nama = $_POST['nama'] ?? '';
$jurusan = $_POST['jurusan'] ?? '';
$tahun_lulus = $_POST['tahun_lulus'] ?? 0; // default 0 jika tidak ada
$pekerjaan = $_POST['pekerjaan'] ?? '';
$email = $_POST['email'] ?? '';

// Menyimpan data ke dalam database jika semua variabel terisi
if (!empty($nama) && !empty($jurusan) && !empty($tahun_lulus) && !empty($email)) {
    $sql = "INSERT INTO alumni (nama, jurusan, tahun_lulus, pekerjaan, email)
    VALUES ('$nama', '$jurusan', '$tahun_lulus', '$pekerjaan', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Semua field harus diisi!";
}

$conn->close();
?>
