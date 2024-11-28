$(document).ready(function () {
    //Efek fade-in
    $('.gallery img').each(function (index) {
      $(this).delay(200 * index).fadeIn(500);
    });
  
    //Menampilkan gambar
    $(document).on('click', '.gallery img', function () {
      const imgSrc = $(this).attr('src'); // Ambil sumber gambar
      $('.modal img').attr('src', imgSrc); // Setel sumber gambar di modal
      $('.modal').fadeIn(300); // Tampilkan modal dengan animasi fade-in
    });
  
    // 3. Menutup modal dengan tombol "close" atau area di luar gambar
    $('.close-btn, .modal').on('click', function (e) {
      if ($(e.target).hasClass('modal') || $(e.target).hasClass('close-btn')) {
        $('.modal').fadeOut(300); // Sembunyikan modal dengan animasi fade-out
      }
    });
  
    // 4. Menambah gambar baru dari file input
    $('#add-image-btn').on('click', function () {
      const fileInput = $('#image-upload')[0].files[0]; // Ambil file dari input
      if (!fileInput) {
        alert('Harap pilih file gambar.');
        return;
      }
  
      const reader = new FileReader();
      reader.onload = function (e) {
        const newImage = $(`<img src="${e.target.result}" alt="Gambar Baru">`);
        $('.gallery').append(newImage); // Tambahkan gambar baru ke galeri
        newImage.fadeIn(500); // Efek fade-in untuk gambar baru
      };
      reader.readAsDataURL(fileInput); // Membaca file sebagai data URL
      $('#image-upload').val(''); // Reset input file
    });
  });
  