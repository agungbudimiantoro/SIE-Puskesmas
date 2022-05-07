<?php
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM kunjungan where kode_kunjungan='$id'");
$data = mysqli_fetch_assoc($query);
?>
<h3>Edit Data Kunjungan</h3>
<div class="row">
    <div class="col-md-6">
        <form action="?p=kunjungan_proses" method="POST">
            <div class="mb-3">
                <label for="id" class="form-label">Kode Kunjungan</label>
                <input type="text" name="id" value="<?= $id ?>" readonly class="form-control" id="id" aria-describedby="emailHelp" required>
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
                <label for="tanggal" class="form-label">tanggal kunjungan</label>
                <input type="date" name="tgl_kunjungan" value="<?= $data['tgl_kunjungan'] ?>" class="form-control" id="tanggal" aria-describedby="emailHelp" required>
            </div>
            <button type="submit" name="edit" class="btn btn-primary">Ubah</button>
            <button onclick="history.back()" class="btn btn-secondary">Kembali</button>
        </form>
    </div>
</div>