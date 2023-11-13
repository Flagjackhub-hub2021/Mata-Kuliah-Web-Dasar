<?php
require 'koneksi.php';
$id = $_GET["id"];


$sql = "DELETE FROM peserta WHERE id='$id' ";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil){
    header("Location:index.php?page=peserta&notif=sukses&pesan=Hapus Data Sukses");
} else {
    header("Location:index.php?page=peserta&notif=Hapus Data Gagal");
}