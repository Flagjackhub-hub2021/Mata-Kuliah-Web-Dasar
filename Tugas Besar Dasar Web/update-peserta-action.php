<?php
require 'koneksi.php';
$id = $_POST["id"];
$kd_skema = $_POST["kd_skema"];
$nm_peserta = $_POST["nm_peserta"];
$jk = $_POST["jk"];
$alamat = $_POST["alamat"];
$no_hp = $_POST["no_hp"];

$sql = "UPDATE peserta SET kd_skema='$kd_skema', nm_peserta='$nm_peserta', jk='$jk', alamat='$alamat', no_hp='$no_hp' WHERE id='$id' ";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil){
    header("Location:index.php?page=peserta&notif=sukses&pesan=Update Sukses");
} else {
    header("Location:index.php?page=peserta&notif=Update Gagal");
}