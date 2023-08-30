<?php
include "koneksi.php";

$nama = $_POST['nama'];
$pesan = $_POST['pesan'];
$konfirm = $_POST['konfirm'];

$query = mysqli_query($koneksi, "INSERT INTO doa(nama,pesan,kehadiran) VALUES('$nama', '$pesan', '$konfirm')");
if ($query) {
    echo "Simpan Data Berhasil";
} else {
    echo "Simpan Data Gagal :" . mysqli_error($koneksi);
}
