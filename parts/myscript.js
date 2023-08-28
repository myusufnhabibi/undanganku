$(document).ready(function() {

    //load data mahasiswa saat aplikasi dijalankan 
    loadData();

    //button batal
    $("#contentData").on("click", "#cancelButton", function() {
        loadData();
    });

    //simpan data mahasiswa
    $("#post-guestbook-box").on("submit", function(e) {
        e.preventDefault();
        $.ajax({
            url: 'simpan.php',
            type: 'post',
            data: $(this).serialize(),
            beforeSend : function() {
                $('#btn-ucapan').text('Sedang mengirim pesan')
            },
            success: function(data) {
                // alert(data);
                loadData();
                $('#btn-ucapan').text('Terima kasih atas doa dan ucapannya')
            },
            complete: function() {
                $('#btn-ucapan').text('Kirim Ucapan')
            }
        });
    });

})

function loadData() {
    $.ajax({
        url: 'data-doa.php',
        type: 'get',
        success: function(data) {
            $('#dataDoa').html(data);
        }
    });
}