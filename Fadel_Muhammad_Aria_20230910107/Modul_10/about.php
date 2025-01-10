<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Pribadi</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa; 
        }
        #about {
            background-color: #ffffff; 
            border-radius: 10px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        }
        #about p {
            text-align: justify; 
        }
        .profile-image {
            margin-right: 20px; 
            border-radius: 50%; 
            transition: transform 0.3s; 
        }
        .profile-image:hover {
            transform: scale(1.05); 
        }
        .social-icons a {
            margin: 0 10px;
            color: #007bff; 
            transition: color 0.3s; 
        }
        .social-icons a:hover {
            color: #0056b3; 
        }
    </style>
</head>
<body>
    <header class="bg-primary text-white text-center p-5">
        <h1>Fadel Muhammad Aria</h1>
        <a href="index.php" class="btn btn-light">Kembali ke Beranda</a>
    </header>

    <section id="about" class="p-5 my-4">
        <div class="container">
            <h2 class="text-center">Tentang Saya</h2>
            <div class="row align-items-center">
            <div class="col-md-4 text-center">
                    <img src="assets/pp.JPG" alt="Foto Profil" class="img-fluid profile-image" style="width: 192px; height: 192px; border: 2px solid #007bff;">
                </div>
                <div class="col-md-8">
                    <p>Halo Semuanya, perkenalkan nama saya Fadel Muhammad Aria biasa dipanggil Fadel, saya berasal dari desa Cikeusal Kecamatan Cimahi.
                    Saya menempuh pendidikan SD di SDN 1 Cikeusal, dilanjut ke SMPN 3 Cimahi lalu menempuh Pendidikan SMK di SMKN 4 Kuningan
                    mengambil Jurusan Rekayasa Perangkat Lunak (RPL). Saya terampil dalam hal editing baik itu gambar atau video, selain itu
                    saya juga cukup handal dalam hal Pemrograman HTML, CSS, JS, PHP, JAVA, C++, lalu saya juga sempat belajar tentang Framework
                    Laravel ketika masih SMK. Dan tujuan Karier Saya adalah saya ingin menjadi seseorang yang bisa bermanfaat bagi banyak orang,
                    Karena Sebaik-baik nya orang adalah dia yang bisa bermanfaat bagi banyak orang.</p>

                    <div class="social-icons text-center mt-4">
                        <h5>Ikuti Saya di:</h5>
                        <a href="https://facebook.com/" class="fab fa-facebook-f">Facebook</a>
                        <a href="https://twitter.com/" class="fab fa-twitter">X</a>
                        <a href="https://www.linkedin.com/in/fadel-aryo-988897292?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="fab fa-linkedin-in">Linkedin</a>
                        <a href="https://www.instagram.com/fdellllllllll___?igsh=eXpmbnhrNWU3MWl1" class="fab fa-instagram">Instagram</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center p-4 bg-light">
        <p>&copy; 2025 Fadel Muhammad Aria. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
