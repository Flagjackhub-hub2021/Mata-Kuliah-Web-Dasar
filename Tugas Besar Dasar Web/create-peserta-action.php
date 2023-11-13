<?php
require 'koneksi.php';
$kd_skema = $_POST["kd_skema"];
$nm_peserta = $_POST["nm_peserta"];
$jk = $_POST["jk"];
$alamat = $_POST["alamat"];
$no_hp = $_POST["no_hp"];

$sql = "INSERT INTO peserta (kd_skema,nm_peserta,jk,alamat,no_hp) 
values ('$kd_skema','$nm_peserta','$jk','$alamat','$no_hp')";
$hasil = mysqli_query($koneksi, $sql);

if ($hasil){
    header("Location:index.php?page=peserta&notif=sukses&pesan=Simpan Data Sukses");
} else {
    header("Location:index.php?page=peserta&notif=Simpan Data Gagal");
}
