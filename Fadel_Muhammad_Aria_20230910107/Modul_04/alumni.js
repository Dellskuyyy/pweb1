$(document).ready(function () {
    // Event Mouse: Click dan Hover
    $("#contactButton").click(function () {
      alert("Anda akan menghubungi alumni!");
    });
  
    $("#hoverProfile").hover(
      function () {
        // Mouseenter
        $(this).css({
          "background-color": "lightblue",
          transform: "scale(1.05)",
          "box-shadow": "0 4px 8px rgba(0, 0, 0, 0.3)",
        });
        $(this).find("img").css({
          transform: "scale(1.1)",
          filter: "brightness(1.2)",
        });
      },
      function () {
        // Mouseleave
        $(this).css({
          "background-color": "lightgray",
          transform: "scale(1)",
          "box-shadow": "none",
        });
        $(this).find("img").css({
          transform: "scale(1)",
          filter: "brightness(1)",
        });
      }
    );
  
    // Event Form: Submit
    $("#alumniForm").submit(function (event) {
      event.preventDefault(); // Mencegah pengiriman form
      const name = $("#name").val();
      const major = $("#major").val();
      const year = $("#year").val();
      const photo = $("#photo")[0].files[0];
  
      if (name && year && photo && major) {
        const reader = new FileReader();
        reader.onload = function (e) {
          const newRow = `
            <tr>
              <td class="name">${name}</td>
              <td class="major">${major}</td>
              <td class="year">${year}</td>
              <td><img src="${e.target.result}" alt="Photo ${name}" class="alumni-photo"></td>
              <td class="action-buttons">
                <button class="delete">Hapus</button>
              </td>
            </tr>`;
          $("#alumniTable tbody").append(newRow);
  
          // Bersihkan form
          $("#name").val("");
          $("#major").val("");
          $("#year").val("");
          $("#photo").val("");
          alert(`Data alumni ditambahkan! Nama: ${name}`);
        };
        reader.readAsDataURL(photo);
      } else {
        alert("Harap isi semua kolom!");
      }
    });
  
    // Fitur Pencarian Alumni
    $("#filter").on("input", function () {
      const filter = $(this).val().toLowerCase();
      $("#alumniTable tbody tr").filter(function () {
        $(this).toggle(
          $(this).find(".name").text().toLowerCase().includes(filter) ||
            $(this).find(".major").text().toLowerCase().includes(filter)
        );
      });
    });
  
    // Hapus Alumni
    $("#alumniTable").on("click", ".delete", function () {
      $(this).closest("tr").remove();
    });
  });
  