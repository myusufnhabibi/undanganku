$(document).ready(function () {
  $('#loading').hide();
  loadData();

  //button batal
  $("#contentData").on("click", "#cancelButton", function () {
    loadData();
  });

  //simpan data mahasiswa
  $("#post-guestbook-box").on("submit", function (e) {
    e.preventDefault();

    $.ajax({
      url: "simpan.php",
      type: "post",
      data: $(this).serialize(),
      beforeSend: function () {
        $('#loading').show();
        $(this).text("Sedang mengirim pesan");
      },
      success: function (data) {
        loadData();
        $(this).text("Terima kasih atas doa dan ucapannya");

        setTimeout(() => {
          $('#loading').hide();
          $(this).text("Kirim Ucapan");
        }, 2000);
      },
    });
  });
});

function loadData() {
  $.ajax({
    url: "data-doa.php",
    type: "get",
    success: function (data) {
      $("#dataDoa").html(data);
    },
  });
}
