<?php
require 'koneksi.php';
$id = $_GET["id"];
$qr = "SELECT * FROM peserta WHERE id='$id'";
$result = mysqli_query($koneksi, $qr);
$data = mysqli_fetch_assoc($result);
?>

<main>
    <div class="container-fluid px-4">
        <div class="card mb-4 mt-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Form Peserta
            </div>
            <form action="update-peserta-action.php" method="post">
                <input type="hidden" name="id" value="<?= $data['id'] ?>">
                <div class="card-body">
                    <div class="form-group mb-2">
                        <label for="kd_skema">Kode Skema</label>
                        <input type="text" name="kd_skema" value="<?= $data['kd_skema'] ?>" class="form-control">
                    </div> 
                    <div class="form-group mb-2">
                        <label for="nm_peserta">Nama Peserta</label>
                        <input type="text" name="nm_peserta" value="<?= $data['nm_peserta'] ?>" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="jk">Jenis Kelamin</label>
                        <select name="jk" class="form-control">
                            <option value="">Pilih</option>
                            <option value="Laki-Laki" <?= $data['jk'] == 'Laki-Laki' ? 'selected': '' ?>>Laki-Laki</option>
                            <option value="Perempuan" <?= $data['jk'] == 'Perempuan' ? 'selected': '' ?>>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" rows="3" class="form-control"><?=$data['alamat'] ?></textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="no_hp">Nomor HP</label>
                        <input type="text" name="no_hp" value="<?= $data['no_hp'] ?>" class="form-control">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-success">Simpan</button>

                </div>
            </form>
        </div>
    </div>
</main>