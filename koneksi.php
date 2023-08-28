<?php
//KONVERSI PHP KE PHP 7
// require_once "parser-php-version.php";

$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = "";
$mysql_dbname = "sidoinikahv1";

$koneksi = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_dbname);
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal" . mysqli_connect_error();
}
