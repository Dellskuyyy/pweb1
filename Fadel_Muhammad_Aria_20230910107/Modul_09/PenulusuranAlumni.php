<?php
// Hubungkan ke database
include "Latihan_09_config.php";

// Inisialisasi variabel
$hasil_pencarian = [];

// Proses pencarian
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data input dari formulir
    $nama = strtolower(trim($_POST['nama']));
    $tahun_lulus = trim($_POST['tahun_lulus']);
    $jurusan = strtolower(trim($_POST['jurusan']));

    // Query dasar
    $query = "SELECT * FROM alumni WHERE 1=1";

    // Tambahkan kondisi ke query
    if (!empty($nama)) {
        $query .= " AND LOWER(nama) LIKE '%" . $conn->real_escape_string($nama) . "%'";
    }
    if (!empty($tahun_lulus)) {
        $query .= " AND tahun_lulus = '" . $conn->real_escape_string($tahun_lulus) . "'";
    }
    if (!empty($jurusan)) {
        $query .= " AND LOWER(jurusan) LIKE '%" . $conn->real_escape_string($jurusan) . "%'";
    }

    // Eksekusi query
    $result = $conn->query($query);

    // Simpan hasil pencarian
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $hasil_pencarian[] = $row;
        }
    }
}
?>

<h2>Penelusuran Alumni</h2>
<form method="POST" class="mb-4">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Alumni</label>
        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama alumni">
    </div>
    <div class="mb-3">
        <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
        <input type="text" name="tahun_lulus" id="tahun_lulus" class="form-control" placeholder="Masukkan tahun lulus">
    </div>
    <div class="mb-3">
        <label for="jurusan" class="form-label">Jurusan</label>
        <input type="text" name="jurusan" id="jurusan" class="form-control" placeholder="Masukkan jurusan">
    </div>
    <button type="submit" class="btn btn-primary">Cari</button>
</form>

<?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
    <h3>Hasil Pencarian</h3>
    <?php if (count($hasil_pencarian) > 0): ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Tahun Lulus</th>
                    <th>Jurusan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hasil_pencarian as $a): ?>
                    <tr>
                        <td><?= htmlspecialchars($a['nama']) ?></td>
                        <td><?= htmlspecialchars($a['tahun_lulus']) ?></td>
                        <td><?= htmlspecialchars($a['jurusan']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="text-danger">Tidak ada data alumni yang ditemukan.</p>
    <?php endif; ?>
<?php endif; ?>
