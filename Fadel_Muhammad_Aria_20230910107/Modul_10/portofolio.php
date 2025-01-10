<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Pribadi</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <header class="bg-primary text-white text-center p-5">
        <h1>Portofolio Fadel Muhammad Aria</h1>
        <a href="index.php" class="btn btn-light">Kembali ke Beranda</a>
    </header>

    <section id="portfolio" class="p-5">
        <div class="container">
            <!-- Filter Kategori -->
            <div class="mb-4">
                <label for="categoryFilter">Filter Kategori:</label>
                <select id="categoryFilter" class="form-control w-50 d-inline-block">
                    <option value="">Semua</option>
                    <option value="editing">Editing</option>
                    <option value="networking">Networking</option>
                    <option value="pelatihan">Pelatihan</option>
                </select>
            </div>

            <div class="row" id="projectList">
                <!-- Proyek 1 -->
                <div class="col-md-4 mb-4 project-item networking">
                    <div class="card">
                        <img src="assets/sertif1.jpeg" alt="" class="card-img-top img-fit">
                        <div class="card-body">
                            <h5 class="card-title" id="networking">Junior Network Administrator</h5>
                            <p class="card-text">Saya mengikuti program pelatihan Junior Network Administrator (JNA). disana saya mendapatkan banyak 
                                pelajar mengenai Networking Administrator dimulai dari belajar Merancang Pengalamatan Jaringan, Mengkonfigurasi Switch pada
                                Jaringan, Mengkonfigurasi Routing pada Perangkat Jaringan Antar Autonomous System dan masih banyak lagi pelajaran yang Saya
                                dapatkan hingga diakhir pelatihan saya diharuskan mengerjakan sebuah projek akhir agar bisa lulus dan mendapatkan Sertifikat
                                Kompetensi.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 project-item pelatihan">
                    <div class="card">
                        <img src="assets/sertif2.jpeg" alt="" class="card-img-top img-fit">
                        <div class="card-body">
                            <h5 class="card-title" id="pelatihan">Belajar Membuat Front-End Web untuk Pemula</h5>
                            <p class="card-text">Saya mengikuti program pelatihan idcamp Dicoding yaitu Belajar Membuat Front-End Web untuk Pemula dimana
                                saya belajar mengenai Browser Object Model dan Document Object Model dan menerapkan BOM dan DOM pada halaman sebuah website
                                selain itu diajarkan juga cara Teknik pemanipulasian DOM menggunakan Javascript. lalu saya juga belajar mengenai Interaktif dengan
                                Event, Penyimpanan Data dengan Web Storage.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 project-item pelatihan">
                    <div class="card">
                        <img src="assets/sertif3.jpeg" alt="" class="card-img-top img-fit">
                        <div class="card-body">
                            <h5 class="card-title" id="pelatihan">Belajar Dasar Pemrograman Web</h5>
                            <p class="card-text">Saya mengikuti program pelatihan idcamp Dicoding yaitu Belajar Dasar Pemrograman Web dimana
                                saya belajar mengenai Pengenalan dan Pendalaman HTML,Pengenalan dan Pendalaman CSS, Layout Responsif dengan Flexbox dan juga
                                Mengimplementasi teknik yang telah dipelajari dalam pembuatan dan improvisasi pada sebuah proyek website sederhana.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 project-item pelatihan">
                    <div class="card">
                        <img src="assets/sertif4.jpeg" alt="" class="card-img-top img-fit">
                        <div class="card-body">
                            <h5 class="card-title" id="pelatihan">Belajar Dasar Pemrograman Javascript</h5>
                            <p class="card-text">Saya mengikuti program pelatihan idcamp Dicoding yaitu Belajar Dasar Pemrograman Javascript dimana
                                saya belajar mengenai Gerbang dunia Javascript, Mengarungi lautan Sintaksis, Bermain dengan Function, Bukan Sembarang Data,
                                Sang pengatur program, Modularisasi Harmonis, Menyelami dunia OOP, Functional Programming, Asynchronous Process, dan Code
                                Quality.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4 project-item editing">
                    <div class="card">
                        <img src="assets/image1.jpeg" alt="" class="card-img-top img-fit">
                        <div class="card-body">
                            <h5 class="card-title" id="editing">Podcast HIMA SI</h5>
                            <p class="card-text">Di Himpunan Mahasiswa Sistem Informasi terdapat sebuah kegiatan yang bernama Podcast yaitu seperti
                                obrolan-obrolan singkat mengenai Mahasiswa Uniku yang berprestasi yang mengikuti program-program pemerintah seperti MBKM,
                                , MSIB, PMM, PKM, P2MW, PPK Ormawa ataupun yang mengikuti perlombaan atau Olimpiade dan disini saya adalah editor 
                                yang di tugaskan untuk mengedit video Podcast tersebut. Temen-temen bisa lihat langsung di channel YouTube-nya Himasi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fitur Upload File -->
            <div class="mt-4">
                <h3>Upload Lampiran Proyek</h3>
                <form id="uploadForm" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="fileUpload">Pilih file (PDF atau gambar):</label>
                        <input type="file" id="fileUpload" class="form-control-file" accept=".pdf, .jpg, .jpeg, .png" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>

                <!-- Tempat untuk menampilkan file yang diupload -->
                <div id="uploadedFiles" class="mt-3"></div>
            </div>
        </div>
    </section>

    <footer class="text-center p-4 bg-light">
        <p>&copy; 2025 Fadel Muhammad Aria. Dedel</p>
    </footer>

    <!-- Script untuk filter dan upload -->
    <script>
        // Filter kategori proyek
        document.getElementById('categoryFilter').addEventListener('change', function() {
            const selectedCategory = this.value;
            const projects = document.querySelectorAll('.project-item');

            projects.forEach(project => {
                if (selectedCategory === '' || project.classList.contains(selectedCategory)) {
                    project.style.display = 'block';
                } else {
                    project.style.display = 'none';
                }
            });
        });

        // Upload file
        document.getElementById('uploadForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah pengiriman form secara default

            const fileInput = document.getElementById('fileUpload');
            const uploadedFilesDiv = document.getElementById('uploadedFiles');

            if (fileInput.files.length > 0) {
                const fileName = fileInput.files[0].name;
                const fileElement = document.createElement('p');
                fileElement.textContent = `File yang diupload: ${fileName}`;
                uploadedFilesDiv.appendChild(fileElement);
                
                // Reset form
                fileInput.value = '';
            }
        });
    </script>

</body>
</html>

