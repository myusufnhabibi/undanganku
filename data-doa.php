<?php
include "koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM doa ORDER BY id DESC") or die(mysqli_error($koneksi));
while ($result = mysqli_fetch_array($query)) {
    if (mysqli_num_rows($query) > 0) {
?>
        <div class="user-guestbook">
            <div><img src="invitationwedding.id/wp-content/uploads/2020/09/<?= $result['kehadiran'] == "1" ? "cek.jpg" : "dek.jpg" ?>" title=" Group-12.png" alt="Group-12.png"></div>
            <div class="guestbook">
                <a class="guestbook-name"><?= $result['nama'] ?></a></span>
                <div class="guestbook-message">
                    <?= $result['pesan'] ?>
                </div>
            </div>
        </div>
<?php }
} ?>