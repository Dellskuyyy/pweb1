<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);

    echo "<h2>Pesan Terkirim!</h2>";
    echo "<p>Nama: $name</p>";
    echo "<p>Pesan: $message</p>";
}
?>
