<main>
    <div class="container-fluid px-4">
        <div class="card mb-4 mt-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Form Peserta
            </div>
            <form action="create-peserta-action.php" method="post">
                <div class="card-body">
                    <div class="form-group mb-2">
                        <label for="kd_skema">Kode Skema</label>
                        <input type="text" name="kd_skema" class="form-control">
                    </div> 
                    <div class="form-group mb-2">
                        <label for="nm_peserta">Nama Peserta</label>
                        <input type="text" name="nm_peserta" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="jk">Jenis Kelamin</label>
                        <select name="jk" class="form-control">
                            <option value="">Pilih</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="no_hp">Nomor HP</label>
                        <input type="text" name="no_hp" class="form-control">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-success">Simpan</button>

                </div>
            </form>
        </div>
    </div>
</main>