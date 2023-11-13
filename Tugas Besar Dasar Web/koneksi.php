<?php
$host = "localhost:3306";
$user = "root";
$pass = "";
$db = "tes";
$koneksi = mysqli_connect($host, $user, $pass, $db);
if ($koneksi) {
} else {
    die("Koneksi Gagal : " . mysqli_connect_error());
}