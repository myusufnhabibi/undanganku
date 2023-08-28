<?php
include "koneksi.php";

$nama = $_POST['nama'];
$pesan = $_POST['pesan'];

$query = mysqli_query($koneksi, "INSERT INTO doa(nama,pesan) VALUES('$nama', '$pesan')");
if ($query) {
    echo "Simpan Data Berhasil";
} else {
    echo "Simpan Data Gagal :" . mysqli_error($koneksi);
}
