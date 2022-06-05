<?php
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM dokter where kode_dokter='$id'");
$data = mysqli_fetch_assoc($query);
?><tr>
    <h3>Edit Data Dokter</h3>
    <div class="row">
        <div class="col-md-6">
            <form action="?p=dokter_proses" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Kode Dokter</label>
                    <input type="text" name="id" value="<?= $id ?>" readonly class="form-control" id="username" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Nama Dokter</label>
                    <input type="text" name="nama_dokter" value="<?= $data['nama_dokter'] ?>" class="form-control" id="username" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Pasien</label>
                    <select class="form-select" aria-label="Default select example" name="kode_pasien" required>
                        <option disabled selected>Nama Pasien</option>
                        <?php
                        $select_query = mysqli_query($conn, "SELECT * FROM pasien");
                        while ($data_sel = mysqli_fetch_assoc($select_query)) {
                            if ($data['kode_pasien'] == $data_sel['kode_pasien']) {
                        ?>
                                <option selected value="<?= $data_sel['kode_pasien'] ?>"><?= $data_sel['nama_pasien'] ?></option>
                            <?php } else { ?>
                                <option value="<?= $data_sel['kode_pasien'] ?>"><?= $data_sel['nama_pasien'] ?></option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="HAsil" class="form-label">Hasil Diaknosa</label>
                    <textarea class="form-control" name="hasil_diaknosa" id="exampleFormControlTextarea1" rows="3" require><?= $data['hasil_diaknosa'] ?></textarea>
                </div>

                <button type="submit" name="edit" class="btn btn-primary">Ubah</button>
                <button onclick="history.back()" class="btn btn-secondary">Kembali</button>
            </form>
        </div>
    </div>