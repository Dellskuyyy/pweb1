<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracer Alumni</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div class="container">
    <h2 class="mt-5">Formulir Tracer Alumni</h2>
    <form id="alumniForm">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan:</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" required>
        </div>
        <div class="form-group">
            <label for="tahun_lulus">Tahun Lulus:</label>
            <input type="number" class="form-control" id="tahun_lulus" name="tahun_lulus" required>
        </div>
        <div class="form-group">
            <label for="pekerjaan">Pekerjaan:</label>
            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>

    <div id="response" class="mt-3"></div>
</div>

<script>
$(document).ready(function() {
    $('#alumniForm').on('submit', function(event) {
        event.preventDefault(); // Mencegah pengiriman form secara default
        $.ajax({
            url: 'submit_alumni.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(data) {
                $('#response').html(data); // Menampilkan respons dari server
                $('#alumniForm')[0].reset(); // Menghapus data form setelah pengiriman
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText); // Menampilkan error di konsol jika terjadi kesalahan
            }
        });
    });
});
</script>

</body>
</html>
