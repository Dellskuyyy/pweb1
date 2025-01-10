<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Pribadi</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        #carouselExampleIndicators .carousel-item img {
            max-height: 400px; 
            max-width: 100%; 
            object-fit: contain; 
            margin: 0 auto; 
        }

        #about p {
            font-size: 1.2rem;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .social-icons a {
            margin: 0 10px;
            font-size: 1.5rem;
            color: #007bff;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <header class="bg-primary text-white text-center p-5">
        <h1>Beranda</h1>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">Tentang Saya</a></li>
                    <li class="nav-item"><a class="nav-link" href="portofolio.php">Portofolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.php">Artikel</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacts.html">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/image2.JPG" class="d-block w-100" alt="Gambar 1">
            </div>
            <div class="carousel-item">
                <img src="assets/image3.jpg" class="d-block w-100" alt="Gambar 2">
            </div>
            <div class="carousel-item">
                <img src="assets/image4.JPG" class="d-block w-100" alt="Gambar 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- About Section -->
    <section id="about" class="text-center p-5">
        <p>
            Halo semuanya! Perkenalkan nama saya Fadel Muhammad Aria atau biasa dipanggil Fadel. Saat ini saya sedang menempuh pendidikan 
            di Universitas Kuningan dengan program studi Sistem Informasi. Saya membuat portofolio ini sebagai bagian dari tugas praktikum 
            mata kuliah Pemrograman Web 1 yang diampu oleh Pak Dede Irawan, M.Kom.
        </p>
        <a href="portofolio.php" class="btn btn-primary mt-3">Lihat Portofolio</a>
    </section>

    <!-- Social Media Icons -->
    <section class="text-center social-icons p-3 bg-light">
        <h5>Ikuti saya di:</h5>
        <a href="https://facebook.com/" target="_blank"><i class="fab fa-facebook"></i>Facebook</a>
        <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i>X</a>
        <a href="https://www.instagram.com/fdellllllllll___?igsh=eXpmbnhrNWU3MWl1" target="_blank"><i class="fab fa-instagram"></i>Instagram</a>
        <a href="https://www.linkedin.com/in/fadel-aryo-988897292?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank"><i class="fab fa-linkedin"></i>Linkedin</a>
    </section>

    <!-- Footer -->
    <footer class="text-center p-4 bg-light">
        <p>&copy; 2025 Fadel Muhammad Aria. Dedel</p>
    </footer>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
