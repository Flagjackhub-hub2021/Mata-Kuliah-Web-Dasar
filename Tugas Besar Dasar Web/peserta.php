<main>
    <div class="container-fluid px-4">
        <div class="card mb-4 mt-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Peserta
                <div style="float: right;">
                    <a href="index.php?page=create-peserta" class="btn btn-sm btn-primary">Tambah Data</a>
                </div>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Kode Skema</th>
                            <th>Nama Peserta</th>
                            <th>L/P</th>
                            <th>Alamat</th>
                            <th>No. HP date</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                   <tbody>
                        <?php
                        $qr = "SELECT * FROM peserta";
                        $result = mysqli_query($koneksi, $qr);
                        foreach($result as $data){
                        ?>
                        <tr>
                            <td><?= $data['kd_skema'] ?></td>
                            <td><?= $data['nm_peserta'] ?></td>
                            <td><?= $data['jk'] ?></td>
                            <td><?= $data['alamat'] ?></td>
                            <td><?= $data['no_hp'] ?></td>
                            <td>
                                <a href="index.php?page=update-peserta&id=<?= $data['id'] ?>" class="btn btn-sm btn-warning"> Edit Data </a>
                                <a href="hapus-peserta.php?id=<?=$data['id'] ?>" class="btn btn-sm btn-danger m-2">Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
                   </tbody>

                </table>
            </div>
        </div>
    </div>
</main>